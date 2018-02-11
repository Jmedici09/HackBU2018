<?php

require_once('../mysqli_connect.php');

$query = "SELECT ID, date, description, amount, account, category, FROM USER";

#response = @mysqli_query($dbc,, $query);

if($response){
	
	echo '<table align ="left"
	cellspacing="5" cellpaddding="8">
	
	<tr><rd align="left"><b>Transaction ID</b></td>
	<tr><rd align="left"><b>Date</b></td>
	<tr><rd align="left"><b>Description</b></td>
	<tr><rd align="left"><b>Amount</b></td>
	<tr><rd align="left"><b>Account</b></td>
	<tr><rd align="left"><b>Category</b></td></tr>';
	
	while($row = mysqli_fetch_array($response)){
		
		echo '<tr><td align="left">' .
		$row['ID'] . '</td><td align="left">' .
		$row['date'] . '</td><td align="left">' .
		$row['description'] . '</td><td align="left">' .
		$row['amount'] . '</td><td align="left">' .
		$row['account'] . '</td><td align="left">' .
		$row['category'] . '</td><td align="left">' .;
	
		echo '</tr>';
	}
	
	echo '</table>';
} else{
	
	echo "Couldn't issue database query";
	
	echo mysqli_error($dbc);
}

mysqli_close($dbc);

?>
	