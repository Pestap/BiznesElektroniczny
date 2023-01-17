from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chromium.service import ChromiumService
#from webdriver_manager.chrome import ChromeDriverManager
#from webdriver_manager.core.utils import ChromeType

import random
import time
import string

chromeOptions = webdriver.ChromeOptions()
#chromeOptions.add_argument("--headless")
#chromeOptions.add_argument("--remote-debugging-port=9222")
#chromeOptions.add_argument("--no-sandbox")

options = Options()
#headless mode
options.headless = False
driver = webdriver.Chrome(options=options)#, service=ChromiumService(ChromeDriverManager(chrome_type=ChromeType.CHROMIUM).install()))


#driver = webdriver.Chrome(options=chromeOptions)

driver.get("https://localhost")

#ostrzeżenie przed certyfiaktem
driver.find_element(By.ID, "details-button").click()
driver.find_element(By.ID, "proceed-link").click()

for i in range(10):
	categories = driver.find_elements(By.CLASS_NAME, "dropdown-item")
	categories = [c for c in categories if c.text]

	if i < 5:
		categories[0].click()
	else:
		categories[1].click()
	products = driver.find_elements(By.CLASS_NAME, "product-title")

	if i < 5:
		print(f"Added product {products[i].text}")
		products[i].click()
	else:
		print(f"Added product {products[i-5].text}")
		products[i].click()

	# Add to cart
	amount_button = driver.find_element(By.CLASS_NAME, "bootstrap-touchspin-up")
	count = random.randint(1, 3)
	for _ in range(count):
		amount_button.click()

	add_btn = driver.find_element(By.CLASS_NAME,"add-to-cart")
	add_btn.click()

	time.sleep(1)
	driver.get("https://localhost")
	continue

time.sleep(2)
cart_counter = driver.find_element(By.CLASS_NAME,"cart-products-count")
print("Items:", cart_counter.text)

cart_btn = driver.find_element(By.CLASS_NAME,"header")
cart_btn.click()

print("Deleting 1 item")

remove_btn = driver.find_element(By.CLASS_NAME,"remove-from-cart")
remove_btn.click()
time.sleep(2)
cart_counter = driver.find_element(By.CLASS_NAME,"cart-products-count")
print("Items:", cart_counter.text)

driver.get("https://localhost/index.php?controller=order")

# Mr
mr = driver.find_element(By.ID, "field-id_gender-1")
mr.click()
print("Mr", mr.is_selected())

# Random string
letters = string.ascii_lowercase
rand_str = ''.join(random.choice(letters) for i in range(8))

print("User fields:")

# First Name
first = driver.find_element(By.ID, "field-firstname")
first.click()
first.send_keys(rand_str)
print("First:", first.get_attribute("value"))

# Last Name
last = driver.find_element(By.ID,"field-lastname")
last.click()
last.send_keys(rand_str)
print("Last:", last.get_attribute("value"))

# Email
email = driver.find_element(By.ID,"field-email")
email.click()
email.send_keys(f"{rand_str}@biznes.com")
print("Email:", email.get_attribute("value"))

# Password
password = driver.find_element(By.ID,"field-password")
password.click()
password.send_keys("Piotrek#123")
print("Password:", password.get_attribute("value"))

# Checkboxes
c1 = driver.find_element(By.NAME,"customer_privacy")
c1.click()
c2 = driver.find_element(By.NAME,"psgdpr")
c2.click()

continue_btn = driver.find_element(By.NAME,"continue")
continue_btn.click()
time.sleep(2)

# Address
addr = driver.find_element(By.ID,"field-address1")
addr.send_keys("Mikolaja Reja 1")

# Postal code
pcode = driver.find_element(By.ID,"field-postcode")
pcode.send_keys("82-300")

# City
city = driver.find_element(By.ID,"field-city")
city.send_keys("Gdansk")

continue_btn = driver.find_element(By.NAME, "confirm-addresses")
continue_btn.click()

# Delivery - zmienic opcje?
delivery = driver.find_element(By.ID,"delivery_option_6")
#delivery.click()
driver.execute_script("arguments[0].click()", delivery)

continue_btn = driver.find_element(By.NAME, "confirmDeliveryOption")
continue_btn.click()

# Payment - zmienic opcje?
payment = driver.find_element(By.ID, "payment-option-2")
driver.execute_script("arguments[0].click()", payment)

# Terms
terms = driver.find_element(By.ID, "conditions_to_approve[terms-and-conditions]")
driver.execute_script("arguments[0].click()", terms)

# Place order
div = driver.find_element(By.ID, "payment-confirmation")
order_btn = div.find_element(By.TAG_NAME, "button")
order_btn.click()

driver.get("https://localhost/index.php?controller=history")
rows = driver.find_elements(By.CSS_SELECTOR, "tr")
print("Orders:")
for row in rows:
	print(row.text)

driver.quit()