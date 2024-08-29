<?php require '../layouts/header.php'; ?>
<?php require '../admins/config/config-admin.php'; ?>


<?php


  if (!isset($_SESSION['admin_name'])) {
    echo "<script>window.location.href='" . ADMINURL . "/admins/login-admins.php' </script>";
  }

    //validate the data

    if (isset($_POST['submit'])) {

      if (empty($_FILES['image']) or empty($_POST['name'])) {
        echo "<script>alert('One or more inputs are empty')</script>";
      } else {


        $image =$_FILES['image']['name'];
        $name = $_POST['name'];

        $dir ="menu_images/" . basename($image);

        $insert = $conn->prepare("INSERT INTO menu (image, name)
        VALUES (:image, :name)");

        $insert->execute([
          ":image" => $image,
          ":name" => $name,
        ]);

        if(move_uploaded_file($_FILES['image']['tmp_name'], $dir)){

          header("location: show-menu.php");

        }

        
      }
    }

?>

<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-5 d-inline">Create Menus</h5>
        <form method="POST" action="create-menu.php" enctype="multipart/form-data">
          <!-- Email input -->
          
          <div class="form-outline mb-4 mt-4">
            <input type="file" name="image" id="form2Example1" class="form-control" />

          </div>

          <div class="form-outline mb-4 mt-4">
            <input type="text" name="name" id="form2Example1" class="form-control" placeholder="name" />

          </div>
          <!-- Submit button -->
          <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>


        </form>

      </div>
    </div>
  </div>
</div>
<?php require '../layouts/footer.php'; ?>