<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    
    $servername="localhost";
    $username="root";
    $password="";
    $database="hotel-booking";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn)
    {
      die("Failed to Connect!! ".mysqli_connect_error());
    }      
  $contact=$_POST['contact'];
  $pass=$_POST['pass'];
  $sql="SELECT * FROM `customers` WHERE `contact` LIKE '$contact'";
  $res=mysqli_query($conn,$sql);
  $data=mysqli_fetch_assoc($res);

  if($data['contact']==$contact && $data['pass']==$pass)
  {
    echo "<h1>Login successfully!<h1>";
    header("location: ../home.php");
  }
  else
  {
    echo "<h1>invalid credential!!</h1>";
    header("location: ../Signup.php");
  }


 
}
?>