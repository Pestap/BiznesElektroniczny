import json
import csv
import os

from category import Category

def create_categories_csv(filename):
    file = open(f"../Results/{filename}", encoding='utf-8')
    result = json.load(file)
    # result - dictrionary

    categories = []
    for el in result:
        categories.append(el['categories'])

    #get unique categories
    categories_unique = []
    for el in categories:
        if el not in categories_unique:
            categories_unique.append(el)
    # sort by length
    categories_unique.sort(key=len)

    main_category = Category("Strona główna", [], None)

    for cat in categories_unique:
        main_category.add_subcat(cat)


    f = open("../Results/categories.csv", 'w',encoding='utf-8', newline="")
    writer = csv.writer(f, delimiter=';')

    list_to_write = []
    main_category.create_list_to_write(list_to_write)
    writer.writerow(["Nazwa", 'Kategoria nadrzędna'])
    for cat in list_to_write:
        writer.writerow([cat[0], cat[1]])

def create_products_csv(filename):
    file = open(f"../Results/{filename}", encoding='utf-8')
    result = json.load(file)

    f = open("../Results/products.csv", 'w', encoding='utf-8', newline="")
    writer = csv.writer(f, delimiter=';')
    writer.writerow(["Nazwa", 'Cena z podatkiem', 'Kategoria', 'Ilość', 'URL zdjecia', 'Opis'])
    for product in result:
        row = [product['name'], product['price'], product['categories'][-1], 30, product['img_src'], product['description']]
        writer.writerow(row)

# change names of images to pngs (ONLY RUN ONCE AFTER SCRAPING)
def fix_json(filename):
    file = open(f"../Results/{filename}", encoding='utf-8')
    result = json.load(file)


    for el in result:
        name_array = el['img_src'].split('.')
        new_name = "http://localhost/img/p/" + name_array[0] + '.png'
        el['img_src'] = new_name

    file_url = "../Results/" + filename
    with open(file_url, "w", encoding='utf8') as json_file:
        json.dump(result, json_file, ensure_ascii=False)

def rename_images(url):
    list = os.listdir(url)
    for file in list:
        file_name_array = file.split('.')
        new_file_name = file_name_array[0] + '.' + file_name_array[-1]
        os.rename(url+'/'+file,url+'/'+ new_file_name)
    list = os.listdir(url)
    print(list)


#fix_json('products.json')
#create_categories_csv('products.json')
#create_products_csv('products.json')
#rename_images("../Results/Images")

def append_csv():
    rows = []
    with open('../Results/products.csv','r', encoding='utf-8') as f:
        csv_reader = csv.reader(f, delimiter=';')
        for row in csv_reader:
            row.append(4)
            rows.append(row)

    with open('../Results/products_2.csv', 'w', encoding='utf-8', newline="") as f:
        writer = csv.writer(f, delimiter=';')
        for row in rows:
            writer.writerow(row)




append_csv()