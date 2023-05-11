from bs4 import BeautifulSoup
import re
import pickle
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.options import Options
import time
import mysql.connector

db = mysql.connector.connect(host='localhost', port=3306,
                            user='py', passwd='pswd', db='Nespresso')

url_file = open("urls.txt", "r")
urls=[]

line=url_file.readline()
while line != "":
    line=line.rstrip('\n')
    urls+=[line]
    line=url_file.readline()

url_file.close()
count=0
for url in urls:
    print(len(urls)-count, "urls left")
    print(url)
    # initiating the webdriver. Parameter includes the path of the webdriver.
    driver_exe = './chromedriver'
    options = Options()
    #options.add_argument("--headless")
    options.add_argument("disable-infobars")
    options.add_argument("--disable-extensions")
    options.add_argument(f'user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3')
    options.add_argument('user-data-dir=C:/Users/adria/AppData/Local/Google/Chrome/User Data/Profile 1')
    driver = webdriver.Chrome(driver_exe, options=options)

    driver.get(url)

    # this is just to ensure that the page is loaded
    print("Loading...")
    print(url)
    time.sleep(30)

    html = driver.page_source
    print("Loaded")
    print("url:", url)

    soup = BeautifulSoup(html, "html.parser")

    print(soup.title)

    try:
        results = soup.find_all("div", class_=re.compile("[a-z](_card__)|(-)content"))
        tech = soup.find("div", class_="cb-content")
        tech = soup.find("div", class_=re.compile("([a-z][a-z]_card__content)|([a-z][a-z]-content)").find("p", class_=re.compile("([a-z][a-z]_card__technology)|([a-z][a-z]-technology)")).get_text())
        rang = soup.find("div", class_=re.compile("[a-z]_card__content")).find("p", class_=re.compile("[a-z]_card__range")).get_text()
        title = re.sub(r'[\n]', '', soup.find("div", class_=re.compile("[a-z]_card__content")).find("h1", class_=re.compile("[a-z]_card__title")).get_text())
        text = soup.find("div", class_=re.compile("[a-z]_card__content")).find("p", class_=re.compile("[a-z]_card__text")).get_text()
        intensity = re.sub(r'[\nIntensity ]', '', soup.find("div", class_=re.compile("[a-z]_card__content")).find(
            "nb-intensity").get_text())

        desc = soup.find("div", class_="description").get_text()

        if 'oz' in rang:
            size = float(re.sub('[^0-9.]', '', rang))
            size = size * 28.4130
            rang = None
        else:
            size = None

        with open('land.pkl', 'rb') as f:
            land = pickle.load(f)

        #Test for country
        print(desc)
        country = ""
        for i in land:
            if land[i] in desc:
                country = land[i]
                break
            else:
                country = "Unknown"

        key = ('technology', 'range', 'title', 'text', 'intensity', 'size', 'country')
        data = (tech, rang, title, text, intensity, size, country)

        dic={}
        for i in range(len(key)):
            if data[i] != "":
                dic[key[i]] = data[i]
            else:
                dic[key[i]] = "Unknown"

        print(dic)


        #Store in database    
        cursor = db.cursor()
        cursor.execute("SELECT * FROM Kapsel WHERE Navn = %s AND Teknologi = %s;", (dic['title'], dic['technology']))
        result = cursor.fetchall()
        

        if len(result) == 0:
            insert_cursor = db.cursor()
            cursor.execute("INSERT INTO Kapsel (Teknologi, Rekke, Navn, Smak, Intensitet, Størrelse, Opphav) VALUES (%s, %s, %s, %s, %s, %s, %s);", (dic['technology'], dic['range'], dic['title'], dic['text'], dic['intensity'], dic['size'], dic['country']))
            db.commit()
            insert_cursor.close()
            print("Inserted")
        else:
            print("Already in database")
        
        cursor.close()

    except AttributeError as e:
        open('error.txt', 'a').write(url + '\n')
        print("Error: " + url)

    driver.close()
    count+=1
        
driver.quit()
db.close()

