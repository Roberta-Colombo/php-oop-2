<?php
require_once __DIR__ . '/Models/Food.php';
require_once __DIR__ . '/Models/Toy.php';
require_once __DIR__ . '/Models/Bed.php';

//array prodotti da popolare
$products = [];

//categorie
$categoryDog = new Category('Cani', './img/dog-icon.png');
$categoryCat = new Category('Gatti', './img/cat-icon.jpg');

//prodotti in vendita (Food)
$art1 = new Food(1, 'Hills', 'Pro10', $categoryDog, 18.50, './img/dogfood-dry.jpg', 'gusto pollo', 'età: puppy', 'mangime secco');
// var_dump($art1);
$products[] = $art1;

$art2 = new Food(2, 'Cesar', 'Ricette Classiche', $categoryDog, 3.50, './img/dogfood-wet.jpg', 'gusto manzo', 'età: adult', 'mangime umido');
// var_dump($art2);
$products[] = $art2;

$art3 = new Food(3, 'Felix', 'Gourmet', $categoryCat, 3.00, './img/cat-wet2.webp', 'gusto salmone', 'età: senior', 'mangime umido');
// var_dump($art3);
$products[] = $art3;

$art4 = new Food(4, 'Whiskas', '1+', $categoryCat, 34.00, './img/cat-food2.webp', 'gusto trota', 'età: adult', 'mangime secco');
// var_dump($art4);
$products[] = $art4;


//prodotti in vendita (Toys)
$art5 = new Toy(5, 'CleverCat', 'Ball', $categoryCat, 1.99, './img/cat-toy2.webp', 'in legno e cotone', 'colore: rosso');
// var_dump($art5);
$products[] = $art5;

$art6 = new Toy(6, 'CleverDog', 'Soft Toy', $categoryDog, 3.20, './img/bone2.jpg', 'in stoffa', 'colore: marrone');
// var_dump($art6);
$products[] = $art6;


// prodotti in vendita (Beds)
$art7 = new Bed(7, 'SleepyCat', 'Comfy', $categoryCat, 18.00, './img/cat-bed.jpg', 'in lana', 'forma rotonda');
// var_dump($art7);
$products[] = $art7;

$art8 = new Bed(8, 'SleepyDog', 'Quiet', $categoryDog, 28.40, './img/dog-bed.jpg', 'in lana', 'forma rettangolare');
// var_dump($art8);
$products[] = $art8;

// var_dump($products);


?>