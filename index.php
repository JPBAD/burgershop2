<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, []);

echo $twig->render('index.html', [
    'myNavbar' => [
        [ 'href' => '#menus', 'name' => 'Menus'],
        [ 'href' => '#burgers', 'name' => 'Burgers' ],
        [ 'href' => '#salades', 'name' => 'Salades' ],
        [ 'href' => '#snacks', 'name' => 'Snacks' ],
        [ 'href' => '#boissons', 'name' => 'Boissons' ],
        [ 'href' => '#desserts', 'name' => 'Desserts' ],
        [ 'href' => '#panier', 'name' => 'Panier' ]
    ],
    // 'menus' => [
    //     [
    //         'image' => 'images/m1.png',
    //         'price' => '8,90€',
    //         'name' => 'Menu Classic',
    //         'description' => 'Sandwich: Burger, Salade, Tomate, Cornichon + Frites + Boisson'
    //     ],
    //     [
    //         'image' => 'images/m1.png',
    //         'price' => '8,90€',
    //         'name' => 'Menu Classic',
    //         'description' => 'Sandwich: Burger, Salade, Tomate, Cornichon + Frites + Boisson'
    //     ]
    // ]
]);
