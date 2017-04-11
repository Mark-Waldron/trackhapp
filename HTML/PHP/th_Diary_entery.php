<!DOCTYPE html>
<html>
<head>
	<title>Diary Entery</title>
</head>

<body>
	
	<?php
	
	
		$DiaryEntery = $_POST["DiaryEntery"];
		$DiaryEntery_2 = $_POST["DiaryEntery_2"];
		$DiaryEntery_3 = $_POST["DiaryEntery_3"];
		$DiaryEntery_4 = $_POST["DiaryEntery_4"];
		$DiaryEntery_5 = $_POST["DiaryEntery_5"];
		$DateOfEntery = $_POST["DateOfEntery"];
		
		
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "oop-assignment";
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error)
			{
			die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO Diary_Enterys (DiaryEntery , DiaryEntery_2 , DiaryEntery_3 , DiaryEntery_4 , DiaryEntery_5, DateOfEntery )
			VALUES ( '$DiaryEntery' , '$DiaryEntery_2' , '$DiaryEntery_3' , '$DiaryEntery_4', '$DiaryEntery_5', '$DateOfEntery' )";;
		
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