<?php
require_once __DIR__ . "/product.php";

class animalToy extends Product
{
    public $typeToy;
    public $colorToy;

    public function __construct($_idname, $_description, $_price, $_typeToy, $_colorToy)
    {
        parent::__construct($_idname, $_description, $_price);
        $this->typeToy = $_typeToy;
        $this->colorToy = $_colorToy;
    }

    public function productInfo()
    {
        return "$this->idname | $this->description | $this->price | $this->typeToy | $this->colorToy";
    }
}
