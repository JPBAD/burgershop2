<?php
require_once "vendor/autoload.php";

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, []);

echo $twig->render('index.html', [
    'menu' => 'Menu Classic',
    "items" => [['menu' => 'Menu Bacon' ], ['menu' => 'Menu Big' ], ['menu' => 'Menu Chicken' ], ['menu' => 'Menu Fish' ], ['menu' => 'Menu     Double Steak' ]] 
    ]); 