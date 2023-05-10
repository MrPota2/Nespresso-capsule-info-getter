from bs4 import BeautifulSoup
import re
import pickle
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
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

for url in urls:
    # initiating the webdriver. Parameter includes the path of the webdriver.
    driver = webdriver.Chrome('./chromedriver')
    driver.get(url)

    # this is just to ensure that the page is loaded
    time.sleep(3)

    html = driver.page_source

    soup = BeautifulSoup(html, "html.parser")

    results = soup.find("div", class_="cn_card__content").prettify()

    key = ('technology', 'range', 'title', 'text', 'intensity', 'country')

    tech = soup.find("div", class_="cn_card__content").find("p", class_="cn_card__technology").get_text()
    rang = soup.find("div", class_="cn_card__content").find("p", class_="cn_card__range").get_text()
    title = re.sub(r'[\n]', '', soup.find("div", class_="cn_card__content").find("h1", class_="cn_card__title").get_text())
    text = soup.find("div", class_="cn_card__content").find("p", class_="cn_card__text").get_text()
    intensity = re.sub(r'[\nIntensity ]', '', soup.find("div", class_="cn_card__content").find(
        "nb-intensity").get_text())

    desc = soup.find("div", class_="description").get_text()

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


    data = (tech, rang, title, text, intensity, country)

    dic={}
    for i in range(len(key)):
        if data[i] != "":
            dic[key[i]] = data[i]
        else:
            dic[key[i]] = "Unknown"

    print(dic)

    driver.close()

    #Store in database    
    cursor = db.cursor()
    cursor.execute("INSERT INTO Kapsel (Teknologi, Rekke, Navn, Smak, Intensitet, Land) VALUES (%s, %s, %s, %s, %s, %s)", (dic['technology'], dic['range'], dic['title'], dic['text'], dic['intensity'], dic['country']))
    db.commit()
    cursor.close()


db.close()

