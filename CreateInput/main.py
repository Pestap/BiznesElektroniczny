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

    for el in categories_unique:
        print(el)
    main_category = Category("Strona główna", [], None)

    for cat in categories_unique:
        main_category.add_subcat(cat)


    f = open("../Results/categories.csv", 'w',encoding='utf-8', newline="")
    writer = csv.writer(f, delimiter=';')

    list_to_write = []
    main_category.create_list_to_write(list_to_write)

    for cat in list_to_write:
        writer.writerow([cat[0], cat[1]])
        print("t")

create_categories_csv('products.json')