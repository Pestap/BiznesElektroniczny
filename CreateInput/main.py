import json
import csv
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
    writer.writerow(["Nazwa", 'Cena z podatkiem', 'Kategoria', 'Ilość', 'URL zdjecia'])
    for product in result:
        row = [product['name'], product['price'], product['categories'][-1], 30, product['img_src'], product['description']]
        writer.writerow(row)


create_categories_csv('products.json')
create_products_csv('products.json')