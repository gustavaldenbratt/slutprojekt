<!doctype html>
<html>
    <!--kontakt sida-->
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
		<section class="main" id="kontakt">
			<h1>Kontakta Oss</h1>
				<p id="kontext">Har du frågor eller funderingar kan du alltid Kontakta oss antingen via e-post eller telefon men du kan även kontakta oss personligen på vårt kontor.</p>
				<h3>E-Post:</h3> <a HREF="mailto:gustav.aldenbratt@elev.ga.ntig.se">gustav.aldenbratt@elev.ga.ntig.se</a>
				
				<h3>Telefon:</h3><a href="tel:+46737662930">0737-66 29 30</a>
				<br>
				<h3>Kontor:</h3>
			<?php include("./templates/google.php")
			?>
				
		</section>
		<?php
		include('./templates/footer.php')
		?>
	</body>
</html>