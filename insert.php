<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

	
		$conn = mysqli_connect("localhost", "root", "", "form");
		
	
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password']
		

		$sql = "INSERT INTO login VALUES ('$first_name',
			'$last_name','$email','$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully.";
			

			//echo nl2br("\n$first_name\n $last_name\n "
				//. "$email\n $password\n");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>