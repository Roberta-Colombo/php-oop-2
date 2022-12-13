<?php

class Bed extends Product
{
    public $material;
    public $shape;

    public function __construct(int $_id, string $_brand, string $_modelname, Category $_category, $_price, string $_image, string $_material = null, string $_shape = null)
    {
        //constructor per il padre, al quale aggiungo variabili del figlio
        parent::__construct($_id, $_brand, $_modelname, $_category, $_price, $_image);
        $this->material = $_material;
        $this->shape = $_shape;
    }
}


?>