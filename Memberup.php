<html>
<head>
<title>Update Records In MySql Database Using PHP</title>
<link rel="stylesheet" href="css/memberup.css">
<script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<header>
		<h1>Salon Pink Lavish</h1>
		<div class="main">
			<ul>
				<li><a href="adminhome.php">Home</a></li>
				<li><a href="delete.php">Booking</a></li>
            <li class="active"><a href="#">Team</a></li>
				<li><a href="product%20change.php">Products</a></li>
				<li><a href="serviceEdit.php">Services</a></li>
            <li><a href="pay.php">Payment</a></li>
				
			</ul>
		</div> 
		
		
	</header>
<?php
//Connect with Mysql
   $conn=mysqli_connect('127.0.0.1', 'root', '');
//Select Database
   mysqli_select_db($conn,'pink lavish');
//SELECT QUERY
   $sql="SELECT * FROM teammember";
//Execute the query
   $records=mysqli_query($conn,$sql);

?>
<div class="title">
   <h1>Update Team Members</h1>
</div>
<div class="row justify-content-center">
<table class="table">
   <tr>
      <th>Index No</th>
      <th>Username</th>
      <th>Email</th>
      <th>Contact</th>
   
      
   <tr>
   <?php
    while($row=mysqli_fetch_array($records))
    {
       echo"<tr><form action=update.php method=POST>";
       echo"<td><input type=number name=uid value='",$row['T_no'],"'></td>";
       echo"<td><input type=text name=name value='",$row['T_name'],"'></td>";
       echo"<td><input type=email name=umail value='",$row['Email'],"'></td>";
       echo"<td><input type=number name=ucontact value='",$row['Contact'],"'></td>";
       
      
      
       echo"<td><input type=submit>";
       echo"</form></tr>";
    }  
   
   ?> 

   </table>
   </div>
</body>
</html>


