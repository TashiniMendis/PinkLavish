<html>
 <head>
  <title>Total Payments</title>
  <link rel="stylesheet" href="css/delete.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
 <header>
		<h1>Salon Pink Lavish</h1>
		<div class="main">
			<ul>
				<li><a href="adminhome.php">Home</a></li>
                <li><a href="product%20change.php">Products</a></li>
                <li><a href="Memberup.php">Team</a></li>
				        <li><a href="product%20change.php">Products</a></li>
                <li><a href="serviceEdit.php">Services</a></li>
                <li class="active"><a href="#">Payment</a></li>
				
				
			</ul>
		</div> 
		
		
	</header>
  <div class="container box">
   <h3 align="center">Total Payments</h3>
   <br />
   <div class="table-responsive">
    <table id="order_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Customer Name</th>
       <th>Date</th>
       <th>Value</th>
       <th>Cash Paid</th>
       <th>Total Value</th>
      </tr>
     </thead>
     <tbody></tbody>
     <tfoot>
      <tr>
       <th colspan="4">Total</th>
       <th id="total_order"></th>
      </tr>
     </tfoot>
    </table>
    <br />
    <br />
    <br />
   </div>
  </div>
 </body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
   var dataTable = $('#order_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"fetch.php",
     type:"POST"
    },
    drawCallback:function(settings)
    {
     $('#total_order').html(settings.json.total);
    }
   });

    
  
 });
 
</script>