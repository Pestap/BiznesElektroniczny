import datetime
import time

from bs4 import BeautifulSoup #przetwarzanie html
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chromium.service import ChromiumService
from selenium.webdriver.common.by import By
from fake_useragent import UserAgent #fake user agent to avoid blocking by site
from webdriver_manager.chrome import ChromeDriverManager
from webdriver_manager.core.utils import ChromeType
import json



from product import Product

def create_json_file(products, file_name):
    file_url = "../Results/"+file_name
    with open(file_url, "w", encoding='utf8') as json_file:
        json.dump([x.__dict__ for x in products], json_file, ensure_ascii=False)

def get_categories_of_product(product):
    #random user agent
    ua = UserAgent()
    user = ua.random
    options = Options()
    #headless mode
    options.headless = True
    options.add_argument(f'user-agent={user}')
    driver = webdriver.Chrome(options=options, service=ChromiumService(ChromeDriverManager(chrome_type=ChromeType.CHROMIUM).install()))
    driver.get(product.href)
    driver.refresh() # in order to bypass error 15
    driver.implicitly_wait(3) # wait for load

    try:
        driver.find_element(By.CSS_SELECTOR, "#onetrust-accept-btn-handler").click()
    except:
        print( "ERROR IN CATEGORIES: " + product.toJSON())
        with open("../Results/" +str(datetime.datetime.now().strftime("%Y-%m-%d-%H-%M-%S"))+"_error_in_cat.png", "wb") as file:
            page = driver.find_element(By.TAG_NAME, "body")
            file.write(page.screenshot_as_png)

    page = BeautifulSoup(driver.page_source, "html.parser") #get page content

    # Get categories of element via breadcrumb menu

    breadcrumbs = page.find_all(class_="MuiBreadcrumbs-li") #find breadcrumb menu element
    breadcrumbs = breadcrumbs[1:] #except first element (always "Strona główna")
    product.categories = [x.text for x in breadcrumbs] #create list
    driver.close()

base_url = "https://www.carrefour.pl"

#category data
categories = [{"name": "owoce-warzywa-ziola",
               "div": "jss305",
               "el_name": "MuiButtonBase-root jss323",
               "price": "jss325",
               "page_number": 7},
              {"name": "wedliny-kielbasy",
               "div": "jss305",
               "el_name": "MuiButtonBase-root jss323",
               "price": "jss325",
               "page_number": 5}]

products = []

for el in categories:
    for page in range(0, el['page_number']):

        #get page url
        page_url = base_url + f"/{el['name']}" + f"?page={page}"

        #creating random user agent to user
        ua = UserAgent()
        user = ua.random
        options = Options()
        options.headless = True
        options.add_argument(f'user-agent={user}')

        driver = webdriver.Chrome(service=ChromiumService(ChromeDriverManager(chrome_type=ChromeType.CHROMIUM).install()), options=options)
        driver.get(page_url)
        driver.refresh() # bypass Error 15
        driver.implicitly_wait(1)

        try:
            driver.find_element(By.CSS_SELECTOR, "#onetrust-accept-btn-handler").click()
        except:
            print("ERROR " + str(page))
            with open("../Results/" + str(page) + ".png" , "wb") as file:
                page = driver.find_element(By.TAG_NAME, "body")
                file.write(page.screenshot_as_png)


        #Scroll whole page to load images
        total_height = driver.execute_script("return document.body.scrollHeight")

        for i in range(1, total_height, 200):
            driver.execute_script(f"window.scrollTo(0, {i})")
            time.sleep(0.1)

        soup = BeautifulSoup(driver.page_source, "html.parser")

        #get all divs with product data
        product_divs = soup.find_all(class_=f"{el['div']}")

        #url = base_url + "/" + f"{el['name']}" # get category base url
        for product_div in product_divs:
            start = time.time()
            parsed_product = BeautifulSoup(str(product_div), "html.parser")
            img = parsed_product.find('img') # get product image
            img_src = img.get('src') # get src attribute of image
            product_name = parsed_product.find(class_ =el['el_name']).text # get name
            product_price = parsed_product.find(class_ = el['price']).findChildren() # get price from 2 components
            product_href = base_url + parsed_product.find(class_=el['el_name']).get('href') # get product URL
            price_zl = int(product_price[0].text) # extract 1st price element
            price_gr = int(product_price[1].text) # extract 2nd price element
            price = round(price_zl + price_gr/100,2) #

            #Append product to list
            new_product = Product(product_name, price, img_src, [], product_href)
            get_categories_of_product(new_product)
            new_product.save_img()
            stop = time.time()
            print(f"{round(stop-start,2)}s - {new_product.toJSON()}")
            products.append(new_product)

        driver.close()
        #create backup json
        create_json_file(products, "Backups/products"+str(datetime.datetime.now().strftime("%Y-%m-%d-%H-%M-%S"))+".json")

# create JSON file
create_json_file(products, "products.json")






