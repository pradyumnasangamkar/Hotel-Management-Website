<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{

// Connect to the database
$servername="localhost";
$username="root";
$password="";
$database="hotel-booking";

$conn=mysqli_connect($servername,$username,$password,$database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$fullname = $_POST['fullname'];
$contact = $_POST['contact'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$addres = $_POST['addres'];
$country = $_POST['country'];
$city = $_POST['city'];
$pass = $_POST['pass'];

// Insert the form data into the database
 $sql = "INSERT INTO `customers` (`id`, `fullname`, `contact`, `dob`, `gender`, `addres`, `country`, `city`, `pass`) VALUES ('$NULL', '$fullname', '$contact', '$dob', '$gender', '$addres', '$country', '$city', '$pass')";

 $res = mysqli_query($conn,$sql);
    
    if ($res) {
        header("Location: ../index.php");
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
    mysqli_close($conn);

}
?>