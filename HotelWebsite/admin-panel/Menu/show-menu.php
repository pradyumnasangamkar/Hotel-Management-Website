<?php require '../layouts/header.php'; ?>
<?php require '../admins/config/config-admin.php'; ?>

<?php


if (!isset($_SESSION['admin_name'])) {
  echo "<script>window.location.href='" . ADMINURL . "/admins/login-admins.php' </script>";
}

$menu = $conn->query("SELECT * FROM menu");
$menu->execute();

$allMenu = $menu->fetchAll(PDO::FETCH_OBJ);

?>


<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-4 d-inline">Menu</h5>
        <a href="create-menu.php" class="btn btn-primary mb-4 text-center float-right">Create Menu</a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">image</th>
              <th scope="col">name</th>
              <th scope="col">delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($allMenu as $menu) : ?>
              <tr>
                <th scope="row"><?php echo $menu->id; ?></th>
                <td><?php echo $menu->image; ?></td>
                <td><?php echo $menu->name; ?></td>
                
                <td><a href="delete-menu.php?id=<?php echo $menu->id; ?>" class="btn btn-danger  text-center ">Delete </a></td>
              </tr>
            <?php endforeach; ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


<?php require '../layouts/footer.php'; ?>