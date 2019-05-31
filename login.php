<?php
// ALLTID STARTA SESSION I BÖRJAN
session_start();
// KOLLA OM MAN VILL LOGGA IN
if(isset($_POST['mail']) && isset($_POST['pass'])){
    // CONNECTA TILL DATABASEN
    $dbc_gnucci = mysqli_connect("localhost","gual@gual.kronhus.tk","Gusald14910385","gual");
    // HÄMTA DATA FROM POST
    $mail = mysqli_real_escape_string($dbc_gnucci,$_POST['mail']) ;
    $pass = mysqli_real_escape_string($dbc_gnucci,$_POST['pass']) ;
    // FORMULERA SELECT FRÅGA
    $query = "SELECT * FROM customer WHERE mail='$mail' AND password='$pass'";
    // STÄLL FRÅGA
    $result = mysqli_query($dbc_gnucci,$query);
    // OM ANTAL RADER ÄR LIKA MED 1
    if(mysqli_num_rows($result) == 1){
        // BLI INLOGGAD
        $row = mysqli_fetch_array($result);
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        $_SESSION['login'] = "INLOGGAD";
        header("Location: index.php");
    }
    else{
        // BLI INTE INLOGGAD
        $_SESSION['error_msg'] = "Felaktiga uppgifter!";
        $_SESSION['login'] = "UTLOGGAD";
        header("Location: login_site.php");
    }
}
else{ // FELAKTIG DATA FRÅN $_POST
    $_SESSION['error_msg'] = "Felaktig information";
    header("Location: login_site.php");
}
?>