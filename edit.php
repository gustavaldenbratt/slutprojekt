<!doctype html>
<?php //redigera sin användarprofil 
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
		<section class="main" id="editmain">
		<?php
	



   //db anslutning 
    $dbc_gnucci = mysqli_connect("localhost","gual@gual.kronhus.tk","Gusald14910385","gual");
   
    $id= $_SESSION['id'];
    
   //ställer fråga till db
    $query = "SELECT * FROM register WHERE id = $id";
   
    $result = mysqli_query($dbc_gnucci,$query);
    
    $row = mysqli_fetch_array($result);

   
?>




<!--formulär för redigering av användarprofil-->
<p>Name: <?php echo $row['name'];?></p>
<form action="edit_back.php" method ="post">
<input type="text" name="name">
<input type="submit" value="Uppdatera">
</form>
<p>Mail: <?php echo $row['mail'];?></p>
<form action="edit_back.php" method ="post">
<input type="text" name="mail">
<input type="submit" value="Uppdatera">
</form>
<p>Kön: <?php echo $row['gender'];?></p>
<form action="edit_back.php" method ="post">
Man <input type="radio" name="gender" value="male">
Kvinna <input type="radio" name="gender" value="female">
Annat <input type="radio" name="gender" value="Annat">
    <input type="submit" value="Uppdatera"> <br>
</form>
<form action="edit_back.php" method ="post">

Lösenord: <input type="password" name="pass">
<input type="submit" value="Uppdatera"> 
</form>



		</section>
		<?php
		include('./templates/footer.php')
		?>
	</body>
</html>