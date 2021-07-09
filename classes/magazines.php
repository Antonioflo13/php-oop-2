<?php
class Magazines
{
    public $city;
    public $address;
    public $zipCode;
    public $state;

    function __construct($city,$address,$zipCode,$state)
    {
        $this->city = $city;
        $this->address = $address;
        $this->address = $zipCode;
        $this->address = $state;
    }

    function setFullPosition($city,$address,$zipCode,$state) 
    {
        return $city . ", " . $address . ", " . $zipCode . ", " . $state;
    }
}