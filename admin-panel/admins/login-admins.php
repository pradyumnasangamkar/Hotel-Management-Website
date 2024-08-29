<?php require '../layouts/header.php'; ?>
<?php require 'config/config-admin.php'; ?>

<?php

//using js to redirect as php is giving issues
//this is to not be able to access the login page if already logged in

if (isset($_SESSION['admin_name'])) {
  echo "<script>window.location.href='" . ADMINURL . "' </script>";
}

//VALIDATE FORM SUBMISSION
if (isset($_POST['submit'])) {
  if (empty($_POST['email']) or empty($_POST['password'])) {
    echo "<script>alert('One or more inputs are empty')</script>";
  } else {

    $email = $_POST['email'];
    $password = $_POST['password'];


    //validate email with query

    $login = $conn->query("SELECT * FROM admins WHERE email='$email'");
    $login->execute();

    $fetch = $login->fetch(PDO::FETCH_ASSOC);


    //get row count

    if ($login->rowCount() > 0) {

      if (password_verify($password, $fetch['mypassword'])) {

        //echo "<script>alert('LOGGED IN')</script>";

        //start session variables

        $_SESSION['admin_name'] = $fetch['admin_name'];
        $_SESSION['id'] = $fetch['id'];

        header("location: " . ADMINURL . "");
      } else {

        echo "<script>alert('EMAIL OR PASSWORD IS INCORRECT')</script>";
      }
    } else {

      echo "<script>alert('EMAIL OR PASSWORD IS INCORRECT')</script>";
    }
  }
}



?>

<div class="container-fluid">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mt-5">Login</h5>
          <form method="POST" class="p-auto" action="login-admins.php">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" name="email" id="form2Example1" class="form-control" placeholder="Email" />

            </div>


            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" name="password" id="form2Example2" placeholder="Password" class="form-control" />

            </div>



            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">Login</button>


          </form>

        </div>
      </div>
      <?php require '../layouts/footer.php'; ?>