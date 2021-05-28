<form>												
	<?php include 'php/connect.php';				//open database
	//here is the basic query
		$query="SELECT * FROM product ";
		$result = mysqli_query($db, $query);
	?>

	<table class="tableShopping">
	    <tr>
		    <th class="productTh">ProductID</th>
		    <th class="productTh">Description</th>
			<th class="productTh">Price</th>
			<th class="productTh">Quantity</th>
			<th class="productTh">Picture</th>
		<tr>

	<?php
		$i=0;									//index for rows and quantity column
		if (mysqli_num_rows($result) > 0) 
			{
			//output data of each row
			while($row = mysqli_fetch_assoc($result)) 
				{
				?>
				<tr>
					<td class="borderBottom spaceLeft"><?php echo $row["ProductID"]; ?>       </td>
					<td class="borderBottom"><?php echo $row["Description"]; ?>      </td>
					<td class="borderBottom">&pound<?php echo $row["Price"]; ?>      </td>
					<td class="borderBottom"><input class="quantity" min="0" id="<?php echo "qnt".$i; ?>" name="quantity" type="number" value="0">
					</td>  
					<td class="borderBottom"><img src="<?php echo $row["Picture"]; ?>" width=100px></td>
				<tr>
				<?php
					$i=$i+1;
					}
			} else {echo "0 results</br>";}
				?>
			<input type="hidden" id="rows" value="<?php echo $i; ?>">
	</table>
</form>
<?php
	
mysqli_close($db);
?>