
<?php

if(isset($_GET['delete_order'])){

$delete_id = $_GET['delete_order'];

$delete_order= "delete from customer_orders where order_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_order);

if($run_delete){

echo "<script>alert('One Order Has Been Deleted')</script>";

echo "<script>window.open('my_account.php?my_order','_self')</script>";

}


}




?>

