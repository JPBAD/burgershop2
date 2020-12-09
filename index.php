<?php
require_once 'vendor/autoload.php';

creationPanier();

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

$menusQuery = $db->prepare('SELECT * FROM products where type= "menu"'); //dynamisation des menus / Variables stockées dans menusQuery
$menusQuery->execute();
$menus=$menusQuery->fetchAll();

$burgersQuery = $db->prepare('SELECT * FROM products where type= "burger"');
$burgersQuery->execute();
$burgers=$burgersQuery->fetchAll();

$saladesQuery = $db->prepare('SELECT * FROM products where type= "salade"');
$saladesQuery->execute();
$salades=$saladesQuery->fetchAll();

$snacksQuery = $db->prepare('SELECT * FROM products where type= "snack"');
$snacksQuery->execute();
$snacks=$snacksQuery->fetchAll();

$boissonsQuery = $db->prepare('SELECT * FROM products where type= "boisson"');
$boissonsQuery->execute();
$boissons=$boissonsQuery->fetchAll();

$dessertsQuery = $db->prepare('SELECT * FROM products where type= "dessert"');
$dessertsQuery->execute();
$desserts=$dessertsQuery->fetchAll();

// Renommer toutes les occurences de panier en cart, on ne fait pas de franglais :3
function creationPanier(){
    session_start();

    if (!isset($_SESSION['panier'])){
        $_SESSION['panier'] = [
            'products' => [],
            'total' => 0.0
        ];
    }
}

function addToCart($product_id){
    // À faire : Utiliser le product_id envoyé pour faire une requête dans la DB et
    // ajouter le produit au panier
    $product = "resultat requête pour recup produit";

    if (!isset($_SESSION['panier']['products'][$product_id])){
        $_SESSION['panier']['products'][$product_id] = [
            'name' => 'product name', // $product['name']
            'price' => '10,00 €', // $product['price'] / 100 tranformé en €
            'quantity' => 1 // quantité par défaut a 1 produit
        ]
    } else {
        $_SESSION['panier']['products'][$product_id]['quantity'] += 1;
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'addToCart' && isset($_GET['product_id'])){
    addToCart($_GET['product_id']);
}

function montantGlobal(){
    $total=0;
    for($i = 0; $i < count($_SESSION['panier']['name']); $i++)
    {
       $total += $_SESSION['panier']['quantity'][$i] * $_SESSION['panier']['price'][$i];
    }
    return $total;
 }

echo $twig->render('index.html', [
    'myNavbar' => [
        [ 'href' => '#menus', 'name' => 'Menus'],
        [ 'href' => '#burgers', 'name' => 'Burgers' ],
        [ 'href' => '#salades', 'name' => 'Salades' ],
        [ 'href' => '#snacks', 'name' => 'Snacks' ],
        [ 'href' => '#boissons', 'name' => 'Boissons' ],
        [ 'href' => '#desserts', 'name' => 'Desserts' ]
    ],
    'cart' => $_SESSION['panier'],
    'menus' => $menus, //dynamisme menus
    'burgers' =>$burgers,
    'salades' =>$salades,
    'snacks' =>$snacks,
    'boissons' =>$boissons,
    'desserts' =>$desserts,
]);
