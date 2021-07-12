<?php 
require_once __DIR__ . "/products.php";
class Clients extends Products
{
    public $name;
    public $surname;
    public $age;
    public $discount;
    public $creditCard;
    public $finalPrice;

    function __construct($name,$surname,$age,$discount=0,$finalPrice=0)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->discount = $discount;
        $this->setDiscount($this->age);
        $this->finalPrice = $finalPrice;
        $this->setFinalPrice($this->price);
        
    }

    function setDiscount($age)
    {   
        if ($age >= 28) {
            $this->discount = 10;
        }
    }

    function setFinalPrice($price)
    {
        $this->finalPrice = $price - $this->discount;
    }

    function setCreditCard($numberCard) 
    {
        $this->creditCard = $numberCard;
    }
}