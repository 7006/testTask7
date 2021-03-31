import Product from "./Product.js";

export default class Shop {
    #products = []

    addProducts(products)
    {
        var newProducts = [];

        products.forEach(function (product) {
            newProducts[product["id"]] = new Product(
                product["id"],
                product["name"],
                product["description"],
                product["price"]
            );
        });

        this.#products = this.#products.concat(newProducts);

        return this;
    }

    getProduct(id)
    {
        return this.#products[id];
    }
}