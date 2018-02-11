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
		<form id="earnform" action="action_page.php">

		<label for="">Date</label>
		<input type="text" id="datein" name="datein" placeholder="Enter Date (mm/dd/yyyy)">

		<label for="amountin">Amount</label>
		<input type="text" id="amountin" name="amountin" placeholder="Enter the Amount">

		<label for="account">Account</label>
		<select id="account" name="account">
			<option value="a">A</option>
			<option value="b">B</option>
			<option value="c">C</option>
			<option value="d">D</option>
		</select>

		<label for="descriptionin">Description</label>
		<textarea id="descriptionin" name="descriptionin" placeholder="Describe your earning.." style="height:100px"></textarea>

		<input type="submit" value="Submit">	
		</form>
		
	</div>
</div>


</body>
			
	</html>