<html>
    <head>
        <title>User Login And Registration</title>
        <link rel="stylesheet" href="css/Sign.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
      <?php
    if (isset($_SESSION['message'])): ?>

    <div class="alert alert-<?=$_SESSION['msg_type']?>">

    <?php
      echo $_SESSION['message'];
      unset($_SESSION['message']);
    ?>
    </div>
    <?php endif ?>

      <div class="container">
        <div class="login-box">
          <div class="row">
          <div class="col-md-6 login-left">
            

                <h2> Login Here </h2>
                <form action="validation.php" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="upass" class="form-control" required>
                </div>
                <input type="submit" class="btn btn-primary" value="Login">
            </form>
            </div>
      
            <!--<div class="col-md-6 login-right">
                <h2> Register Here </h2>
                <form action="Registration.php" method="POST">
                <div class="form-group">
                    <label>Index No</label>
                    <input type="number" name="uid" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="umail" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Contact</label>
                    <input type="number" name="ucontact" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="upass" class="form-control" required>
                </div>
                <input type="submit"  name="submit" class="btn btn-primary" value="Register">
                </form>
            </div>-->
          </div>
        </div>
     </div>
    </body>
</html>
