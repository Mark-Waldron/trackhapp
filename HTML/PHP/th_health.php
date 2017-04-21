<!DOCTYPE HTML>
<html>  
<body>

<?php

	$DateSearch = $_POST["DateSearch"];

   // Check if we have parameters w1 and w2 being passed to the script through the URL
   if (isset($_POST["w1"]) && isset($_POST["w2"])) {

 

      // Put the two words together with a space in the middle to form "hello world"

      $hello = $_POST["w1"] . " " . $_POST["w2"];

 

      // Print out some JavaScript with $hello stuck in there which will put "hello world" into the javascript.

      echo $hello;

   

}

// Check if we have parameters w1 and w2 being passed to the script through the URL
   if (isset($_POST["x1"]) && isset($_POST["x2"])) {

 

      // Put the two words together with a space in the middle to form "hello world"

      $hello_2 = $_POST["x1"] . " " . $_POST["x2"];

 

      // Print out some JavaScript with $hello stuck in there which will put "hello world" into the javascript.

      echo $hello_2;

   

}

	
		$water = $hello;
		$Fruit = $hello_2;
	
		
		
		
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "oop-assignment";
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error)
			{
			die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO achievement ( water , Fruit , DateOfEntry)
			VALUES ('$water', '$Fruit', '$DateSearch')";;
		
	if ($conn->query($sql) === TRUE)
	{
		echo "Your are now added, you can now sign in";
		
		?>
			<br><a href="http://localhost/trackhapp/HTML/Health.html">Back to Login</a>
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
