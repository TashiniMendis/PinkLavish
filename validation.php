<?php
 
 Session_start();
 
 /*function TextNode($msg){
    $element = "<h6>$msg</h6>";
    echo $element;
}*/


 $con = mysqli_connect('localhost', 'root', '');
 
 mysqli_select_db($con, 'pink lavish');

 
 $userName = $_POST['name'];
 $userPass = $_POST['upass'];
 

 $s = "select * from teammember where T_name = '$userName' && Password = '$userPass'";

 $result = mysqli_query($con, $s);

 $num = mysqli_num_rows($result);

 if($num == 1){
     $_SESSION['username'] = $userName;
     header('location: adminhome.php');
 }
 else{
    //$_SESSION['message'] = "Success!";
    //$_SESSION['msg_type'] = "warning";
    
    


    header('location:login.php');
 }

?>