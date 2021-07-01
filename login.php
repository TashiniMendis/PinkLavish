<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" href="css/login.css">
  
	
</head>
<body>
<header>
		<h1>Salon Pink Lavish</h1>
		<div class="main">
			<ul>
				<li><a href="main.html">Home</a></li>
				<li><a href="MyHome.html">About Us</a></li>
				<li><a href="01.html">Services</a></li>
				<li><a href="pro.html">Products</a></li>
				<li><a href="Team.html">Our Team</a></li>
				<li><a href="MyHome.html">Contact</a></li>
				
			</ul>
		</div> 
		
		
	  </header>
	<img src="images/log.jpg"  >
   <div class="login-box">
	   
	<div class="container">
   	<h2>Login</h2>
	<form action="validation.php" method="POST">
   	<div class="textbox">
		<label>Username</label>
   		<i class="form-control" aria-hidden="true"></i>
   		<input type="text" name="name">
   	</div>

   		<div class="textbox">
			<label>Password</label>
			<i class="form-control" aria-hidden="true"></i>
   		<input type="password" name="upass">
   	</div>

	   <input type="submit" class="btn btn-primary" value="Login">
	</form>
   </div>
</div>
</body>
</html>