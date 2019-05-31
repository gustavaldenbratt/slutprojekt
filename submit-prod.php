<?php
// ALLTID STARTA SESSION I BÖRJAN
session_start();
// KOLLA OM MAN VILL REGISTRERA SIG
if( isset($_POST['name']) && isset($_POST['image']) && isset($_POST['price'])){
    
    // CONNECTA TILL DATABASEN
    $dbc_gnucci = mysqli_connect("localhost","gual@gual.kronhus.tk","Gusald14910385","gual");
    // HÄMTA DATA FROM POST
    $name = mysqli_real_escape_string($dbc_gnucci,$_POST['name']) ;
    $image = mysqli_real_escape_string($dbc_gnucci,$_POST['image']) ;
    $price = mysqli_real_escape_string($dbc_gnucci,$_POST['price']) ;
    
     $query = "INSERT INTO products (name,image,price) VALUES ('$name','$image','$price')";
    // OM FRÅGAN GÅTT BRA
    if(mysqli_query($dbc_gnucci,$query)){
        // SKICKAS TILL INDEX
        header("Location: view_product.php");
         }else{ // NÅGOT GICK FEL
        // SKAPA ETT ERRORMEDDELADNE
        $_SESSION['error_msg'] = "Något gick fel!";
        header("Location: view_product.php");
    }}
