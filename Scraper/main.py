import time

import requests #biblioteka do obsługi żądań http
from bs4 import BeautifulSoup #przetwarzanie html
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
import os

#bazowy adres sklepu
from selenium.webdriver.common.by import By

from product import Product


def get_categories_of_product(product, webdriver):
    webdriver.get(product.href)
    webdriver.implicitly_wait(1)

    page = BeautifulSoup(webdriver.page_source, "html.parser")

    breadcrumbs = page.find_all(class_="MuiBreadcrumbs-li")
    breadcrumbs = breadcrumbs[1:]

    product.categories = [x.text for x in breadcrumbs]#from broader to more specific


base_url = "https://www.carrefour.pl"

#kategorie
categories = ["mleko-nabial-jaja", "napoje"]


options = Options()
chrome_driver = os.getcwd() + "D:\webdriver\chromedriver.exe" #chrome webdriver location
#options.headless = True
driver = webdriver.Chrome(options=options, executable_path=chrome_driver)


driver.get(base_url +f"/{categories[1]}")
driver.implicitly_wait(1)
driver.find_element(By.CSS_SELECTOR, "#onetrust-accept-btn-handler").click()
#scroll
time.sleep(2)

total_height = driver.execute_script("return document.body.scrollHeight")

for i in range(1, total_height, 200):
    driver.execute_script(f"window.scrollTo(0, {i})")
    time.sleep(0.1)

products = []
soup = BeautifulSoup(driver.page_source, "html.parser")
#get all divs with product data
product_divs = soup.find_all(class_="jss315")

url = base_url + "/" +categories[1]
for product_div in product_divs:
    parsed_product = BeautifulSoup(str(product_div), "html.parser")
    img = parsed_product.find('img') # get product image
    img_src = img.get('src')
    product_name = parsed_product.find(class_ ="MuiButtonBase-root jss333").text
    product_price = parsed_product.find(class_ = "jss335").findChildren()
    product_href = url + parsed_product.find(class_="MuiButtonBase-root jss333").get('href')
    price_zl = int(product_price[0].text)
    price_gr = int(product_price[1].text)
    price = price_zl + price_gr/100


    products.append(Product(product_name, price, img_src, [], product_href))

print(len(products))

for product in products[3:4]:
    get_categories_of_product(product, driver)
    product.save_img()
    print(product.toJSON())
    time.sleep(1)







