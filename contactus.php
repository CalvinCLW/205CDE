<html>
<head>
<?php require ('link.php'); ?>
</head>
<body>
<?php require ('header.php'); ?>
    
<!-- Content -->

<div class="contactus">
    
<!-- Banner -->
<img src="img/banner/contactusbanner.jpg" class="banner"> 
<!-- End of Banner -->

<div class="container main-content firstrow">
    <div class="row contactusrow">
        <div class="col-6" data-aos="fade-right">
            <img src="img/contactusform.jpg">
        </div>
        <div class="col-6" data-aos="fade-left">
            <h1>Contact Us</h1>
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
                        $type = $_POST['type'];
                        $message = $_POST['message'];

                        $sql = "INSERT INTO contactus (name, email, type, phone, message) VALUES ('$name', '$email', '$type', '$pnumber', '$message')";

                        if (mysqli_query($conn, $sql)) {
                            
                            echo "<script> alert('Thanks for reaching us, we\'re sorry for any inconvenience caused.');window.location= \"contactus.php\"; </script>";
                        }
                        else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                    }
                    mysqli_close($conn);
                        }
                    
                     else{
                ?>
            <form name="contactForm" action="#" method="post">
                <input type="text" name="name" placeholder="Enter Your Name" required>
                <br>
                <select name="type">
                    <option>Select Type</option>
                    <option value="reservation">Reservation</option>
                    <option value="feedback">Feedback</option>
                    <option value="information">Information</option>
                    <option value="others">Others</option>
                </select>
                <br>
                <input type="email" name="email" placeholder="Enter Your E-mail" required>
                <br>
                <input type="number" name="phone" placeholder="Enter Your Phone Number" required>
                <br>
                <textarea name="message" placeholder="Enter Your Message" required></textarea>
                <br>
                <input type="submit" name="submit" value="Send">
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