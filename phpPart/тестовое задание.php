<?php

/**
 * Необходимо написать классы.
 *
 * Класс Product. Содержит минимальную информацию о товаре:
 * - свойство id: любое число (идентификатор товара);
 * - свойство price: любое число (цена товара);
 * - метод setPrice($price): устанавливает новую цену и возвращает товар;
 * - метод withDiscount($percent): возвращает новый экземпляр товара с дополнительным свойством discountedPrice, в котором рассчитана стоимость товара с учетом указанной скидки.
 *
 * Класс Shop. Содержит товары и функции управления:
 * - свойство products: массив объектов класса Product;
 * - метод addProducts($products): принимает массив $products и добавляет продукты в магазин;
 * - метод getProduct($id): возвращает продукт по указанному идентификатору.
 */

// Объявить классы тут

// Код ниже должен вывести "true".

$products = [
    [
        "id" => 3,
        "name" => "Cake",
        "price" => 333,
        "description" => "The tastiest cake in the world.",
    ],
    [
        "id" => 5,
        "name" => "Petroleum",
        "price" => 2977,
        "description" => "Black gold.",
    ],
    [
        "id" => 8,
        "name" => "Moscow metro logo",
        "price" => 117000000,
        "description" => "Remove circle from logo",
    ],
];

$shop = new Shop();
$shop->addProducts($products);

echo $shop->getProduct(5)->setPrice(3224)->withDiscount(10)->discountedPrice === 2901.6 ? 'true' : 'false';
