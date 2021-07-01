<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'pink lavish') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$userName = '';
$userEmail = '';
$userContact = '';
$userCity = '';
$userDate = '';
$userService = '';
$userMember = '';

if (isset($_POST['save'])){
    $userName = $_POST['name'];
    $userEmail = $_POST['umail'];
    $userContact = $_POST['ucon'];
    $userCity = $_POST['ucity'];
    $userDate = $_POST['udate'];
    $userService = $_POST['uservice'];
    $userMember = $_POST['umember'];

    $mysqli->query("INSERT INTO booking (Name, Email, Contact, City, Date, Service, TeamMember) VALUES('$userName', '$userEmail', '$userContact', '$userCity', '$userDate', '$userService', '$userMember')") or die($mysqli->error);

    
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: delete.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM booking WHERE C_Id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: delete.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM booking WHERE C_Id=$id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $userName = $row['Name'];
        $userEmail = $row['Email'];
        $userContact = $row['Contact'];
        $userCity = $row['City'];
        $userDate = $row['Date'];
        $userService = $row['Service'];
        $userMember = $row['TeamMember'];
        
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $userName = $_POST['name'];
    $userEmail = $_POST['umail'];
    $userContact = $_POST['ucon'];
    $userCity = $_POST['ucity'];
    $userDate = $_POST['udate'];
    $userService = $_POST['uservice'];
    $userMember = $_POST['umember'];

    $mysqli->query("UPDATE booking SET Name='$userName', Email='$userEmail', Contact=' $userContact', City='$userCity', Date='$userDate', Service='$userService', TeamMember='$userMember' WHERE C_Id=$id") or
            die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";  
    
    header("location: delete.php");
}