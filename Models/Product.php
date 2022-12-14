<?php
require 'Category.php';
require_once './Traits/Weight.php';

class Product
{
    //uso trait Weight
    use Weight;
    public $id;
    public $brand;
    public $modelname;
    public $category;
    public $price;
    public $image;


    public function __construct(int $_id, string $_brand, string $_modelname, Category $_category, $_price, string $_image)
    {
        $this->id = $_id;
        $this->brand = $_brand;
        $this->modelname = $_modelname;
        $this->category = $_category;
        $this->price = $_price;
        $this->image = $_image;
    }
}


?>