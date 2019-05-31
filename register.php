<!doctype html>
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
		<section class="main">
			 REGISTER:<br>
        <form action="submit.php" method="POST">

            Namn: <input type="text" name="name"><br>
            Födelsedatum: <input type="date" name="date"><br>
            Mail: <input type="email" name="mail"><br>
            Adress: <input type="text" name="address"><br>
            Man <input type="radio" name="gender" value="male">
            Kvinna <input type="radio" name="gender" value="female"><br>
            Lösenord: <input type="password" name="pass">
            <input type="submit">

        </form>
		</section>
		<?php
		include('./templates/footer.php')
		?>
	</body>
</html>