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
		<input type="date" id="datet" name="datet">

		<label for="amount">Amount</label>
		<input type="number" step=".01" id="amount" name="amount" placeholder="Enter the Amount">

		<label for="account">Account</label>
		<select id="account" name="account">
			<option value="Chase">Chase</option>
			<option value="Bank of America">Bank of America</option>
			<option value="TD">TD</option>
			<option value="Citi Bank"> Citi Bank</option>
		</select>

		<label for="description">Description</label>
		<textarea id="description" name="description" placeholder="Describe your earning.." style="height:100px"></textarea>

		<input type="submit" value="Submit">	
		</form>
		
	</div>
</div>


</body>
			
	</html>