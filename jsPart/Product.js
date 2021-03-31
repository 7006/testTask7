export default class Product {

    id
    name
    desc
    price
    #discountedPrice

    constructor(id, name, desc, price)
    {
        this.id = id;
        this.name = name;
        this.desc = desc;
        this.price = price;
    }

    setPrice(price)
    {
        this.price = price
        this.#discountedPrice = price

        return this;
    }

    withDiscount(prc)
    {
        this.#discountedPrice = this.#discountedPrice - ((this.#discountedPrice / 100) * prc);

        return this;
    }

    get discountedPrice()
    {
        return this.#discountedPrice;
    }

}