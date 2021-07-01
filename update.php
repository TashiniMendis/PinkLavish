<?php
//Connect with Mysql
   $conn=mysqli_connect('127.0.0.1', 'root', '');
//Select Database
   mysqli_select_db($conn,'pink lavish');
//UPDATE QUERY
   $sql="UPDATE teammember SET T_no='$_POST[uid]', T_name='$_POST[name]', Email='$_POST[umail]', Contact='$_POST[ucontact]', Password='$_POST[upass]' WHERE T_name='$_POST[name]'";
//Execute the query
   if(mysqli_query($conn,$sql))
      header("refresh:1; url=Memberup.php");
   else
      echo "Not Update";

?>