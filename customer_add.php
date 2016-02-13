<!DOCTYPE html>

<!-- Created by Frank Wylie -->

<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
<!-- Form Container -->
<div class="container">

    <!-- Form Navigational Tabs -->
    <ul class="nav nav-tabs">
      <li><h4>Assignment2&nbsp&nbsp </h4></li>
      <li><a href="customer_view.php">View</a></li>
     <li class="active"><a href="customer_add.html">Add</a></li>
    </ul> <!-- End Navigational Tabs -->     

  <h2>Add A Customer</h2>

  <!-- Start Customer Form using POST method upon submit-->
  <form class="form-horizontal" role="form" method="post" action="customer_add.php">


    <!-- Input First Name -->
    <div class="form-group">
      <label for="fname" class="control-label col-sm-2">First Name:</label>
      <div class="col-sm-10">
        <input type="text" name="fname" id="fname"
        class="form-control" placeholder="Enter first name">
      </div>
    </div>  <!-- End First Name -->



    <!-- Input Last Name or Company Name -->
    <div class="form-group">
      <label for="lname" class="control-label col-sm-2">Last or Company:</label>
      <div class="col-sm-10">
        <input type="text" name="lname" id="lname"
        class="form-control" placeholder="Enter last name or company name">
      </div>
    </div> <!-- End Last Name or Company Name -->



    <!-- Input Address -->
    <div class="form-group">
      <label for="address" class="control-label col-sm-2">Address:</label>
      <div class="col-sm-10">
        <input type="text" name="address" id="address"
        class="form-control" placeholder="Enter address">
      </div>
    </div>  <!-- End Address -->



    <!-- Input City -->
    <div class="form-group">
      <label for="city" class="control-label col-sm-2">City:</label>
      <div class="col-sm-10">
        <input type="text" name="city" id="city"
        class="form-control" placeholder="Enter city">
      </div>
    </div>  <!-- End City -->



    <!-- Input State -->
    <div class="form-group">
      <label for="state" class="control-label col-sm-2">State:</label>
      <div class="col-sm-10">
        <input type="text" name="state" id="state"
        class="form-control" placeholder="Enter State">
      </div>
    </div>  <!-- End State -->



    <!-- Input Zip -->
     <div class="form-group">
      <label for="zip" class="control-label col-sm-2">Zip:</label>
      <div class="col-sm-10">
        <input type="text" name="zip" id="zip"
        class="form-control" placeholder="Enter zip">
      </div>
    </div>  <!-- End Zip -->



    <!-- Input Email -->
    <div class="form-group">
      <label for="email" class="control-label col-sm-2">Email:</label>
      <div class="col-sm-10">          
        <input type="email" name="email" id="email"
        class="form-control" placeholder="Enter email">
      </div>
    </div>  <!-- End Email -->



    <!-- Input Phone -->
    <div class="form-group">
      <label for="phone" class="control-label col-sm-2">Phone:</label>
      <div class="col-sm-10">
        <input type="text" name="phone" id="phone"
        class="form-control" placeholder="Enter phone">
      </div>
    </div>  <!-- End Phone -->



    <!-- Form Submit Button -->
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" id="submit" value="Send"
        class="btn btn-default">Submit</button>
      </div>
    </div>  <!-- End Submit Button -->

  </form> <!-- End Form -->
  <hr>


</div> <!-- End Container -->

</body>
</html>

<?php // query.php

// references
// -- w3schools.com
// -- tutorial republic.com

// login.php Database
$hn = 'www.it354.com';   // Servername
$db = 'it354_students';  // Username
$un = 'it354_students';  // Password
$pw = 'steinway';        // Database Name

// Create Database Connection
$conn = new mysqli($hn, $un, $pw, $db);
// Check connection
if ($conn->connect_error) {
  die($conn->connect_error);
}

// Assigned a name attribute to each of the inputs.  
// PHP variables to extract this data. 
if (isset($_POST["submit"])) {
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];


    // Attempt insert query execution
    $sql = "INSERT INTO customers (firstName, lastName, address, city, state, zip, email, phone)
    VALUES ('$firstName' , '$lastName' , '$address', '$city', '$state', '$zip', '$email', '$phone')";

    // Database processing
    if (mysqli_query($conn, $sql)) {
      echo "Records added successfully.";
    }else{
      echo "Error: Unable to execute $sql."   .mysqli_error($conn);
    }


  }

$conn->close(); // Close out the database connection. 
?>




