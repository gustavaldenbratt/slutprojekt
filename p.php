<?php

session_start();


if(isset($_GET['id'])){
	if(isset($_SESSION['cart'])){
		array_push($_SESSION['cart'],$_GET['id']);
	}
	else{
		$_SESSION['cart'] = array($_GET['id']);
	}
	
}

header("Location: /slutprojekt/");

?>