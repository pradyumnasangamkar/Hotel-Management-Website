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
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$adult = $_POST['adult'];
$child = $_POST['child'];
$checkIn = $_POST['checkIn'];
$checkOut = $_POST['checkOut'];
$room = $_POST['room'];
$msg = $_POST['msg'];

// Insert the form data into the database
 $sql = "INSERT INTO `bookings` (`id`, `name`, `email`, `phone`, `adult`, `child`, `checkIn`, `checkOut`, `room`, `msg`) VALUES ('$NULL', '$name', '$email', '$phone', '$adult', '$child', '$checkIn', '$checkOut', '$room', '$msg')";

 $res = mysqli_query($conn,$sql);
    
    if ($res) {
        header("Location: ../index.php");
    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
    mysqli_close($conn);

}
?>