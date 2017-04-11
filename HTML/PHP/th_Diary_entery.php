<!DOCTYPE html>
<html>
<head>
	<title>Diary Entery</title>
</head>

<body>
	
	<?php
	
	
		$DiaryEntery = $_POST["DiaryEntery"];
		
		
		
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "oop-assignment";
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error)
			{
			die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO Diary_Enterys (DiaryEntery)
			VALUES ('$DiaryEntery')";;
		
	if ($conn->query($sql) === TRUE)
	{
		echo "Diary entery added, you can now sign in";
	} 
	else 
	{
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();
	?>

</body>

</html>