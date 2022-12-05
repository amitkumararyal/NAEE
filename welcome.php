<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <!-- Custom Css -->
        <link rel="stylesheet" href="./styles.css">

        <!-- Font Families -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
            integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    
    <style>
        body{ font: 14px sans-serif; text-align: center; }
       * {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 400px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

        }
    </style>
</head>
<body class="w3-sand">
    <h1 class="my-5 w3-pink">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1><br>

    <!-- Navbar Section -->
    <div class="w3-top">
        <div class="w3-row w3-padding w3-black">
            <div class="w3-col s3">
                <a href="#" class="w3-button w3-block">
                    <i class="fas fa-cut"></i>
                </a>
            </div>
            <div class="w3-col s3">
                <a href="#home" class="w3-button w3-b w3-block">Home</a>
            </div>
            <div class="w3-col s3">
                <a href="#hour-section" class="w3-button w3-b w3-block">Opening hours</a>
            </div>
            <div class="w3-col s3">
                <a href="#price-section" class="w3-button w3-b w3-block">Prices</a>
            </div>
        </div>
    </div>


    <!-- Header with image -->
    <header class="header w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-middle w3-center">
            <span   class=" color w3-padding-48 w3-center"  style="font-size:60px; 

            text-transform: capitalize;"><b>The
                barberLAB</b></span>

        </div>
    </header>
    <br>

    <!-- Our Barbers Section -->
    <div class="w3-sand w3-large" id="information">
        <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">OUR BARBERS</span></h5>
        <div class="w3-row-padding w3-padding-large">
            <div class="w3-third w3-container w3-margin-bottom w3-hover-grayscale">
                <div class="w3-container w3-center w3-black">
                    <div style=" height:100%; max-width: 170px; margin: 0 auto; padding: 2rem;">
                        <img src="https://images.unsplash.com/photo-1578176603894-57973e38890f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=580&q=80" class="w3-circle w3-circle" alt="barber"
                            style="width: 100%; height: 100%;">
                    </div>
                    <p><b>Michael</b>(owner)</p>
                </div>
            </div>
            <div class="w3-third w3-container w3-margin-bottom w3-hover-grayscale">
                <div class="w3-container w3-center w3-black">
                    <div class="" style=" height: 100%; max-width: 170px; margin: 0 auto; padding: 2rem;">
                        <img src="https://images.unsplash.com/photo-1597223557154-721c1cecc4b0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZmFjZXxlbnwwfDJ8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="w3-circle" alt="barber" style="width: 100%; height: 100%;">
                    </div>
                    <p><b>Sandra</b></p>
                </div>
            </div>
            <div class="w3-third w3-container w3-margin-bottom w3-hover-grayscale">
                <div class="w3-container w3-center w3-black">
                    <div class="" style=" height: 100%; max-width: 170px; margin: 0 auto; padding: 2rem;">
                        <img src="https://images.unsplash.com/photo-1595152452543-e5fc28ebc2b8?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=580&q=80 class="w3-circle" alt="barber" style="width: 100%; height: 100%;">
                    </div>
                    <p><b>Caleb</b></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Barber Shop Information Section -->
    <h5 class="w3-center w3-padding-48 w3-pink"  id="hour-section"><span class="w3-tag w3-wide"><h1>SHOP INFORMATION</h1></span></h5>
    <div class="w3-center">
        <div class="w3-container w3-padding-48 w3-large section-break w3-sand" id="information">
            <div class="w3-third w3-center w3-container w3-margin-bottom">
                <div class="w3-container w3-black" style="height: 180px;">
                    <p><b>Opening Hour</b></p>
                    <p>Mon-Fri: 8:00am - 7:00pm</p>
                </div>
            </div>
            <div class="w3-third w3-center w3-container w3-margin-bottom">
                <div class="w3-container w3-black" style="height: 180px;">
                    <p><b>Location</b></p>
                    <p>amazonbuilding,<br>kanakapura</p>
                </div>
            </div>
            <div class="w3-third w3-center w3-container">
                <div class=" w3-container w3-black" style=" height: 180px;">
                    <p><b>Contact</b></p>
                    <p>To book an appointment Click below</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action Button -->
    <div class="call-to-action w3-center w3-padding-top-64 w3-pink">
        <a href="huhiu.php" style="font-size:30px;" class="w3-white w3-text-dark w3-btn w3-border">BOOK AN
            APPOINTMENT</a>
            <br>
            <br>
            <br>
            <br>
    </div>
    

    <!-- Pricing Section-->
    <div class="w3-container" id="price-section">
        <div class="w3-content w3-center" style="max-width:700px; font-weight: 600;">
            <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide w3-pink">SERVICE MENU</span></h5>
            <div class="w3-panel w3-black">
                <h4>Haircut - $50 - $60</h4>
            </div>
            <div class="w3-panel w3-black">
                <h4>Beard Trimming - $20 - $25</h4>
            </div>
            <div class="w3-panel w3-black">
                <h4>Hair Trim - $30 - $40</h4>
            </div>
            <div class="w3-panel w3-black">
                <h4>Kid's Cut - $40 - $45</h4>
            </div>
            <div class="w3-panel w3-black">
                <h4>Haircut & Shave - $120 - $150</h4>
            </div>
            <div class="w3-panel w3-black">
                <h4>Buzz Cut - $27- $37</h4>
            </div>
        </div>
    </div>
    </div>

<div class="row">
  <div class="column" style="background-color:black;">
    <h2><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7786.287203751719!2d77.43714197455374!3d12.638582733197078!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae5ba6acfd5b77%3A0xf3fbc18fcba34b1b!2sJain%20Global%20Campus%2C%20Karnataka%20562121!5e0!3m2!1sen!2sin!4v1666028742342!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br> <br></h2>
    
  </div>
  <div class="column" style="background-color:black;">
    <h2><iframe width="400" height="300" src="https://www.youtube.com/embed/_JmlTQ6TDG4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></h2>
    
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

  
   
      <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
    <br>
    <br>
    <br>
</body>

</html>
  