<!DOCTYPE HTML>
<html>  
<body>

<?php
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
		
	$sql = "SELECT   DiaryEntery , DiaryEntery_2 , DiaryEntery_3 , DiaryEntery_4 , DiaryEntery_5 , DateOfEntery  FROM Diary_Enterys";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) 
	{
		// output data of each row
		while($row = mysqli_fetch_assoc($result)) 
		{
			
			
			echo "Date " . $row["DateOfEntery"]. "<br><br>";
			
			echo "Today I am grateful for: " . $row["DiaryEntery"]. "<br><br>";
			
			echo "What would make today great? " . $row["DiaryEntery_2"]. "<br><br>";
			
			echo "People I am gratefull for:" . $row["DiaryEntery_3"]. "<br><br>";
			
			echo "Amazing things that hapened today " . $row["DiaryEntery_4"]. "<br><br>";
			
			echo "How could I have made this day better? " . $row["DiaryEntery_5"]. "<br><br>";
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
