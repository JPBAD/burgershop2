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
            'price' => '9,50€',
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
            'image' => 'images/m5.png',
            'price' => '9,90€',
            'name' => 'Menu Fish',
            'description' => 'Poisson, Salade, Mayonnaise, Cornichon + Frites + Boisson'
        ],
        [  
            'image' => 'images/m6.png',
            'price' => '11,90€',
            'name' => 'Menu Double Steak',
            'description' => 'Sandwich: Double Burger, Fromage, Bacon, Salade, Tomate + Frites + Boisson'
        ]
        ],
    'burgers' => [
        [
           'image' => 'images/b1.png',
           'price' => '5,90€',
           'name' => 'Classic',
           'description' => 'Burger, Salade, Tomate, Cornichon, Oignons'
       ],
       [
           'image' => 'images/b2.png',
           'price' => '6,50€',
           'name' => 'Bacon',
           'description' => 'Sandwich: Burger, Fromage, Bacon, Salade, Tomate'
       ],
       [
           'image' => 'images/b3.png',
           'price' => '6,90€',
           'name' => 'Big',
           'description' => 'Sandwich: Double Burger, Fromage, Cornichon, Salade'
       ],
       [
           'image' => 'images/b4.png',
           'price' => '5,90€',
           'name' => 'Chicken',
           'description' => 'Poulet Frit, Tomate, Salade, Mayonnaise, Ketchup'
       ],
       [
           'image' => 'images/b5.png',
           'price' => '6,90€',
           'name' => 'Fish',
           'description' => 'Poisson Pané, Salade, Mayonnaise, Cornichon'
       ],
       [  
           'image' => 'images/b6.png',
           'price' => '7,50€',
           'name' => 'Double Steak',
           'description' => 'Double Burger, Fromage, Bacon, Salade, Tomate'
       ]
       ],
    'salades' => [
        [
           'image' => 'images/sa1.png',
           'price' => '8,90€',
           'name' => 'Caesar Poulet Pané',
           'description' => 'Poulet Pané, Salade, Tomate et la fameuse sauce Caesar'
       ],
       [
           'image' => 'images/sa2.png',
           'price' => '8,90€',
           'name' => 'Caesar Poulet Grillé',
           'description' => 'Poulet Grillé, Salade, Tomate et la fameuse sauce Caesar'
       ],
       [
           'image' => 'images/sa3.png',
           'price' => '5,90€',
           'name' => 'Salade Light',
           'description' => 'Salade, Tomate, Concombre, Maïs et Vinaigre balsamique'
       ],
       [
           'image' => 'images/sa4.png',
           'price' => '7,90€',
           'name' => 'Poulet Pané',
           'description' => 'Poulet Pané, Salade, Tomate et la sauce de votre choix'
       ],
       [
           'image' => 'images/sa5.png',
           'price' => '7,90€',
           'name' => 'Poulet Grillé',
           'description' => 'Poulet Grillé, Salade, Tomate et la sauce de votre choix'
       ]
       ],
    'snacks' => [
        [
           'image' => 'images/s1.png',
           'price' => '3,90€',
           'name' => 'Frites',
           'description' => 'Pommes de terre frites'
       ],
       [
           'image' => 'images/s2.png',
           'price' => '3,40€',
           'name' => 'Onion Rings',
           'description' => 'Rondelles d oignon frits'
       ],
       [
           'image' => 'images/s3.png',
           'price' => '5,90€',
           'name' => 'Nuggets',
           'description' => 'Nuggets de poulet frits'
       ],
       [
           'image' => 'images/s4.png',
           'price' => '3,50€',
           'name' => 'Nuggets Fromage',
           'description' => 'Nuggets de Fromage Frits'
       ],
       [
           'image' => 'images/s5.png',
           'price' => '5,90€',
           'name' => 'Ailes de Poulet',
           'description' => 'Ailes de poulet Barbecue'
       ]
       ],
    'boissons' => [
        [
           'image' => 'images/bo1.png',
           'price' => '1,90€',
           'name' => 'Coca-Cola',
           'description' => 'Au choix: Petit, Moyen ou Grand'
       ],
       [
           'image' => 'images/bo2.png',
           'price' => '1,90€',
           'name' => 'Coca-Cola Light',
           'description' => 'Au choix: Petit, Moyen ou Grand'
       ],
       [
           'image' => 'images/bo3.png',
           'price' => '1,90€',
           'name' => 'Coca-Cola Zéro',
           'description' => 'Au choix: Petit, Moyen ou Grand'
       ],
       [
           'image' => 'images/bo4.png',
           'price' => '1,90€',
           'name' => 'Fanta',
           'description' => 'Au choix: Petit, Moyen ou Grand'
       ],
       [
           'image' => 'images/bo5.png',
           'price' => '1,90€',
           'name' => 'Sprite',
           'description' => 'Au choix: Petit, Moyen ou Grand'
       ],
       [  
           'image' => 'images/bo6.png',
           'price' => '1,90€',
           'name' => 'Nestea',
           'description' => 'Au choix: Petit, Moyen ou Grand'
       ]
       ],
    'desserts' => [
        [
           'image' => 'images/d1.png',
           'price' => '4,90€',
           'name' => 'Fondant au choco',
           'description' => 'Au choix: Chocolat Blanc ou au lait'
       ],
       [
           'image' => 'images/d2.png',
           'price' => '2,90€',
           'name' => 'Muffin',
           'description' => 'Au choix: Au fruits ou au chocolat'
       ],
       [
           'image' => 'images/d3.png',
           'price' => '2,90€',
           'name' => 'Beignet',
           'description' => 'Au choix: Au chocolat ou à la vanille'
       ],
       [
           'image' => 'images/d4.png',
           'price' => '3,90€',
           'name' => 'Milkshake',   
           'description' => 'Au choix: Fraise, Vanille ou Chocolat'
       ],
       [
           'image' => 'images/d5.png',
           'price' => '4,90€',
           'name' => 'Sundae',
           'description' => 'Au choix: Fraise, Caramel ou Chocolat'
       ]
    ],
]);
