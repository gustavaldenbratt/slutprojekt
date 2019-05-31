<!doctype html>
<html lang="sv">
	<head>
		<link rel="stylesheet" text="text/css" href="./style.css">
	</head>
	<body>
		<?php
		include('./templates/header.php');
		?>
		<?php
		include('./templates/nav.php');
		?>
		<section class="main">
		
		<?php $dbc = mysqli_connect("localhost","gual@gual.kronhus.tk","Gusald14910385","gual");
			

				
			

                    $query = "SELECT * FROM products";

                    mysqli_query($dbc,"SET NAMES utf8");

                    $result = mysqli_query($dbc,$query);

                    while($row = mysqli_fetch_array($result)){
                    ?>
                        <div class="img_con">
                            <img class="img" src="<?php echo $row['image'];?>"/>
                            <?php
				echo $row['name']; 
				?> <br> <?php
						echo $row['price'];  ?>
						<a class="buy" href="p.php?id=<?php echo $row['id'];  ?>">KÖP</a></div> <?php } ?> 
		
	
	
		
		</section>
		<?php
		include('./templates/footer.php');
				
		?>
	</body>
</html>