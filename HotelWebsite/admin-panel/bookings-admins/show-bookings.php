<?php require '../layouts/header.php'; ?>
<?php require '../admins/config/config-admin.php'; ?>

<?php


  if (!isset($_SESSION['admin_name'])) {
    echo "<script>window.location.href='" . ADMINURL . "/admins/login-admins.php' </script>";
  }

  $bookings = $conn->query("SELECT * FROM bookings");
  $bookings->execute();

  $allBookings = $bookings->fetchAll(PDO::FETCH_OBJ);

?>


<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-4 d-inline">Bookings</h5>
      <a href = "../../BookingForm/index.php">  <button class="btn btn-primary mb-4 text-center float-right">Create Booking</button> </a>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">email</th>
              <th scope="col">phone Number </th>
              <th scope="col">Adult</th>
              <th scope="col">Child</th>
              <th scope="col">Check In</th>
              <th scope="col">Check Out</th>
              <th scope="col">Rooms</th>
              <th scope="col">Message</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($allBookings as $booking) : ?>  
            <tr>

              <th scope="row"><?php echo $booking->id; ?></th>
              <td><?php echo $booking->name; ?></td>
              <td><?php echo $booking->email; ?></td>
              <td><?php echo $booking->phone; ?></td>
              <td><?php echo $booking->adult; ?></td>
              <td><?php echo $booking->child; ?></td>
              <td><?php echo $booking->checkIn; ?></td>
              <td><?php echo $booking->checkOut; ?></td>
              <td><?php echo $booking->room; ?></td>
              <td><?php echo $booking->msg; ?></td>

            </tr>
            <?php endforeach; ?>
           
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php require '../layouts/footer.php'; ?>