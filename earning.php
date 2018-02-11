<!Document html>
	<html>
<head>
<link rel="stylesheet" type="text/css" href="TopNav.css">
<link rel="stylesheet" type="text/css" href="Form.css">
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
	<h2> Earning </h2>
	<h3> You can input your earnings on this page </h3>

	<div class="earning">
		<form id="earnform" action="insert_transaction.php" method="post">

		<label for="">Date</label>
		<input type="text" id="date" name="date" placeholder="Enter Date (mm/dd/yyyy)">

		<label for="amount">Amount</label>
		<input type="text" id="amount" name="amount" placeholder="Enter the Amount">

		<label for="account">Account</label>
		<select id="account" name="account">
			<option value="a">A</option>
			<option value="b">B</option>
			<option value="c">C</option>
			<option value="d">D</option>
		</select>

		<label for="description">Description</label>
		<textarea id="description" name="description" placeholder="Describe your earning.." style="height:100px"></textarea>

		<input type="submit" value="Submit">	
		</form>
		
	</div>
</div>


</body>
			
	</html>