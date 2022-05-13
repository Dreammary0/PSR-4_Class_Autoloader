<?php
spl_autoload_register(function ($className) {
    $fullPath = dirname(__DIR__ ) . '/res/' . str_replace("\\", "/", $className) . '.php';
    require_once $fullPath;
});
use shop;
use subclass\catalog;

$shop = new shop();
//var_dump($shop);
$catalog = new catalog();
//var_dump($catalog);
//var_dump($catalog instanceof catalog);
echo ("<b>Работа функции классов:  </b>");
echo "<br>";
$shop->ECHO();
echo "<br>";
$catalog->ECHO();