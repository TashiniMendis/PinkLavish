<?php

session_start();

$mysqli = new mysqli('localhost', 'root', '', 'pink lavish') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$productName = '';
$price = '';


if (isset($_POST['save'])){
    $productName = $_POST['name'];
    $price = $_POST['price'];
    

    $mysqli->query("INSERT INTO products  (P_name, Price) VALUES('$productName', '$price')") or die($mysqli->error);

    
    $_SESSION['message'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    header("location: product change.php");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM products WHERE P_Id=$id") or die($mysqli->error());

    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

    header("location: product change.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM products WHERE P_Id=$id") or die($mysqli->error());
    if (count($result)==1){
        $row = $result->fetch_array();
        $productName = $row['P_name'];
        $price = $row['price'];
        
    }
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $productName = $_POST['name'];
    $price = $_POST['price'];
   

    $mysqli->query("UPDATE products SET P_name='$productName', price='$price' WHERE P_Id=$id") or
            die($mysqli->error);

    $_SESSION['message'] = "Record has been updated!";
    $_SESSION['msg_type'] = "warning";  
    
    header("location: product change.php");
}