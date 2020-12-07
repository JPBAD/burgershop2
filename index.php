<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, []);

try { 
    $db = new \PDO(
        "mysql:host=localhost;dbname=burger_shop",
        "root",
        "root"
    );

} catch (PDOException $e) { 
    print $e->getMessage();
}

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$menusQuery = $db->prepare('SELECT * FROM products where type= "menu"');
$menusQuery->execute();
$menus=$menusQuery->fetchAll();

$burgersQuery = $db->prepare('SELECT * FROM products where type= "burger"');
$burgersQuery->execute();
$burgers=$burgersQuery->fetchAll();



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
    'menus' => $menus,
    'burgers' =>$burgers,
    'salades' => [
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
       ],
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
