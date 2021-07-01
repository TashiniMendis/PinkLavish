<!DOCTYPE html>
<html>


        <?php

           include('connection.php');

          

$id = 0;
$update = false;
$userName = '';
$userEmail = '';
$userContact = '';
$userCity = '';
$userDate = '';
$userService = '';
$userMember = '';

if (isset($_POST['submit'])){
    $userName = $_POST['name'];
    $userEmail = $_POST['umail'];
    $userContact = $_POST['ucon'];
    $userCity = $_POST['ucity'];
    $userDate = $_POST['udate'];
    $userService = $_POST['uservice'];
    $userMember = $_POST['umember'];

    if(!$_POST['submit']){
      echo "All feilds are required";
   }
   else{
      $sql = "INSERT into booking(Name, Email, Contact, City, Date, Service, TeamMember)
      values ('$userName', '$userEmail', '$userContact', '$userCity', '$userDate', '$userService', '$userMember')";

      if(mysqli_query($conn, $sql)){
         echo "Data creation successful";
        
      }
      else{
         echo "Something went wrong, try later";
      }
   }    

    
   
}
           
           /*$userName = $_POST['name'];
           $userEmail = $_POST['umail'];
           $userContact = $_POST['ucon'];
           $userCity = $_POST['ucity'];
           $userDate = $_POST['udate'];
           $userService = $_POST['uservice'];
           $userMember = $_POST['umember'];

           if(!$_POST['submit']){
              echo "All feilds are required";
           }
           else{
              $sql = "INSERT into booking(Name, Email, Contact, City, Date, Service, TeamMember)
              values ('$userName', '$userEmail', '$userContact', '$userCity', '$userDate', '$userService', '$userMember')";

              if(mysqli_query($conn, $sql)){
                 echo "Data creation successful";
              }
              else{
                 echo "Something went wrong, try later";
              }
           }*/

        ?>

    <head>
       <title>Salon Management System</title>
       <link rel="stylesheet" href="Class.css">
    </head>
    <body>
       <div class="title">
         <h1>Registration Form</h1>
       </div>
       <div class="form">
       <form action="Regform.php" method="POST">
          
          <input type="text" placeholder="Name" name="name">
          <input type="email" placeholder="Email" name="umail">
          <input type="number" placeholder="Contact" name="ucon">
          <input type="text" placeholder="City" name="ucity"> 
          <input type="date" placeholder="Date" name="udate"> 
          <input type="text" placeholder="Service" name="uservice"> 
          <input type="text" placeholder="TeamMember" name="umember">
             <input type="submit" name="submit" value="Create">
             
          
       </form>
       </div>
       
       
    </body>
</html>