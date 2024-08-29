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
$phone = $_POST['phone'];
$email = $_POST['email'];
$mesage = $_POST['mesage'];

// Insert the form data into the database
 $sql = "INSERT INTO `contact` (`name`, `phone`, `email`, `mesage`) VALUES ('$name', '$phone', '$email', '$mesage')";

 $res = mysqli_query($conn,$sql);
    
    if ($res) {
        echo "<h1>Message sent successfully!<h1>";
        echo  "<a href = ../index.php> <button>Go to home </button></a>" ;

    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
    mysqli_close($conn);

}
?>