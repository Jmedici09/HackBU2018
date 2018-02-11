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
			<h2> Spending </h2>
			<h3> You can input your spendings on this page </h3>

			<div class="spending">
				<form action="insert_transaction.php" method="post">

		<label for="">Date</label>
		<input type="date" id="datet" name="datet">

		<label for="amount">Amount</label>
		<input type="number" step=".01" id="amount" name="amount" placeholder="Enter the Amount">

				<label for="catgory">Category</label>
				<select id="category" name="category">
					<option value="grocery">Grocery</option>
					<option value="bills">Bills</option>
					<option value="entertainment">Entertainment</option>
					<option value="eating out">Eating Out</option>
				</select>

				<label for="description">Description</label>
				<textarea id="description" name="description" placeholder="Describe your spending.." style="height:100px"></textarea>

				<input type="submit" value="Submit">
			
				</form>
			</div>
		</div>


		</body>
			
	</html>