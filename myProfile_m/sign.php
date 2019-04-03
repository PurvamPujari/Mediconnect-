<?php

$servername = "localhost";
$username = "id2718577_mediconnect_admin";
$password = "mediconnect@123";
$dbname="id2718577_mediconnect_database";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<script>alert('Connected successfully')</script>";

// create a variable
$email=$_POST['email'];
$password=$_POST['password'];
 
//Execute the query
echo "<script>alert('$email')</script>";
echo "<script>alert('$password')</script>";
mysqli_query($conn,"INSERT INTO authenticate_user (u,p) 
VALUES ('$email','$password')");

mysqli_close($conn);
?>