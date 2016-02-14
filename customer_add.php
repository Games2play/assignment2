<?php // query.php

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
  

$conn->close(); // Close out the database connection. 

?>




