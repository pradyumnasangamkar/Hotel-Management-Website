<?php require '../layouts/header.php'; ?>
<?php require '../admins/config/config-admin.php'; ?>

<?php

//Delete Image as well as room. The image will be removed from the folder 


    if(isset($_GET['id'])) {

        $id = $_GET['id'];

        $getImage = $conn->query("SELECT * FROM rooms WHERE id= '$id'");
        $getImage->execute();

        $fetch = $getImage->fetch(PDO::FETCH_OBJ);

        unlink("room_images/" . $fetch->image);


        $delete = $conn->prepare("DELETE FROM rooms WHERE id= '$id'");
        $delete->execute();

        header("Location: show-rooms.php");
    }

?>

<?php require '../layouts/footer.php'; ?>