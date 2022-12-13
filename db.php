<?php
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Bed.php';

//categorie
$categoryDog = new Category('Cani', './img/dog-icon.png');
$categoryCat = new Category('Gatti', './img/cat-icon.jpg');

//prodotti in vendita (Food)
$art1 = new Food(1, 'Hills', 'Pro10', $categoryDog, 18.50, './img/dogfood-dry.jpg', 'pollo', 'Puppy', 'secco');
var_dump($art1);

$art2 = new Food(2, 'Cesar', 'Ricette Classiche', $categoryDog, 3.50, './img/dogfood-wet.jpg', 'manzo', 'Adult', 'umido');
var_dump($art2);

$art3 = new Food(3, 'Felix', 'Gourmet', $categoryCat, 3.00, './img/catfood-wet.jpg', 'salmone', 'Senior', 'umido');
var_dump($art3);

$art4 = new Food(4, 'Whiskas', '1+', $categoryCat, 34.00, './img/catfood-dry.jpg', 'trota', 'Adult', 'secco');
var_dump($art4);


//prodotti in vendita (Toys)
$art5 = new Toy(5, 'CleverCat', 'Ball', $categoryCat, 1.99, './img/cat_toy.png', 'lana', 'rosso');
var_dump($art5);

$art6 = new Toy(6, 'CleverDog', 'Stick', $categoryDog, 3.20, './img/dog-toy.png', 'wood', 'marrone');
var_dump($art6);


// prodotti in vendita (Beds)
$art7 = new Bed(7, 'SleepyCat', 'Comfy', $categoryCat, 18.00, './img/cat-bed.jpg', 'lana', 'rotondo');
var_dump($art7);

$art8 = new Bed(8, 'SleepyDog', 'Quiet', $categoryDog, 28.40, './img/dog-bed.jpg', 'lana', 'rettangolare');
var_dump($art8);


?>