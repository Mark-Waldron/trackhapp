<!DOCTYPE html>
<html>
<head>
	<title>Rigistration Page</title>
</head>

<body>
	
	<?php
		$UserName = $_POST["UserName"];
		$Password = $_POST["PassWord"];
		$Firstname = $_POST["FirstName"];
		$Surename = $_POST["Surename"];
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "oop-assignment";
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error)
			{
			die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO Users ( UserName, PassWord, FirstName, Surename, AddressLine, City, Telephone, Mobile)
			VALUES ('$UserName', '$Password', '$Firstname', '$Surename', '$Addressline', '$City', '$Telephone', '$Mobile')";;
		
	if ($conn->query($sql) === TRUE)
	{
		echo "Your are now added, you can now sign in";
		
		?>
			<br><a href="http://localhost/WEBD/web_dev_assignment_Frontpage.html">Back to Login</a>
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