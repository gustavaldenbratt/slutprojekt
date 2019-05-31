<html>  
    <!--visa och hantera användare-->
<head lang="en">  
    <meta charset="UTF-8">  
     <link rel="stylesheet" type="text/css" href="style.css">
     <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder--> 
    <title>View Users</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>  
  <a class="start-link" href="index.php">Startsida</a>
  <a class="prod-link" href="view_product.php"¨>Hantera Produkter</a>
<div class="table-scrol">  
    <h1 align="center">All the Users</h1>  
     <h3>SKAPA NY ANVÄNDARE:</h3>
    <!--skapa användare-->
  <form class="new-usr" action="submit-user.php" method="POST">

            Namn: <input type="text" name="name"><br>
            Födelsedatum: <input type="date" name="date"><br>
            E-mail: <input type="text" name="mail"><br>
            Adress: <input type="text" name="address"><br>
             Man <input type="radio" name="gender" value="male">
            Kvinna <input type="radio" name="gender" value="female">
            Övrigt <input type="radio" name="gender" value="other"> <br>
            Pass: <input type="text" name="pass"><br>
           
            <input type="submit">
    </form>
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  <!--visa och hantera användare-->
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>User Id</th>  
            <th>User Name</th>  
            <th>Födelsedatum</th>  
            <th>User E-mail</th>  
            <th>Address</th>  
            <th>Kön</th>  
            <th>User Pass</th>  
            <th>Delete User</th>  
        </tr>  
        </thead>  
  
        <?php  
        $dbc = mysqli_connect("localhost","gual@gual.kronhus.tk","Gusald14910385","gual");  
        mysqli_query($dbc,"SET NAMES utf8-bom");
        $view_users_query="select * from customer";//select query for viewing users.  
        
        $run=mysqli_query($dbc,$view_users_query);//here run the sql query.  
		 
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $id=$row[0];  
            $name=$row[1]; 
            $date=$row[2];
            $email=$row[3];
            $address=$row[4];
            $gender=$row[5];
            $pass=$row[6];  
  
  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $id;  ?></td>  
            <td><?php echo $name;  ?></td>  
            <td><?php echo $date;  ?></td>
            <td><?php echo $email;  ?></td>
            <td><?php echo $address;  ?></td>
            <td><?php echo $gender;  ?></td>
            <td><?php echo $pass;  ?></td>  
            <td><a href="delete.php?del=<?php echo $id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
       
    </table>  
        </div>  
</div>  
  
  
</body>  
  
</html>