import Shop from "./Shop.js";

var products = [
    {
        "id":3,
        "name":"Cake",
        "price":333,
        "description":"The tastiest cake in the world."
    },
    {
        "id":5,
        "name":"Petroleum",
        "price":2977,
        "description":"Black gold."
    },
    {
        "id":8,
        "name":"Moscow metro logo",
        "price":117000000,
        "description":"Remove circle from logo"
    }
];

var shop = new Shop();
shop.addProducts(products);

console.log(shop.getProduct(5).setPrice(3224).withDiscount(10).discountedPrice === 2901.6);