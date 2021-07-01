<!DOCTYPE html>
<html>

        <?php

           include('connection.php');
           
           $customer_name = $_POST['name'];
           $date = $_POST['date'];
           $value = $_POST['value'];
           $cash_paid = $_POST['paid'];
           $total_value = $value - $cash_paid;

           if(!$_POST['submit']){
              echo "All feilds are required";
           }
           else{
              $sql = "INSERT into payment(Customer, Date, Value, Cash_Paid, Total_value)
              values ('$customer_name', '$date', '$value', '$cash_paid', '$total_value')";

              if(mysqli_query($conn, $sql)){
                 echo "Data creation successful";
              }
              else{
                 echo "Something went wrong, try later";
              }
           }

        ?>

<script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <head>
       <title>Payment Invoice</title>
       <link rel="stylesheet" href="css/class.css">
    </head>
    <body>
       <div class="title">
         <h1>Payment Invoice</h1>
       </div>
       <div class="form">
       <form action="form.php" method="POST">
          
          <input type="text" placeholder="Customer name" name="name">
          <input type="date" placeholder="Date" name="date">
          <input type="real" placeholder="value" name="value">
          <input type="real" placeholder="Cash_paid" name="paid">    
          
             <input type="submit" name="submit" value="Create">
            
          
       </form>
       </div>
       
       
    </body>
</html>