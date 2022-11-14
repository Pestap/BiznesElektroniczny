import json
import urllib.request

import requests

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
        urllib.request.urlretrieve(self.img_src, "../Images/"+name)
        self.img_src = "../Images/"+name