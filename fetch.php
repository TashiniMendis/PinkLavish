<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=pink lavish", "root", "");

$column = array('order_Customer', 'order_Date', 'order_value', 'order_Cash_Paid', 'total_value');

$query = '
SELECT * FROM payment 
WHERE  order_Customer LIKE "%'.$_POST["search"]["value"].'%" 
OR order_Date LIKE "%'.$_POST["search"]["value"].'%" 
OR order_value LIKE "%'.$_POST["search"]["value"].'%" 
OR order_Cash_Paid LIKE "%'.$_POST["search"]["value"].'%"
OR total_value LIKE "%'.$_POST["search"]["value"].'%"


';

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY order_id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $connect->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $connect->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

$total_order = 0;

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row["order_Customer"];
 $sub_array[] = $row["order_Date"];
 $sub_array[] = $row["order_value"];
 $sub_array[] = $row["order_Cash_Paid"];
 $sub_array[] = $row["total_value"];

 $total_order = $total_order + floatval($row["total_value"]);
 $data[] = $sub_array;
}

function count_all_data($connect)
{
 $query = "SELECT * FROM payment";
 $statement = $connect->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST["draw"]),
 'recordsTotal'  => count_all_data($connect),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data,
 'total'    => number_format($total_order, 2)
);

echo json_encode($output);


?>