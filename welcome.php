<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login_form";


$conn = new mysqli($servername,
	$username, $password, $dbname);


if ($conn->connect_error) {
	die("Connection failed: "
		. $conn->connect_error);

}
echo "Connected successfully";


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Store Data</title>
</head>
<body>
	<center>
		<h1>Storing Form data in Database</h1>
		<form action="insert.php" method="post">
			
            <p>
			<label for="firstName">First Name:</label>
			<input type="text" name="first_name" id="firstName">
			</p>

			
            <p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="last_name" id="lastName">
			</p>

           <p>
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress">
			</p>


			<p>
			<label for="password">password:</label>
			<input type="password" name="password" id="password">
			</p>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>