<?php

namespace Jallvar\Interfaces;

interface IProduct
{
    /**
     * IProduct constructor.
     * @param $id
     * @param $name
     * @param $desc
     * @param $price
     */
    public function __construct($id, $name, $desc, $price);

    /**
     * @return int
     */
    public function getId(): int;

    /**
     * @param int $id
     * @return IProduct
     */
    public function setId(int $id): IProduct;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     * @return IProduct
     */
    public function setName(string $name): IProduct;

    /**
     * @return string
     */
    public function getDesc(): string;

    /**
     * @param string $desc
     * @return IProduct
     */
    public function setDesc(string $desc): IProduct;

    /**
     * @return int
     */
    public function getPrice(): int;

    /**
     * @param int $price
     * @return IProduct
     */
    public function setPrice(int $price): IProduct;

}