<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'pink lavish') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$username = '';
$usertype = '';
$userprice = '';


if (isset($_POST['save'])){
    $usertype = $_POST['type'];
    $username = $_POST['name'];
    $userprice = $_POST['price'];

    $mysqli->query("INSERT INTO services (Type, S_Name, Price) VALUES('$usertype', '$username', '$userprice')") or die($mysqli->error);

    
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: serviceEdit.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM services WHERE S_Id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: serviceEdit.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM services WHERE S_Id=$id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $usertype = $row['Type'];
        $username = $row['S_Name'];
        $userprice = $row['Price'];
       
        
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $usertype = $_POST['type'];
    $username = $_POST['name'];
    $userprice = $_POST['price'];
    

    $mysqli->query("UPDATE services SET Type='$usertype', S_Name='$username', Price=' $userprice' WHERE S_Id=$id") or
            die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";  
    
    header("location: serviceEdit.php");
}