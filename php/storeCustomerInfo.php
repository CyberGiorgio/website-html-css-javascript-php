<?php      
    include 'php/connect.php';

    $FullName = $_POST['fname'];			//send data to database 
    $Email = $_POST['email'];
    $Address = $_POST['address'];
    $Mobile = $_POST['mobile'];

if(isset($_POST)){
  if (!empty($FullName) && !empty($Email) && !empty($Address) && !empty($Mobile))
	{
    $query = "insert into customer (FullName,Email,Address,Mobile) VALUES ('$FullName','$Email','$Address','$Mobile')";
    $result = mysqli_query($db, $query);
    }
}
?>
 
 <?php
mysqli_close($db);
?>