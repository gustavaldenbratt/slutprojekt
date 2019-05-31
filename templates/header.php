<?php
session_start();
?>
<header>

<a class="login" href="./login_site.php">Logga in/registrera dig</a>
<a class="edit" href="./edit.php">Ändra uppgifter</a>

 <?php   if(isset($_SESSION['login'])){
        // har besökt sidan

        // OM MAN ÄR INLOGGAD
        if($_SESSION['login'] == "INLOGGAD"){
            $show_form = false; // VISA INTE FORMULÄREN
            
            ?>
 <!--<a class="logout" href="./logout.php" action="./logout.php">Logga ut</a>-->
            <!-- Utloggningsformulär -->
				<form class="logout" action="./logout.php">
    <input type="submit" value="Logga ut">
            </form> 

            <?php
			echo "Välkommen   ".$_SESSION['name'] . " du är inloggad!"; // VISA VÄLKOMSTTEXT
        }
    }
?>
	<h1 class="name">Gnucci</h1>

       <a class="kundvagn" title="Visa kundvagnen" href="./kundvagn.php">Kungvagn (
       <?php


		   if(isset($_SESSION['cart'])){
			   echo count($_SESSION['cart']);
		   }
		   else{
			   echo "0";
		   }


		   ?>


       )</a>
        <br><br>
    	<a class="empty" title="Töm alla varor ur kundvagnen" href="kundvagn.php?action=clear_cart" method="GET" >töm kundvagn
        </a>








</header>
