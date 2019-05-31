<!doctype html>
<?php 
 // inloggningsida
?>
<html>
	<head>
		<link rel="stylesheet" text="text/css" href="./style.css">
	</head>
	<body>
		<?php
		include('./templates/header.php')
		?>
		<?php
		include('./templates/nav.php');
		?>
		<?php
  
     
    $show_form = true;
    
    // OM DET FINNS ERROR MESSAGE
    if(isset($_SESSION['error_msg'])){
        // Skriv ut error_msg
        echo $_SESSION['error_msg'] . "<br>";
       
        // TA BORT ERROR_MSG
        unset($_SESSION['error_msg']);
    }
    
    // KOLLA OM MAN HAR BESÖKT SIDAN FÖRUT
    if(isset($_SESSION['login'])){
        // har besökt sidan
        
        // OM MAN ÄR INLOGGAD
        if($_SESSION['login'] == "INLOGGAD"){
            $show_form = false; // VISA INTE FORMULÄREN
			?>
          
            <?php
        }
    }    
    
    // OM VI SKA VISA FORMULÄREN
    if($show_form){
        // Visa formulären
         ?>
         <section class="main">
        REGISTRERA DIG:<br>
            <div class="login-div">
        <form class="login-form" action="submit.php" method="POST">

            Namn: <input type="text" name="name"><br>
            Födelsedatum: <input type="date" name="date"><br>
            Mail: <input type="email" name="mail"><br>
            Adress: <input type="text" name="address"><br>
            Man <input type="radio" name="gender" value="male">
            Kvinna <input type="radio" name="gender" value="female">
            Övrigt <input type="radio" name="gender" value="other"><br>
            Lösenord: <input type="password" name="pass">
            <input type="submit" value="Registrera">

        </form>
                </div>

        <br><br><br>
        LOGGA IN:<br>
             <div class="login-div">
        <form class="login-form" action="login.php" method="POST">

            Mail: <input type="email" name="mail"><br>
            Lösenord: <input type="password" name="pass">
            <input type="submit" value="Logga in">

        </form>
                 </div>
        </section>
    <?php    
    }
    ?>
	</body>
</html>