<?php
require_once __DIR__ . "/product.php";


class food extends Product
{
    public $animal;
    public $deadline;
    public $gr;

    function __construct($_idname, $_description, $_price, $_animal, $_deadline, $_gr)
    {
        parent::__construct($_idname, $_description, $_price);
        $this->animal = $_animal;
        $this->deadline = $_deadline;
        $this->gr = $_gr;
    }

    public function productInfo()
    {
        return "$this->idname | $this->description  | $this->price | $this->animal | $this->deadline| $this->gr";
    }
}
