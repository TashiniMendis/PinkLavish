<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'pink lavish') or die(mysqli_error($mysqli));

$name = '';
$update = false;
$id = '';
$email = '';
$contact = '';


if (isset($_POST['save'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    

    $mysqli->query("INSERT INTO teammember  (T_no, T_name, Email, Contact) VALUES('$id, $name', '$email', '$contact')") or die($mysqli->error);

    
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: EditTeam.php");
}

if(isset($_GET['delete'])){
    $name = $_GET['delete'];
    $mysqli->query("DELETE FROM teammember WHERE T_name=$name") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: EditTeam.php");
}

if(isset($_GET['edit'])){
    $name = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM teammember WHERE T_name=$name") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $id = $row['T_no'];
        
        $email = $row['Email'];
        $contact = $row['Contact'];
        
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
   

    $mysqli->query("UPDATE teammember SET T_no='$id', T_name='$name', Email='$email', Contact='$contact' WHERE T_name=$name") or
            die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";  
    
    header("location: EditTeam.php");
}