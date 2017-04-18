<!DOCTYPE html>
<html>
<head>
	<title>Rigistration Page</title>
</head>

<body>
	
	<?php
		$UserName = $_POST["UserName"];
		$PassWord = $_POST["PassWord"];
		$FirstName = $_POST["FirstName"];
		$LastName = $_POST["Surname"];
		
		
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "oop-assignment";
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error)
			{
			die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO Persons ( UserName, PassWord, FirstName, LastName)
			VALUES ('$UserName', '$PassWord', '$FirstName', '$LastName')";;
		
	if ($conn->query($sql) === TRUE)
	{
		echo "Your are now added, you can now sign in";
		
		?>
			<br><a href="http://localhost/trackhapp/HTML/home_page.html">Back to Login</a>
		<?php	
	} 
	else 
	{
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();
	?>

</body>

</html>