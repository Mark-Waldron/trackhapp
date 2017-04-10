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
		$LastName = $_POST["Surename"];
		$DOB = $_POST["DOB"];
		
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "oop-assignment";
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error)
			{
			die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO Users ( UserName, PassWord, FirstName, Surename)
			VALUES ('$UserName', '$Password', '$Firstname', '$Surename')";;
		
	if ($conn->query($sql) === TRUE)
	{
		echo "Your are now added, you can now sign in";
	} 
	else 
	{
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();
	?>

</body>

</html>