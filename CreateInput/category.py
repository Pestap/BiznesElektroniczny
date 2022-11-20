class Category:
    def __init__(self, name, subactegories=[]):
        self.name = name
        self.subcategories = subactegories

    def add_subcat(self, cat_string):
        if len(cat_string) == 1:
            self.subcategories.append(Category(cat_string[0], []))
            return
        else:
            # find next cat
            children_node = None
            for cat in self.subcategories:
                if cat.name == cat_string[0]:
                    children_node = cat
                    break
            # if child category does not exist, add one according to strin
            if children_node is None:
                new_category = Category(cat_string[0], [])
                self.subcategories.append(new_category)
                children_node = new_category

            children_node.add_subcat(cat_string[1:])
