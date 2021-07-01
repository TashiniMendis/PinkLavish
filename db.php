<?php

function Createdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pink lavish";

    // create connection
    $con = mysqli_connect($servername, $username, $password);

    // Check Connection
    if (!$con){
        die("Connection Failed : " . mysqli_connect_error());
    }

    // create Database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";


        if(mysqli_query($con,$sql)){
            $con = mysqli_connect($servername, $username, $password,$dbname);

            $sql=" 
            CREATE TABLE IF NOT EXISTS team(
            tid INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            tname varchar(20) not null,
            temail varchar(30) not null,
            tage int,
            tgender varchar(8)
        );
        ";
        if(mysqli_query($con,$sql)){
            return $con;
        }else{
            echo "cannot create table";
        }

    }else{
        echo "error while creating database".mysqli_error($con);
    }
}