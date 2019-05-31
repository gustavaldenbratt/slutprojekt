<?php  
 //ta bort produkt
$dbc = mysqli_connect("localhost","gual@gual.kronhus.tk","Gusald14910385","gual"); 
$delete_id=$_GET['del'];  
$delete_query="delete  from products WHERE id='$delete_id'";//delete query  
$run=mysqli_query($dbc,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('view_product.php?deleted=product has been deleted','_self')</script>";  
}  
  
?>