<?php
// ALLTID STARTA SESSION I BÖRJAN
session_start();
// KOLLA OM MAN VILL REGISTRERA SIG
if( isset($_POST['name']) && isset($_POST['date']) && isset($_POST['mail']) &&
    isset($_POST['address']) && isset($_POST['gender']) && isset($_POST['pass'])){
    
    // CONNECTA TILL DATABASEN
    $dbc_gnucci = mysqli_connect("localhost","gual@gual.kronhus.tk","Gusald14910385","gual");
    // HÄMTA DATA FROM POST
    $name = mysqli_real_escape_string($dbc_gnucci,$_POST['name']) ;
    $date = mysqli_real_escape_string($dbc_gnucci,$_POST['date']) ;
    $mail = mysqli_real_escape_string($dbc_gnucci,$_POST['mail']) ;
    $address = mysqli_real_escape_string($dbc_gnucci,$_POST['address']) ;
    $gender = mysqli_real_escape_string($dbc_gnucci,$_POST['gender']) ;
    $pass = mysqli_real_escape_string($dbc_gnucci,$_POST['pass']) ;
    // FORMULERA INSERT FRÅGA
    
     $query = "INSERT INTO customer (name,date,mail,address,gender,password) VALUES ('$name','$date','$mail','$address','$gender','$pass');";
    // OM FRÅGAN GÅTT BRA
    if(mysqli_query($dbc_gnucci,$query)){
        // SKICKAS TILL INDEX
        header("Location: index.php");
    }else{ // NÅGOT GICK FEL
        // SKAPA ETT ERRORMEDDELADNE
        $_SESSION['error_msg'] = "Upptagen mail!";
        header("Location: index.php");
    }}
