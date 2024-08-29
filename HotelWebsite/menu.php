<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="icon" type="image/x-icon" href="../hotel/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" media="screen and (max-width: 850px)" href="styles/handset_index.css">
    <link rel="stylesheet" media="screen and (max-width: 650px)" href="styles/hamburger-menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<body>
    <!-- Navbar -->
    <div class="hamburger">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <div class="frontpage">

        
        <!-- Frontpage -->
        <div class="content">
            Enchanted with elegance!
            <br>
            <div id="contentsum1">

                Where cozy memories lasts
            </div>
        </div>

    </div>
    <!-- Kitchen -->
    <div class="kitchen" id="kitchen">
        <div id="sum1">What would you like us to prepare for you?</div>
        <div id="intro">Our Kitchen</div>
        <div id="sum2">

            Taste the best of Town with the food that awaits you
        </div>

        <div class="foodbox">
            <div class="foodcolumn">

                <div><img src="img/Maharashtrianthali.png" alt="">
                    <div class="fooddesc">
                        Maharashtrian Thali 
                    </div>
                </div>
                <div><img src="img/Punjabithali.png" alt="">
                    <div class="fooddesc">Punjabi Thali
                    </div>
                </div>
            </div>
            <div class="foodcolumn">
                <div><img src="img/Rajasthanithali.png" alt="">
                    <div class="fooddesc">
                        Rajasthani Thali 
                    </div>
                </div>
                <div><img src="img/Gujaratikathiawadithali.png" alt="">
                    <div class="fooddesc">
                        Gujarati Kathiawadi Thali
                    </div>
                </div>
            </div>
            <div class="foodcolumn">
                <div><img src="img/Keralasadhyathali.png" alt="">
                    <div class="fooddesc">
                        Kerala Sadhya Thali
                    </div>
                </div>
                <div><img src="img/Bengalithali.png" alt="">
                    <div class="fooddesc">
                        Bengali Thali
                    </div>
                </div>
            </div>


        </div>
    </div>

    <!-- Menu From Database -->
    <style>
        .card {
            margin-left: 65px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            display: inline-block;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .card-body {
            padding: 10px;
        }

        .card-text {
            font-size: 16px;
            text-align: center;
            color: #8d0003;
            
        }
    </style>
    
    <?php
           

           // Fetch the menu items from the database

           $servername="localhost";
           $username="root";
           $password="";
           $database="hotel-booking";
           $conn=mysqli_connect($servername,$username,$password,$database);
           if(!$conn)
           {
           die("Failed to Connect!! ".mysqli_connect_error());
           }

           $query = "SELECT * FROM menu";
           $result = mysqli_query($conn, $query);
           
           echo '<p class="card-text" >Menu from Database</p>' ;

           // Loop through the results and display the menu items
           while ($row = mysqli_fetch_assoc($result)) {
               $image = $row['image'];
               $name = $row['name'];

               echo '<div class="card" style="width: 21rem;">
               <img src=" ./admin-panel/Menu/menu_images/' . $image . '" class="card-img-top" alt=" ' . $name . ' ">
               <div class="card-body">
                 <p class="card-text">' . $name . '</p>
               </div>
             </div>';
           }

           // Close the database connection
           mysqli_close($conn);
           ?>

    <!-- Contact Us  -->
    <div class="contact" id="contact">
        <div id="csum1">We are available 24 X 7</div>
        <div id="cintro">Contact Us</div>
        <div id="csum2">

            Any questions or remarks? Let's start a conversation
        </div>
    </div>
    <div class="contdata" id="c3">
        <div id="form" >
            <form action="./users_db/message.php" method="POST">
                <div id="fname"><label for="name">Name :&nbsp; <input type="text" name="name" id="name" placeholder="Enter Your Name" required></label></div>
                <div id="fmail"><label for="email">Email :&nbsp;&nbsp; <input type="text" name="email" id="email" placeholder="Enter your email" required></label></div>
                <div id="fphone"><label for="phone">Phone : <input type="number" name="phone" id="phone" placeholder="Enter your Phone" required></label></div>
                <div id="fissue"><label for="issue">Issue : &nbsp;&nbsp;&nbsp;<textarea name="mesage" id="issue" placeholder="Type your Issue here"></textarea></label></div>
                <div id="submit" class="btn">
                    <button id="btnSubmit" type="submit" value="submit" onclick="alert('Message Sent Successful !!')" >Submit </button>
                </div>
            </form>
        </div>
        <div class="cdesc">
            
        </div>

    </div>
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="app.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>