<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>

<body>


	
	<?php
	
		$UserName = $_POST["UserName"];
		$Password = $_POST["PassWord"];
		$_SESSION['login_user'] = $_POST["UserName"];
		 
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "web_dev_assignment";
		
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error)
		{
			die("Connection failed: " . $conn->connect_error);
		}
		
		
	
	$result = mysqli_query($conn, "SELECT UserName, Password FROM users WHERE UserName = '".$UserName."' AND  Password = '".$Password."'");

	if (mysqli_num_rows($result) > 0) 
	{
		
		Header("Location: web_dev_assignment_Book_Search_and_Reserve.html");
		 
	} 
	else 
	{
		echo "Invalid information, please try again";
		
		?>
			<br><a href="http://localhost/WEBD/web_dev_assignment_Frontpage.html">Back to Login</a>
		<?php	
	}
	
	

	$conn->close();
	?>

</body>

</html>