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



def get_urls():
    """ 
    open urls.txt and return a list of urls 
    
    Returns: list of urls 
    """
    url_file = open("urls.txt", "r")
    urls = []
    line=url_file.readline()
    while line != "":
        line=line.rstrip('\n')
        urls+=[line]
        line=url_file.readline()
    url_file.close()
    return urls



def open_url(url):
    """
    Open a url and returns the soup

    url: url to open

    Returns: soup
    """
    driver = uc.Chrome(headless=True, version_main=113)
    print('URL:',url)

    driver.get(url)

    # this is just to ensure that the page is loaded
    print("Loading...")
    time.sleep(3)

    html = driver.page_source
    soup = BeautifulSoup(html, "html.parser")
    print("Loaded:", soup.title)
    return soup, driver



def find_data(query, driver):
    """
    Inform user of search query and return the result

    query: soup search query
    driver: selenium driver

    Returns: soup result
    """

    search = query
    print("Searching for:", str(search))
    print('Result:', search)
    driver.close()
    print("\n\n")
    return search

def size_check(fluid):
    """
    Check if size is in the search result and convert to ml

    fluid: soup search result

    Returns: size in ml
    """

    # Test for size
    if 'oz' in fluid:
        ML = 28.4130
        size_oz = float(re.sub('[^0-9.]', '', fluid))
        size_ml = size_oz * ML
        fluid = None
    else:
        size_oz = None
        size_ml = None
    print(size_ml)
    return size_ml


def country_check(desc):
    """
    Check if the origin country is in the search result

    desc: soup search result (description)

    Returns: origin country
    """
    with open('land.pkl', 'rb') as f:
        land = pickle.load(f)
    #Test for country
    country = ""
    for i in land:
        if land[i] in desc:
            country = land[i]
        else:
            country = "Unknown"
    print(country)
    return country

def assemble_data(data):
    """
    Assemble data about the coffe into a dictionary

    data: complete list of coffee attributes

    Returns: dictionary containing all coffee data

    not sure if this is useful
    it definitely is... (I think). Maybe not. I don't know. I'm not sure. I'm confused.
    it stays for now
    """
    
    key = ('technology', 'range', 'title', 'text', 'intensity', 'size', 'country')
    dic={}
    for i in range(len(key)):
        if data[i] != "":
            dic[key[i]] = data[i]
        else:
            dic[key[i]] = "Unknown"
    return dic

def exist_check(dic, db):
    """
    Check if the coffee is already in the database

    dic: dictionary containing all coffee data
    db: database connection

    Returns: True if coffee is in database, False if not
    """
    #Store in database    
    cursor = db.cursor()
    cursor.execute("SELECT * FROM Kapsel WHERE Navn = %s AND Teknologi = %s;", (dic['title'], dic['technology']))
    existing_coffee = cursor.fetchall()
    cursor.close()
    if existing_coffee == []:
        return False
    else:
        return True, existing_coffee

def insert(dic, db):
    """
    Insert coffee into database
    
    dic: dictionary containing all coffee data
    db: database connection
    """
    insert_cursor = db.cursor()
    insert_cursor.execute("INSERT INTO Kapsel (Teknologi, Rekke, Navn, Smak, Intensitet, Størrelse, Opphav) VALUES (%s, %s, %s, %s, %s, %s, %s);", (dic['technology'], dic['range'], dic['title'], dic['text'], dic['intensity'], dic['size'], dic['country']))
    db.commit()
    insert_cursor.close()
    print("Inserted")
        

def update(dic, existing_coffee, db):
    """
    Update coffee in database
    
    dic: dictionary containing all coffee data
    
    existing_coffee: result from exist_check
    """
    if existing_coffee[0][1] != dic['range'] or existing_coffee[0][2] != dic['text'] or existing_coffee[0][3] != dic['intensity'] or existing_coffee[0][4] != dic['size'] or existing_coffee[0][5] != dic['country']:
        update_cursor = db.cursor()
        update_cursor.execute("UPDATE Kapsel SET Rekke = %s, Smak = %s, Intensitet = %s, Størrelse = %s, Opphav = %s WHERE Teknologi = %s AND Navn = %s;", (dic['range'], dic['text'], dic['intensity'], dic['size'], dic['country'], dic['technology'], dic['title']))
        db.commit()
        update_cursor.close()
        print("Updated")
    else:
        print("Already in database")


def move(url):
    """
    Move url from urls.txt to done.txt
    
    url: url to move
    """
    urls = get_urls()
    open('done.txt', 'a').write(url + '\n')
    url_file_=open('urls.txt', 'w')
    for i in urls:
        if i != url:
            url_file_.write(i + '\n')
    url_file_.close()


def main():
    """
    Main function (duh)
    """
    db = mysql.connector.connect(host='localhost', port=3306,
                            user='py', passwd='pswd', db='Nespresso')
    
    urls = get_urls()
    for url in urls:
        soup, driver = open_url(url)
        technology = soup.find("h1", class_="product-header__title").get_text()
        range_ = soup.find("div", class_="product-header__subtitle").get_text()
        title = soup.find("h2", class_="product-header__name").get_text()
        text = soup.find("div", class_="product-header__description").get_text()
        intensity = soup.find("div", class_="product-header__intensity").get_text()
        fluid = soup.find("div", class_="product-header__fluid").get_text()
        desc = soup.find("div", class_="product-header__description").get_text()
        size = size_check(fluid)
        country = country_check(desc)
        driver.close()
        data = [technology, range_, title, text, intensity, size, country]
        dic = assemble_data(data)
        if exist_check(dic, db) == False:
            insert(dic, db)
        else:
            update(dic, exist_check(dic, db)[1], db)
        move(url)

    db.close()

if __name__ == "__main__":
    main()

