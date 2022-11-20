import json


def create_categories_csv(filename):
    with open(f"../Results/{filename}", encoding='utf-8') as file:
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



        categories_tuples = set()

        for el in categories:
            for idx, cat in enumerate(el[1:]):
                # format - categry - upper car
                categories_tuples.add((cat, el[idx]))

        categories_tuples.add(("Owoce, warzywa, zioła", "Strona główna"))
        categories_tuples.add(("Wędliny, kiełbasy", "Strona główna"))


create_categories_csv('products.json')