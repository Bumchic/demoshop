<?php
session_start();
include_once('../asset/Class/classCart.php');
$cartItems = array(new Cart());
$cart = new Cart();
$cart->id = $_POST['id'];
$cart->prodname = $_POST['prodname'];
$cart->price = $_POST['price'];
$cart->image = $_POST['image'];
$cart->category = $_POST['category'];
$cart->quantity = $_POST['quantity'];

if (isset($_SESSION['Cart'])) {
    $cartItems = json_decode($_SESSION['Cart'], true);
    $cartItems[] = $cart;
}else
{
    $cartItems[0] = $cart;
}

$_SESSION['Cart'] = json_encode($cartItems);
exit(var_export($_SESSION['Cart'], true));

?>