<?php
 
 
session_start();
header('location:Reg.php');

 include('conmem.php');
           
           $UserId = $_POST['uid'];
           $userName = $_POST['name'];
           $UserEmail = $_POST['umail'];
           $UserContact = $_POST['ucontact'];
           $userPass = $_POST['upass'];
          

           if(!$_POST['submit']){
            echo "All feilds are required";
         }
           else{
              $sql = "INSERT into teammember(T_no, T_name, Email, Contact, Password)
              values ('$UserId', '$userName', '$UserEmail', '$UserContact', '$userPass')";

              if(mysqli_query($conn, $sql)){
                 echo "Data creation successful";
                 
              }
              else{
                 
                 echo "Something went wrong, try later";
              }
           }

?>