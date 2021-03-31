<?php


namespace Jallvar\Interfaces;


interface IProductDiscount
{
    /**
     * @param int $prc
     * @return IProduct
     */
    public function withDiscount(int $prc) : IProduct;
}