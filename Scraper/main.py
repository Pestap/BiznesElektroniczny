import time

import requests #biblioteka do obsługi żądań http
from bs4 import BeautifulSoup #przetwarzanie html
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
import os

#bazowy adres sklepu
from selenium.webdriver.common.by import By

base_url = "https://www.carrefour.pl"

#kategorie
categories = ["mleko-nabial-jaja", "napoje?page=0"]


options = Options()
chrome_driver = os.getcwd() + "D:\webdriver\chromedriver.exe" #chrome webdriver location
#options.headless = True
driver = webdriver.Chrome(options=options, executable_path=chrome_driver)


driver.get(base_url +f"/{categories[1]}")
driver.implicitly_wait(1)
driver.find_element(By.CSS_SELECTOR, "#onetrust-accept-btn-handler").click()
#scroll
time.sleep(3)

total_height = driver.execute_script("return document.body.scrollHeight")

for i in range(1, total_height, 200):
    driver.execute_script(f"window.scrollTo(0, {i})")
    time.sleep(0.1)

soup = BeautifulSoup(driver.page_source, "html.parser")
divs = soup.find_all(By.CLASS_NAME, "jss315")
for div in divs:
    print(div.prettify())

print(len(divs))







