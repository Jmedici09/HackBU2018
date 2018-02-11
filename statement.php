<!Document html>
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="TopNav.css">
		</head>
		<body>

		<div>
			<ul>
				<li><a href="earning.php"/>Earning</a></li>
				<li><a href="spending.php">Spending</a></li>
				<li><a href="statement.php">Statement</a></li>
				<li style="float:right"><a href="about.php">About</a></li>
			</ul>
		</div>


		<div style="margin-top:5%; padding: 1px 16px; height: 1000px;">
			<h2> Statement </h2>
			<?php 
			include("get_user_info.php"); ?>

		</div>


		</body>
			
	</html>