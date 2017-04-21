<!DOCTYPE html>
<html>
<head>
	<title>Rigistration Page</title>
</head>

<body>
	
	<?php
		
	include 'Db.php';
	// Our database object
	$db = new Db();    

	// Quote and escape form submitted values
	$UserName = $db -> quote($_POST['UserName']);
	$PassWord = $db -> quote($_POST['PassWord']);
	
	// Insert the values into the database
	$rows = $db -> select("SELECT UserName, PassWord FROM Persons WHERE UserName = '".$UserName."' AND  PassWord = '".$PassWord."'");
	?>

</body>

</html>