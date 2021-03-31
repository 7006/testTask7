<?php


namespace Jallvar;


use Jallvar\Interfaces\IProduct;
use Jallvar\Interfaces\IProductDiscount;

class Product implements IProduct, IProductDiscount
{
    /**
     * ID товара
     *
     * @var int
     */
    private int $id;

    /**
     * Название товара
     *
     * @var string
     */
    private string $name;

    /**
     * Цена товара
     *
     * @var int
     */
    private int $price;

    /**
     * Описание товара
     *
     * @var string
     */
    private string $desc;

    /**
     * Массив свойств
     * @var array
     */
    private array $_params = array();

    /**
     * Product constructor.
     * Устанавливает значения нового товара
     *
     * @param $newId
     * @param $newName
     * @param $newDesc
     * @param $newPrice
     */
    public function __construct($newId, $newName, $newDesc, $newPrice)
    {
        $this->id = $newId;
        $this->name = $newName;
        $this->desc = $newDesc;
        $this->price = $newPrice;
        $this->_params["discountedPrice"] = $this->price;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): IProduct
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): IProduct
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): IProduct
    {
        $this->price = $price;
        $this->_params["discountedPrice"] = $price;
        return $this;
    }

    /**
     * @return string
     */
    public function getDesc(): string
    {
        return $this->desc;
    }

    /**
     * @param string $desc
     */
    public function setDesc(string $desc): IProduct
    {
        $this->desc = $desc;
        return $this;
    }

    /**
     * Посчитает скидку
     *
     * @param int $prc
     * @return Product
     */
    public function withDiscount(int $prc): IProduct
    {
        $this->_params["discountedPrice"] = (float)$this->price - (($this->price / 100) * $prc);
        return $this;
    }

    /**
     * Магический метод, вернет свойства класса
     * @param $property
     * @return mixed
     */
    public function __get($property)
    {
        return $this->_params[$property];
    }

}