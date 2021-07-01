<html>
<head>
<title>Booking Details</title>
<link rel="stylesheet" href="delete.css">
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
				<li><a href="http://localhost:8080/pink%20lavish/adminhome.php">Home</a></li>
                <li><a href="http://localhost:8080/pink%20lavish/product%20change.php">Products</a></li>
                <li><a href="http://localhost:8080/pink%20lavish/Memberup.php">Team</a></li>
				<li><a href="http://localhost:8080/pink%20lavish/product%20change.php">Products</a></li>
                <li class="active"><a href="#">Service</a></li>
                <li><a href="http://localhost:8080/pink%20lavish/pay.php">Payment</a></li>
				
				
			</ul>
		</div> 
		
		
	</header>
    <?php require_once 'proess04.php'; ?>

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
    <?php
       $mysqli = new mysqli('localhost', 'root', '', 'pink lavish') or die(mysqli_error($mysqli));
       $result = $mysqli->query("SELECT * FROM services") or die($mysqli->error);
       //pre_r($result);
       //pre_r($result->fetch_assoc());
    ?>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
              <tr>
                 
                  <th>Type</th>
                  <th>Name</th>
                  <th>Price</th>
                  

                  <th colspan="2">Action</th>
              </tr>
            </thead>
    <?php
        while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['Type']; ?></td>
                <td><?php echo $row['S_Name']; ?></td>
                <td><?php echo $row['Price']; ?></td>
                
                
                <td>
                    <a href="serviceEdit.php?edit=<?php echo $row['S_Id']; ?>"
                    class="btn btn-info">Edit</a>
                    <a href="serviceEdit.php?delete=<?php echo $row['S_Id']; ?>"
                    class="btn btn-danger">Delete</a>
                </td>
            </tr>   

            <?php endwhile; ?>
        </table>  
    </div>
    

    <?php
       function pre_r($array){
           echo '<pre>';
           print_r($array);
           echo '</pre>';
       }
    ?>

    <div class="row justify-content-center">
    <form action="proess04.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Name" value="<?php echo $username; ?>">
        </div>

        <div class="form-group">
        <label>Type</label>
        <input type="text" name="type" class="form-control" value="<?php echo $usertype; ?>" placeholder="Type">
        </div>

        <div class="form-group">
        <label>Price</label>
        <input type="real" name="price" class="form-control" placeholder="Price" value="<?php echo $userprice; ?>">
        </div>        

        <div class="form-group">
        <?php
           if($update == true):
        ?>
             <button type="submit" name="update" class="btn btn-info">Update</button>
        <?php else: ?>
            <button type="submit" name="save" class="btn btn-primary">Save</button>
        <?php endif; ?>
        </div>
    </form>
    </div>
    </div>
</body>
</html>