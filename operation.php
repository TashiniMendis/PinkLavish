<?php

require_once ("db.php");
require_once ("component.php");

$con=Createdb();

if(isset($_POST['create'])){
   createData();
}

if(isset($_POST['update'])){
    UpdateData();
}

if(isset($_POST['delete'])){
    deleteRecord();
}

if(isset($_POST['deleteall'])){
    deleteAll();

}

function createData(){
    $team_name=textboxValue(value:"tname");
    $team_email=textboxValue(value:"temail");
    $team_age=textboxValue(value:"tage");
    $team_gender=textboxValue(value:"tgender");
    

    if($team_name && $team_email && $team_age && $team_gender){
        $sql="INSERT INTO team (tname,temail,tage,tgender)
        VALUES('$team_name','$team_email','$team_age','$team_gender')";

        if(mysqli_query($GLOBALS['con'],$sql)){
            TextNode("success", "Record Successfully Inserted");
        }else{
            echo "error";
        }

    }else{
        TextNode("error", "Provide Data in the Textbox to Add new");
    }

}

function textboxValue($value){
    $textbox=mysqli_real_escape_string($GLOBALS['con'],trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}

// messages
function TextNode($classname, $msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}

//get data from database
function getData(){
    $sql="SELECT * FROM team";

    $result=mysqli_query($GLOBALS['con'],$sql);
    if(mysqli_num_rows($result)>0){
        return $result;
    }
}

// update data
function UpdateData(){
    $team_id=textboxValue(value:"tid");
    $team_name=textboxValue(value:"tname");
    $team_email=textboxValue(value:"temail");
    $team_age=textboxValue(value:"tage");
    $team_gender=textboxValue(value:"tgender");

    if($team_name && $team_email && $team_age && $team_gender){
        $sql="
        UPDATE team SET tname='$team_name', temail = '$team_email', tage = '$team_age',tgender='$team_gender' WHERE tid='$team_id';   
        ";
        if(mysqli_query($GLOBALS['con'],$sql)){
            TextNode("success", "Data sucessfully updated");
        }else{
            TextNode("error", "Enable to Update Data");
        }

    }else{
        TextNode("error", "select data using edit icon");
    }

}

//delete data
function deleteRecord(){
    $team_id = (int)textboxValue("tid");

    $sql = "DELETE FROM team WHERE tid=$team_id";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("success","Record Deleted Successfully");
    }else{
        TextNode("error","Enable to Delete Record...!");
    }

}

function deleteBtn(){
    $result = getData();
    $i = 0;
    if($result){
        while ($row = mysqli_fetch_assoc($result)){
            $i++;
            if($i > 1){
                buttonElement("btn-deleteall", "btn btn-danger" ,"<i class='fas fa-trash'></i> Delete All", "deleteall", "");
                return;
            }
        }
    }
}

function deleteAll(){
    $sql = "DROP TABLE team";

    if(mysqli_query($GLOBALS['con'], $sql)){
        TextNode("success","All Record deleted Successfully");
        Createdb();
    }else{
        TextNode("error","Something Went Wrong Record cannot deleted");
    }
}

// set id to textbox
function setID(){
    $getid = getData();
    $id = 0;
    if($getid){
        while ($row = mysqli_fetch_assoc($getid)){
            $id = $row['tid'];
        }
    }
    return ($id + 1);
}