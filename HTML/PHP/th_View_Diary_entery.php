<!DOCTYPE HTML>
<html>  
<body>

<?php

	$DateSearch = $_POST["DateSearch"];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "oop-assignment";
		

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
		
	$sql = "SELECT DiaryEntry , DiaryEntry_2 , DiaryEntry_3 , DiaryEntry_4 , DiaryEntry_5, DateOfEntry  FROM Diary_Entries Where DateOfEntry = '$DateSearch'";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) 
		{
			
			
			echo "Date " . $row["DateOfEntry"]. "<br><br>";
			
			echo "Today I am grateful for: " . $row["DiaryEntry"]. "<br><br>";
			
			echo "What would make today great? " . $row["DiaryEntry_2"]. "<br><br>";
			
			echo "People I am gratefull for:" . $row["DiaryEntry_3"]. "<br><br>";
			
			echo "Amazing things that hapened today " . $row["DiaryEntry_4"]. "<br><br>";
			
			echo "How could I have made this day better? " . $row["DiaryEntry_5"]. "<br><br>";
		}
	} 
	else 
	{
		echo "0 results";
	}

	mysqli_close($conn);
?>  

</body>
</html>
