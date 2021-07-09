<?php 
require_once __DIR__ . "/magazines.php";

class Products extends Magazines
{
    public $productType;
    public $brand;
    public $price;
    public $image;

    function __construct($productType,$brand,$price,$image)
    {   
        $this->productType = $productType;
        $this->brand = $brand;
        $this->price = $price;
        $this->image = $image;
        $this->setPriceValute($this->price);
    }

    function setPriceValute($valute)
    {
        return $this->price . " " . $valute;
    }

}
