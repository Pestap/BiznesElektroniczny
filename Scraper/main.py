import time

from bs4 import BeautifulSoup #przetwarzanie html
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.common.by import By
from fake_useragent import UserAgent #fake user agent to avoid blocking by site
import os

from product import Product


def get_categories_of_product(product):
    ua = UserAgent()
    user = ua.random
    options = Options()
    chrome_driver = os.getcwd() + "D:\webdriver\chromedriver.exe"  # chrome webdriver location
    options.headless = True
    options.add_argument(f'user-agent={user}')
    driver = webdriver.Chrome(options=options, executable_path=chrome_driver)
    driver.get(product.href)
    driver.implicitly_wait(2)

    page = BeautifulSoup(driver.page_source, "html.parser")

    breadcrumbs = page.find_all(class_="MuiBreadcrumbs-li")
    breadcrumbs = breadcrumbs[1:]

    product.categories = [x.text for x in breadcrumbs]#from broader to more specific
    driver.close()

base_url = "https://www.carrefour.pl"

#kategorie
categories = ["mleko-nabial-jaja", "napoje"]

products = []

#29 pages indexed: 0 - 28
for page in range(25,28):
    page_url = base_url +f"/{categories[1]}" + f"?page={page}"
    #creating random user agent to user
    ua = UserAgent()
    user = ua.random

    options = Options()
    chrome_driver = os.getcwd() + "D:\webdriver\chromedriver.exe" #chrome webdriver location
    options.headless = True
    options.add_argument(f'user-agent={user}')
    driver = webdriver.Chrome(options=options, executable_path=chrome_driver)


    driver.get(page_url)
    driver.implicitly_wait(10)
    if page == 0:
        driver.find_element(By.CSS_SELECTOR, "#onetrust-accept-btn-handler").click()
    #scroll
    time.sleep(2)

    total_height = driver.execute_script("return document.body.scrollHeight")

    for i in range(1, total_height, 200):
        driver.execute_script(f"window.scrollTo(0, {i})")
        time.sleep(0.1)

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
        price = price_zl + round(price_gr/100, 2)


        products.append(Product(product_name, price, img_src, [], product_href))

    print(len(products))
    for product in products:
        start = time.time()
        get_categories_of_product(product)
        stop = time.time()
        product.save_img()
        print(str(stop-start) + "-" + product.toJSON())








