<?php include 'php/connect.php';				//open database
	//here is the basic query
	$query="SELECT * FROM product ";
	$result = mysqli_query($db, $query);		
	$queryTotal="SELECT SUM(Quantity * Price) as `Total Price` FROM `product` Where Quantity > 0";
			
?>
	<table class="tableShopping">
		<tr>
			<th class="productTh">ProductID</th>
			<th class="productTh">Description</th>
			<th class="productTh">Price</th>
			<th class="productTh">Quantity</th>
			<th class="productTh">Picture</th>
		</tr>
						
<?php
	if (mysqli_num_rows($result) > 0) 
		{
		$i=0;								//index for rows and quantity column
		//output data of each row
		while($row = mysqli_fetch_assoc($result)) 
			{
	?>
			<tr id="<?php echo "tr".$i; ?>">
				<td class="borderBottom spaceLeft"><?php echo $row["ProductID"]; ?>      </td>
				<td class="borderBottom"><?php echo $row["Description"]; ?>     		 </td>
				<td class="borderBottom" id="prc">&pound<?php echo $row["Price"]; ?>     		 </td>			
				<td class="borderBottom" id="<?php echo "upd".$i; ?>"> <?php echo $row["Quantity"]; ?></td>  				
				<td class="borderBottom"><img src="<?php echo $row["Picture"]; ?>" width=100px></td>
			</tr>
			<?php
				$i=$i+1;
			}
		} else {
			echo "0 results</br>";
		}
		?>
	</table>
	<div >
	<?php	
		echo 'Total Price: '; //total price will be displayed into the div below function working on <div id="total">
	?>
	</div>		    	
	<div id="total">
	</div>
	<?php

mysqli_close($db);
?>

	