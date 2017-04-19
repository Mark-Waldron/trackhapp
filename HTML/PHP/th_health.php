<!DOCTYPE HTML>
<html>  
<body>

<?php


   // Check if we have parameters w1 and w2 being passed to the script through the URL
   if (isset($_GET["w1"]) && isset($_GET["w2"])) {

 

      // Put the two words together with a space in the middle to form "hello world"

      $hello = $_GET["w1"] . " " . $_GET["w2"];

 

      // Print out some JavaScript with $hello stuck in there which will put "hello world" into the javascript.

      echo $hello;

   

}

// Check if we have parameters w1 and w2 being passed to the script through the URL
   if (isset($_GET["x1"]) && isset($_GET["x2"])) {

 

      // Put the two words together with a space in the middle to form "hello world"

      $hello_2 = $_GET["x1"] . " " . $_GET["x2"];

 

      // Print out some JavaScript with $hello stuck in there which will put "hello world" into the javascript.

      echo $hello_2;

   

}

?>  

</body>
</html>
