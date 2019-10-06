<?php

$username="root";
$database="s_cubedb";
$servername="localhost";
$password="";

$conn = mysqli_connect($servername, $username, $password, $database);



if(isset($_POST['submit']))
{

 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $nationality = $_POST['nationality'];
 $tour = $_POST['tour'];
 $adults = $_POST['adults'];
 $child = $_POST['child'];
 $datefrom = $_POST['datefrom'];
 $dateto = $_POST['dateto'];
 $passport = $_POST['passport'];
 $stay = $_POST['stay'];
 $days = $_POST['days'];
 $remark = $_POST['remark'];


 $sql = "INSERT INTO `s_cubedb`.`booking` (`name`, `phone`, `email`, `address`, `nationality`, `tour`, `adults`, `child`, `datefrom`, `dateto`, `passport`, `stay`, `days`, `remark`) VALUES ('".$name."','".$phone."','".$email."','".$address."','".$nationality."','".$tour."','".$adults."','".$child."','".$datefrom."','".$dateto."','".$passport."','".$stay."','".$days."' ,'".$remark."')";
$retval = mysqli_query( $conn, $sql );

}
?>


<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>S_cube tours & travels</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<!-- navbar -->

	<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <ul class="navbar-nav">
  	<a class="navbar-brand" href="#">
    <img src="" alt="Logo" style="width:40px;">
  </a>
    <li class="nav-item">
      <a class="nav-link" href="index.html">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="services.html">Services</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="packages.html">Packages</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="aboutus.html">About Us</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="contactus.php">Contact us</a>
    </li>
  </ul>
	</nav>
  <!-- nav ends -->

  		<div class="form_success">
			<p>
			Form has been sent successfully<br>we will back to you shortly.<br>
			<a href="index.html" style="text-decoration:none; color:red;">Back to Home</a>
			</p>
		</div>



  <!--------------------------------------------footer----------------------------------------------------->
				
		<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
    <!-- Footer -->
        <footer class="pt-5 pb-4 bg-light top-marg" id="contact">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                <h5 class="mb-4 font-weight-bold">ABOUT US</h5>
                <p class="mb-4">S_Cube tours Pvt. Ltd is a leading provider of travel related services and offer tour packages.</p>
                <ul class="f-address">
                  <li>
                    <div class="row">
                      <div class="col-1"><i class="fas fa-map-marker"></i></div>
                      <div class="col-10">
                        <h6 class="font-weight-bold mb-0">Address:</h6>
                        <p>Andheri west Mumbai 400102 maharashtra</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-1"><i class="far fa-envelope"></i></div>
                      <div class="col-10">
                        <h6 class="font-weight-bold mb-0">Have any questions?</h6>
                        <p><a href="#">Support@S_cube.com</a></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="row">
                      <div class="col-1"><i class="fas fa-phone-volume"></i></div>
                      <div class="col-10">
                        <h6 class="font-weight-bold mb-0"></h6>
                        <p><a href="#">+91-9768011041</a></p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
                <h5 class="mb-4 font-weight-bold"> &nbsp &nbsp &nbsp  &nbsp CONNECT WITH US</h5>
                <ul class="social-pet mt-4">
                  <li><a href="https://www.facebook.com/" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
                  <li><a href="https://www.twitter.com" title="twitter"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="https://www.aboutme.google.com" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                  <li><a href="https://www.instagram.com" title="instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
        <!-- Copyright -->
        <section class="copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-12 ">
                <div class="text-center text-white">
                  &copy; 2019 S_cube All Rights Reserved.
                </div>
              </div>
            </div>
          </div>
        </section>
    <!-- Footer -->







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>