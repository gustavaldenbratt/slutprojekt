<html>  
    <!--visa och hantera produkter-->
<head lang="sv">  
    <meta charset="UTF-8">  
     <link rel="stylesheet" type="text/css" href="style.css">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
    <title>View products</title>  
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
    <a class="prod-link" href="view_users.php"¨>Hantera användare</a>
    
    

  
<div class="table-scrol">  
    <h1 align="center">All the products</h1> 
    <h3>SKAPA NY PRODUKT:</h3>
    <!--skapa produkt-->
    <form class="new-prod" action="submit-prod.php" method="POST">

            Namn: <input type="text" name="name"><br>
            image: <input type="text" name="image"><br>
            price: <input type="text" name="price"><br>
           
            <input type="submit">
    </form>
  
<div class="table-responsive">
  
  <!--visa och hantera produkter-->
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>produkt Id</th>  
            <th>produkt namn</th>  
            <th>produkt sökväg</th>  
            <th>produkt pris</th>  
            
        </tr>  
        </thead>  
  
        <?php  
        //db anslutning 
        $dbc = mysqli_connect("localhost","gual@gual.kronhus.tk","Gusald14910385","gual");  
        
        $view_prod_query="select * from products";//select query for viewing products. 
       mysqli_query($dbc,"SET NAMES utf8");
        $run=mysqli_query($dbc,$view_prod_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $id=$row[0];  
            $name=$row[1];  
            $image=$row[2];  
            $price=$row[3];  
  
  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $id;  ?></td>  
            <td><?php echo $name;  ?></td>  
            <td><?php echo $image;  ?></td>  
            <td><?php echo $price;  ?></td>  
            <td><a href="delete-prod.php?del=<?php echo $id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
     
  
  
</body>  
  
