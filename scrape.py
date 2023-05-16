from bs4 import BeautifulSoup
import re
import pickle
import datetime
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.options import Options
import time
import mysql.connector
import undetected_chromedriver as uc

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

errlog = False
count=0
for url in urls:
    driver = uc.Chrome(headless=True, version_main=113)
    error = []
    print(len(urls)-count, "urls left")
    print('URL:',url)
    # initiating the webdriver. Parameter includes the path of the webdriver.
    
    #options.add_argument("disable-infobars")
    #options.add_argument("--disable-extensions")
    #options.add_argument(f'user-agent=Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3')
    #options.add_argument('user-data-dir=C:/Users/adria/AppData/Local/Google/Chrome/User Data/Profile 1')
    #driver = webdriver.Chrome(driver_exe, options=options)

    driver.get(url)

    # this is just to ensure that the page is loaded
    print("Loading...")
    time.sleep(3)

    html = driver.page_source
    

    soup = BeautifulSoup(html, "html.parser")
    print("Loaded:", soup.title)

    try:
        
        try:
            tech = soup.find("div", class_="cb-content").find("p", class_="cb-technology").get_text()
            print(tech)
        except AttributeError as e:
            tech = "Unknown"
            error += ("tech", e)
        try:
            rang = soup.find("div", class_="cb-content").find("p", class_="cb-range").get_text()
            print(rang)
        except AttributeError as e:
            rang = "Unknown"
            error += ("rang", e)
        try:
            title = re.sub(r'[\n]', '', soup.find("div", class_="cb-content").find("h1", class_="cb-heading").get_text())
            print(title)
        except AttributeError as e:
            title = "Unknown"
            error += ("title", e)
        try:
            text = soup.find("div", class_="cb-content").find("p", class_="cb-text").get_text()
            print(text)
        except AttributeError as e:
            text = "Unknown"
            error += ("text", e)
        try:
            intensity = re.sub(r'[\nIntensity ]', '', soup.find("div", class_="cb-content").find(
            "nb-intensity").get_text())
            print(intensity)
        except AttributeError as e:
            intensity = None
            error += ("intensity", e)

        try:
            

            # Test for size
            fluid = soup.find("div", class_="nb-list__item-label").get_text()
            if 'oz' in rang:
                size = float(re.sub('[^0-9.]', '', rang))
                size = size * 28.4130
                rang = None
            else:
                size = None
            print(size)

        except AttributeError as e:
            desc = "Unknown"
            error+=("desc", e)
            size = None


        
        with open('land.pkl', 'rb') as f:
            land = pickle.load(f)

        desc = soup.find("div", class_="description").get_text()
        #Test for country
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

        

        try:
            #Store in database    
            cursor = db.cursor()
            cursor.execute("SELECT * FROM Kapsel WHERE Navn = %s AND Teknologi = %s;", (dic['title'], dic['technology']))
            result = cursor.fetchall()
            cursor.close()
            

            if len(result) == 0:
                insert_cursor = db.cursor()
                insert_cursor.execute("INSERT INTO Kapsel (Teknologi, Rekke, Navn, Smak, Intensitet, Størrelse, Opphav) VALUES (%s, %s, %s, %s, %s, %s, %s);", (dic['technology'], dic['range'], dic['title'], dic['text'], dic['intensity'], dic['size'], dic['country']))
                db.commit()
                insert_cursor.close()
                print("Inserted")
            
            else: 
                if result[0][1] != dic['range'] or result[0][2] != dic['text'] or result[0][3] != dic['intensity'] or result[0][4] != dic['size'] or result[0][5] != dic['country']:
                    update_cursor = db.cursor()
                    update_cursor.execute("UPDATE Kapsel SET Rekke = %s, Smak = %s, Intensitet = %s, Størrelse = %s, Opphav = %s WHERE Teknologi = %s AND Navn = %s;", (dic['range'], dic['text'], dic['intensity'], dic['size'], dic['country'], dic['technology'], dic['title']))
                    db.commit()
                    update_cursor.close()
                    print("Updated")
                else:
                    print("Already in database")

            open('done.txt', 'a').write(url + '\n')
            url_file_=open('urls.txt', 'w')
            for i in urls:
                if i != url:
                    url_file_.write(i + '\n')
            url_file_.close()
                
            
        except mysql.connector.Error as e:
            error += ("database", e)
            print("Error: " + dic['title'] + "\n" + str(e))

        if len(error) > 0:
            if errlog == False:
                timestamp = datetime.datetime.now().strftime("%Y-%m-%d_%H-%M-%S")
                err_file = open('./logs/error_' + timestamp + '.txt', 'w')
                err_file.write('URL: ' + url + '\n')
                for i in error:
                    err_file.write('ERROR: ' + str(i) + '\n\n')
                err_file.close()
                errlog = True
            else:
                err_file = open('./logs/error_' + timestamp + '.txt', 'a')
                err_file.write(url + '\n')
                for i in error:
                    err_file.write(str(i) + '\n')
                err_file.close()


    except AttributeError as e:
        open('error.txt', 'a').write(url + '\n')
        print("Error: " + url)

    driver.close()
    count+=1
    print("\n\n")
        
if driver is not None:
    driver.quit()
else:
    print("Driver not initialized")

db.close()

