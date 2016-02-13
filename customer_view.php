<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<!--html code below-->
<ul class="nav nav-tabs">
  <li><h4>Assignment2&nbsp&nbsp</h4></li>
  <li class="active"><a href="customer_view.php">View</a></li>
  <li><a href="customer_add.php">Add</a></li>
</ul>                                                                           
  <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Last/Company Name</th>
        <th>First Name</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
		<th>Zip</th>
		<th>Email</th>
		<th>Phone</th>
      </tr>
    </thead>
<!-- Php code below that views the database-->
<?php // query.php

// require_once 'login.php';

// login.php
$hn = 'www.it354.com';
$db = 'it354_students';
$un = 'it354_students';
$pw = 'steinway';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM customers";
$result = $conn->query($query);
if (!$result) die($conn->error);

$rows = $result->num_rows;

for ($j = 0 ; $j < $rows ; ++$j)
{
	$result->data_seek($j);
	$row = $result->fetch_array(MYSQLI_ASSOC);
	
	echo '<tbody>' . '<tr>';
	echo '<td>' . $j . '</td>';
	echo '<td>' . $row['firstName'] . '</td>';
	echo '<td>' . $row['lastName'] . '</td>';
	echo '<td>' . $row['address'] . '</td>';
	echo '<td>' . $row['city'] . '</td>';
	echo '<td>' . $row['state'] . '</td>';
	echo '<th>' . $row['zip'] . '</th>';
	echo '<th>' . $row['email'] . '</th>';
	echo '<th>' . $row['phone'] . '</th>';
	echo '</tr>' . '</tbody>';
	
	/*
	echo $row['firstName'] . '<br>';
	echo $row['lastName'] . '<br>';
	echo $row['address'] . '<br>';
	echo $row['city'] . '<br>';
	echo $row['state'] . '<br>';
	echo $row['zip'] . '<br>';
	echo $row['email'] . '<br>';
	echo $row['phone'] . '<br><br>';
	*/
}



$result->close();
$conn->close();
?>
	</table>
	</div>
</div>
</body>
</html>
