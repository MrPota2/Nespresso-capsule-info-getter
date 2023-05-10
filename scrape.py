from bs4 import BeautifulSoup
import re
import pickle
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import time


url = "https://www.nespresso.com/us/en/order/capsules/vertuo/kahawa-ya-congo-vertuo-coffee-pods"

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
    else:
        country = "Unknown"


data = (tech, rang, title, text, intensity, country)

dic={}
for i in range(len(key)):
    dic[key[i]] = data[i]

print(dic)

#results = soup.find("body").find("main").find("div").find_next_sibling("div").find_next_sibling("div").find_next_sibling("div").find("div").find("nb-pdb")#.find("nb-pdb-header").find("nb-container").find("section").find("div").find_next_sibling("div").find("nb-plp-product-card").find("div")

#results = soup.find("cn_card__content")
#print(results)

txt = open("test.txt", "w")
txt.write(str(results))
txt.write(str(dic))
txt.close()
