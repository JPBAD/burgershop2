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
    'menus' => [
         [
            'image' => 'images/m1.png',
             'price' => '8,90€',
            'name' => 'Menu Classic',
            'description' => 'Sandwich: Burger, Salade, Tomate, Cornichon + Frites + Boisson'
        ],
        [
            'image' => 'images/m2.png',
            'price' => '9,5€',
            'name' => 'Menu Bacon',
            'description' => 'Sandwich: Burger, Fromage, Bacon, Salade, Tomate + Frites + Boisson'
        ],
        [
            'image' => 'images/m3.png',
            'price' => '10,90€',
            'name' => 'Menu Big',
            'description' => 'Sandwich: Double Burger, Fromage, Cornichon, Salade + Frites + Boisson'
        ],
        [
            'image' => 'images/m4.png',
            'price' => '10,90€',
            'name' => 'Menu Chicken',
            'description' => 'Poulet Frit, Tomate, Salade, Mayonnaise + Frites + Boisson'
        ],
        [
            'image' => 'images/m2.png',
            'price' => '9,90€',
            'name' => 'Menu Fish',
            'description' => 'Poisson, Salade, Mayonnaise, Cornichon + Frites + Boisson'
        ],
        [  
            'image' => 'images/m2.png',
            'price' => '11,90€',
            'name' => 'Menu Double Steak',
            'description' => 'Sandwich: Double Burger, Fromage, Bacon, Salade, Tomate + Frites + Boisson'
        ]
    ]
]);
