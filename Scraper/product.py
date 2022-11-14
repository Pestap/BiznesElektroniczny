import json
import urllib.request
import requests
from bs4 import BeautifulSoup #przetwarzanie html
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chromium.service import ChromiumService
from selenium.webdriver.common.by import By
from webdriver_manager.chrome import ChromeDriverManager
from webdriver_manager.core.utils import ChromeType
from fake_useragent import UserAgent


class Product:
    def __init__(self, name, price, img_src, categories, href):
        self.name = name
        self.price = price
        self.img_src = img_src
        self.categories = categories
        self.href = href

    def toJSON(self):
        return json.dumps(self.__dict__, ensure_ascii=False)

    def save_img(self):

        name = self.img_src.split('/')[-1]
        print(self.img_src)
        ua = UserAgent()

        user = ua.random
        options = Options()
        # options.headless = False
        options.add_argument(f'user-agent={user}')

        driver = webdriver.Chrome(
            service=ChromiumService(ChromeDriverManager(chrome_type=ChromeType.CHROMIUM).install()), options=options)
        driver.get(self.img_src)
        driver.refresh()
        driver.implicitly_wait(1)


        with open("test.png", "wb") as file:
            el = driver.find_element(By.TAG_NAME, "img")
            file.write(el.screenshot_as_png)

        self.img_src = "../Images/"+name