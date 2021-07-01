<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$UserId = $_POST['uid'];
    $userName = $_POST['name'];
    $UserEmail = $_POST['umail'];
    $UserContact = $_POST['ucontact'];
    $userPass = $_POST['upass'];
	

		$sql = "INSERT INTO teammember(T_no, T_name, Email, Contact, Password) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$UserId, $userName, $UserEmail, $UserContact, $userPass]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}