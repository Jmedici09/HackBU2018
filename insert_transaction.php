<?php

DEFINE ('DB_USER','root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME','budgetime');

$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD,DB_NAME)
OR die('Could not connect to MySQL ' .
		mysqli_connect_error());
						
USE budgetime;
INSERT INTO budget (id, date, description, amount, account, category)
VALUES ($_POST["id"], $_POST["date"], $_POST["description"], $_POST["amount"], $_POST["account"], $_POST["category"]);

?>
