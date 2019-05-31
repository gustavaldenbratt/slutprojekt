<?php
session_start();
//db anslutning 
 $dbc_gnucci = mysqli_connect("localhost","root","","gnucci");

if(isset($_SESSION['id'])){
    if(isset($_POST['name'])){

        $id= $_SESSION['id'];
        $name = $_POST['name'];
        //db fråga
        $query = "UPDATE register SET name = '$name' WHERE id = $id";
        mysqli_query($dbc_gnucci,$query);
        header('location:edit.php');   

    }
if(isset($_POST['mail'])){

      $id= $_SESSION['id'];
        $mail = $_POST['mail'];
        //db fråga 
        $query = "UPDATE register SET mail = '$mail' WHERE id = $id";
        mysqli_query($dbc_gnucci,$query);
        header('location:edit.php');

    }
if(isset($_POST['gender'])){

      $id= $_SESSION['id'];
        $gender = $_POST['gender'];
        //db fråga
        $query = "UPDATE register SET gender = '$gender' WHERE id = $id";
        mysqli_query($dbc_gnucci,$query);
        header('location:edit.php');

    }
    if(isset($_POST['pass'])){

      $id= $_SESSION['id'];
        $pass = $_POST['pass'];
        //db fråga
        $query = "UPDATE register SET password = '$pass' WHERE id = $id";
        mysqli_query($dbc_gnucci,$query);
        header('location:edit.php');

    }
    
    
}
