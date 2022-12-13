<?php
require_once 'Product.php';

// la classe Food estende la classe Product
class Food extends Product
{
    public $mainIngredient;
    public $lifePhase;
    public $type;

    public function __construct(int $_id, string $_brand, string $_modelname, Category $_category, $_price, string $_image, string $_mainIngredient = null, string $_lifePhase = null, string $_type = null)
    {
        //constructor per il padre, al quale aggiungo variabili del figlio
        parent::__construct($_id, $_brand, $_modelname, $_category, $_price, $_image);
        $this->mainIngredient = $_mainIngredient;
        $this->lifePhase = $_lifePhase;
        $this->type = $_type;
    }
}



?>