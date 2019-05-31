<?php
session_start();
$dbc = mysqli_connect("localhost","root","","gnucci");

                    
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$con,
$query = "SELECT * FROM products";
);
$row = mysqli_fetch_assoc($result);
$code = $row['id'];
$name = $row['name'];
$image = $row['image'];
$price = $row['price'];

 
$cartArray = array(
	$code=>array(
    'code'=>$code,
	'name'=>$name,
	'image'=>$image)
	'price'=>$price,
	'quantity'=>1,
	
);
 
if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}
 
	}
}
?>