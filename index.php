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
    'menus' => $menus, //dynamisme menus
    'burgers' =>$burgers,
    'salades' =>$salades, 
    'snacks' =>$snacks, 
    'boissons' =>$boissons, 
    'desserts' =>$desserts, 
]);

function creationPanier(){
    session_start();
    /* Initialisation du panier */
    $_SESSION['panier'] = array();
    /* Subdivision du panier */
    $_SESSION['panier']['name'] = array();
    $_SESSION['panier']['quantity'] = array();
    $_SESSION['panier']['price'] = array();
}

function montantGlobal(){
    $total=0;
    for($i = 0; $i < count($_SESSION['panier']['name']); $i++)
    {
       $total += $_SESSION['panier']['quantity'][$i] * $_SESSION['panier']['price'][$i];
    }
    return $total;
 }
?>