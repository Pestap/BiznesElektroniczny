import requests #biblioteka do obsługi żądań http

#bazowy adres sklepu
base_url = "https://www.carrefour.pl"

#kategorie
categories = ["mleko-nabial-jaja", "napoje"]


def get_html(url):
    web_response = requests.get(url)
    webpage = web_response.text
    return webpage


result = get_html(base_url +"/" + categories[1])
