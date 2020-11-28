<html>
<head>
<?php require ('link.php'); ?>
</head>
<body>
<?php require ('header.php'); ?>
    
<!-- Content -->

<div class="reservation">

<!-- Banner -->
<img src="img/banner/reservationbanner2.jpg" class="banner"> 
<!-- End of Banner -->

<div class="container main-content firstrow">
    <div class="row reservationrow">
        <div class="col-6" data-aos="fade-right">
            <img src="img/reservationleft.jpg">
        </div>
        <div class="col-6" data-aos="fade-left">
            <h1>Reservation</h1>
                <?php
                    if(isset($_POST["submit"])){
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "cafe";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }
                    else {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $pnumber = $_POST['phone'];
                    $date = $_POST['date'];
                    $mySqlDate = date("Y-m-d",strtotime($date));
                    $time = $_POST['time'];
                    $number = $_POST['person'];
                    

                    $sql = "INSERT INTO reservation (name, email, phone, date, time, pax) VALUES ('$name', '$email', '$pnumber', '$mySqlDate', '$time', '$number')";

                    if (mysqli_query($conn, $sql)) {
                            if ($mySqlDate >= "12:00:00") {
                                
                                echo "<script> alert('Thanks for reserving a table $name. You reserved a table for $number on $mySqlDate, $time PM! If you want make any changes for the reservation, you can reach for us at contact us.'); window.location= \"reservation.php\";</script>";
                                
                            }
                        
                            else {
                                echo "<script> alert('Thanks for reserving a table $name. You reserved a table for $number on $mySqlDate, $time AM! If you want make any changes for the reservation, you can reach for us at contact us.'); window.location= \"reservation.php\";</script>";
                                
                            }
                    } 
                        else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                             }
                    }
                    mysqli_close($conn);
                     }
                     else{
                ?>
                    <form name="reservationForm" action="#" method="post">
                        <br>
                        <input type="text" name="name" title="Enter Your Name" placeholder="Enter Your Name" required>
                        <br>
                        <input type="email" name="email" title="Enter Your E-Mail" placeholder="Enter Your E-Mail" required>
                        <br>
                        <input type="number" name="phone" title="Enter Your Phone Number" placeholder="Enter Your Phone Number" required>
                        <br>
                        <input type="date" name="date" placeholder="Enter Reservation Date" data-date-format="YYYY MMMM DD" value="2020" min="2020-12-01" max="2020-12-31"  title="Enter Your Reservation Date" required>
                        <br>
                        <input type="time" name="time" placeholder="Enter Reservation Time" min="10:00" max="24:00" value="10:00" title="Enter Your Reservation Time" required>
                        <br>
                        <input type="number" name="person" Placeholder="Enter Total Pax" min="1" max="8" title="Enter Your Total Number of Person" required>
                        <br>
                        <input type="submit" name="submit" id="button" value="Send">
                    </form>
            <?php } ?>
        </div>
    </div>
</div>
    
</div>

<!-- End of Content-->

<!-- Footer -->
<?php require('footer.php'); ?>
<!-- Javascript -->
<?php require('javascript.php'); ?>
</body>
</html>