<?php
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $db     = "pink lavish";

   $conn = new mysqli ($dbhost, $dbuser, $dbpass, $db);
   // Check connection

   if($conn->connect_error){
      echo "Connection was faild";
   
   }

?>