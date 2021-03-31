<?php


namespace Jallvar;


class Shop
{

    private $_products = array();

    /**
     * Добавим 1 товар
     * @param int $id
     * @param string $name
     * @param string $desc
     * @param int $price
     * @return $this
     * @throws \Exception
     */
    public function addProduct(int $id, string $name, string $desc, int $price): Shop
    {
        if($this->_issetProduct($id))
            throw new \Exception("Product with `$id` exists!");
        $this->_products[$id] = new Product($id, $name, $desc, $price);


        return $this;
    }

    /**
     * Добавим массив товаров
     * @param array $products
     * @return $this
     * @throws \Exception
     */
    public function addProducts(array $products) : Shop
    {
        foreach ($products as $product)
        {
            if($this->_issetProduct($product["id"]))
                throw new \Exception("Product with `".$product['id']."` exists!");

            $this->_products[$product["id"]] = new Product(
                $product["id"],
                $product["name"],
                $product["description"],
                $product["price"]
            );
        }
        return $this;
    }

    /**
     * Получаем товар
     * @param int $id
     * @return mixed|null
     */
    public function getProduct(int $id)
    {
        return ($this->_issetProduct($id)) ? $this->_products[$id] : null;
    }

    /**
     * Проверяет существование в массиве моделей товар
     * @param $id
     * @return bool
     */
    private function _issetProduct($id)
    {
        return isset($this->_products[$id]);
    }
}