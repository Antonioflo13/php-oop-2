<?php 

class Clients
{
    public $name;
    public $surname;
    public $age;
    public $discount;
    public $creditCard;

    function __construct($name,$surname,$age,$discount=0)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->discount = $discount;
        $this->setDiscount($this->age);
    }

    function setDiscount($age)
    {   
        if ($age >= 28) {
            $this->discount = 10 . "%";
        }
    }

    function setCreditCard($numberCard) 
    {
        $this->creditCard = $numberCard;
    }
}