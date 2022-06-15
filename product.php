<?php
class Product
{
    public $idname;
    public $description;
    public $price;

    function __construct($_idname, $_description, $_price)
    {
        $this->idname = $_idname;
        $this->description = $_description;
        $this->price = $_price;
    }

    public function productInfo()
    {
        return "$this->idname | $this->description | $this->price";
    }
}
