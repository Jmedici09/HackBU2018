<?php

DEFINE ('DB_USER','root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME','budgetime');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME)
OR die('Could not connect to MySQL ' .
		mysqli_connect_error());


$query = "SELECT ID, date, description, amount, account, category FROM BUDGET";

$response = @mysqli_query($dbc, $query);

if($response){
	
	echo '<table>	
	<tr>
		<th><h3><b>Transaction ID</b></h3></th>
		<th><h3><b>Date</b></h3></th>
		<th><h3><b>Description</b></h3></th>
		<th><h3><b>Amount</b></h3></th>
		<th><h3><b>Account</b></h3></th>
		<th><h3><b>Category</b></h3></th>
	</tr>';
	
	while($row = mysqli_fetch_array($response)){
		
		echo '<tr><td>' .
		$row['ID'] . '</td><td>' .
		$row['date'] . '</td><td>' .
		$row['description'] . '</td><td>' .
		$row['amount'] . '</td><td>' .
		$row['account'] . '</td><td>' .
		$row['category'] . '</td></tr>' ;
		
	}
	
	echo '</table>';
	
	echo '<style> 
		table {
			width:100%
			border-collapse: collapse;
			border-spacing: 0px
		}
		td,th {
			text-align: center;
			border: 1px solid black;
			padding: 2px;
		}
		tr:nth-child(even){
			background-color:#dddddd;
		}
		</style>';
} else{
	
	echo "Couldn't issue database query";
	
	echo mysqli_error($dbc);
}

mysqli_close($dbc);

?>
	