<?php      
       include 'php/connect.php';

       $quantity=$_POST["quantity"];
                                          //here is the basic query
       $query = "UPDATE   product  SET Quantity = $quantity WHERE Quantity <> 0 ";

      
       $result = mysqli_query($db, $query);
       if(!$result)
            {
            die('Could not update data: ' . MySQL_error());
            }
            echo "Data successfully updated...";
       

            mysqli_close($db);
            ?>