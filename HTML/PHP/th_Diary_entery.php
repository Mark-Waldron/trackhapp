<!DOCTYPE html>
<html>
<head>
	<title>Diary Entry</title>
</head>

<body>
	
	<?php
	
	
		$DiaryEntry = $_POST["DiaryEntry"];
		$DiaryEntry_2 = $_POST["DiaryEntry_2"];
		$DiaryEntry_3 = $_POST["DiaryEntry_3"];
		$DiaryEntry_4 = $_POST["DiaryEntry_4"];
		$DiaryEntry_5 = $_POST["DiaryEntry_5"];
		$DateOfEntry = $_POST["DateOfEntry"];
		
		
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "oop-assignment";
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error)
			{
			die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO Diary_Entries (DiaryEntry , DiaryEntry_2 , DiaryEntry_3 , DiaryEntry_4 , DiaryEntry_5, DateOfEntry )
			VALUES ( '$DiaryEntry' , '$DiaryEntry_2' , '$DiaryEntry_3' , '$DiaryEntry_4', '$DiaryEntry_5', '$DateOfEntry' )";;
		
	if ($conn->query($sql) === TRUE)
	{
		echo "Diary entry added, you can now sign in";
	} 
	else 
	{
		echo "Error updating record: " . $conn->error;
	}

	$conn->close();
	?>

</body>

</html>