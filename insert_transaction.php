<?php

DEFINE ('DB_USER','root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME','budgetime');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME)
OR die('Could not connect to MySQL ' .
		mysqli_connect_error());
						
$datet = $_POST['datet'];
$description = $_POST['description'];
$amount = $_POST['amount'];

if(empty($_POST['account'])) {
	$account = "NULL";
} else {
	$account = $_POST['account'];
	$account = "\"$account\"";
}

if(empty($_POST['category'])) {
	$category = "NULL";
} else {
	$category = $_POST['category'];
	$category = "\"$category\"";
}


$sql = "INSERT INTO budget (date, description, amount, account, category)
VALUES (\"$datet\", \" $description \", $amount, \"$account\", \"$category\")";


if($dbc->query($sql) === TRUE) {
	echo "New record created successfully";
}else{
	echo "Error: " . $sql . "<br>" . $dbc->error;
} 
$dbc->close();


?>
