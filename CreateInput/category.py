class Category:
    def __init__(self, name, subactegories, parent):
        self.name = name
        self.subcategories = subactegories
        self.parent = parent

    def add_subcat(self, cat_string):
        if len(cat_string) == 1:
            self.subcategories.append(Category(cat_string[0], [], self))
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
                new_category = Category(cat_string[0], [], self)
                self.subcategories.append(new_category)
                children_node = new_category

            children_node.add_subcat(cat_string[1:])

    def r_print(self, level=0):
        for i in range(level):
            print("--", end="")
        print(self.name)
        for cat in self.subcategories:
            cat.r_print(level+1)

    def return_tuple(self):
        if self.parent is None:
            return self.name
        return (self.name, self.parent.name)

    def create_list_to_write(self, list_to_write):
        if self.parent is not None:
            list_to_write.append(self.return_tuple())
        for child in self.subcategories:
            child.create_list_to_write(list_to_write)
