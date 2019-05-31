<link rel="stylesheet" type="text/css" href="style.css">
<?php
//checkout sida
session_start();
//db ansluting
$dbc = mysqli_connect("localhost","gual@gual.kronhus.tk","Gusald14910385","gnucci");


//funktion för köp, måste vara inloggad för att handla
 if($_SESSION['login'] == "INLOGGAD"){
	
	$id = $_SESSION['id']; 
	 //lägg in ordern i databasen
	$query = "INSERT INTO  orders (customer_id,created,shipped) VALUES ($id,CURRENT_TIMESTAMP,null)";
	 
	 mysqli_query($dbc,$query);
	 
	 $query = "SELECT MAX(id) FROM orders";
	 
	 $orderid =mysqli_fetch_array(mysqli_query($dbc,$query))[0];
	 
	for($i = 0 ; $i < sizeof($_SESSION['cart']) ; $i++){
		$pid = $_SESSION['cart'][$i];
		$query = "INSERT INTO order_details VALUES ($orderid,$pid)";
		
		 mysqli_query($dbc,$query);

		
	}
	 
	unset($_SESSION['cart']);
	 
	?> <p class="kop">  <?php echo 'tack för ditt köp!';?> <img class="kopbild" src="image/check.png"></p>
	<a class="handla" href="index.php" title="Fortsätt handal">Fortsätt hanla</a>
	
	<?php
}
else{
	echo 'Du måste logga in!';
	
	var_dump($_SESSION['cart']);
}
	


?>