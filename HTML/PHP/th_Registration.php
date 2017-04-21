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
	$FirstName = $db -> quote($_POST['FirstName']);
	$LastName = $db -> quote($_POST['Surname']);
	
	// Insert the values into the database
	$result = $db -> query("INSERT INTO `persons` (`UserName`,`PassWord`,`FirstName`,`LastName`) VALUES (" . $UserName . "," . $PassWord  . "," . $FirstName . "," . $LastName . ")");
			
	?>

</body>

</html>