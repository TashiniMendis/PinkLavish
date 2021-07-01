<?php

Session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>

<html>
<!--Code by Divinector (www.divinectorweb.com)-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/adminhome.css">    
</head>
<body>
    <header>
    <div class="wrapper">
        
            <ul class="nav-area">
                <li><a href="#">Home</a></li>
                <li><a href="delete.php">Bookings</a></li>
				
                <li><a href="Memberup.php">Team</a></li>
				<li><a href="product%20change.php">Products</a></li>
				<li><a href="serviceEdit.php">Services</a></li>
                <li><a href="http://localhost:8080/pink%20lavish/pay.php">Payment</a></li>

            </ul>
</div>
<div class="welcome-text">
        <h1>
Welcome  <span><?php echo $_SESSION['username']; ?> <span>
   </h1>
<a href="logout.php">LOGOUT</a>
<a href="form.php">PaymentInvoice</a>
    </div>
</header>

</body>
</html>
