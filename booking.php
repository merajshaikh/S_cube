<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>S_cube tours & travels</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  <style type="text/css">    
    body {
        color: #566787;
        background: #f5f5f5;
        font-family: "Open Sans", sans-serif;
    }
  </style>
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
    <li class="nav-item">
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
<h2>ONLINE BOOKING FORM</h2><br><br>
					<form action="book.php" method="post" >
					<table>

<div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 m-auto">
            <div class="contact-form">
              <h1>Contact Us</h1>
              <p class="hint-text">We'd love to hear from you, please drop us a line if you've any query.</p>
              <form action="feedback.php" method="post">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="inputFirstName">Full Name</label>
                      <input type="text" name="name" class="form-control" id="inputFirstName" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="inputLastName">Phone no.</label>
                      <input type="tel" name="phone" class="form-control" id="inputPhoneNo" required>
                    </div>
                  </div>
                </div>            
                <div class="form-group">
                  <label for="inputEmail">Email Address</label>
                  <input type="email" name="email" class="form-control" id="inputEmail" required>
                </div>
                <div class="form-group">
                  <label for="inputMessage">Message</label>
                  <textarea class="form-control" name="message" id="inputMessage" rows="5" required></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
              </form>
            </div>
          </div>
        </div>
      </div>

	<!-- <div class="booking_form"><br>
					<h2>ONLINE BOOKING FORM</h2><br><br>
					<form action="book.php" method="post" >
					<table>
					
					<tr><td colspan="2"><h3>Select Tour</h3></td><br>
					</tr>
					
					<tr><td colspan="2" align="center"><select name="tour" required>
							<option>Select</option>
							<option value="Goa">Goa</option>
							<option value="Golden_Triangle">Golden Triangle</option>
							<option value="Kashmir">Kashmir</option>
							<option value="Europe">Europe</option>
							<option value="Dubai">Dubai</option>
							<option value="Singapore">Singapore</option>
							</select> *</td>
					</tr>
					
					<tr><td colspan="2"><h3>Personal info.</h3></td>
					</tr>
					
					
					<tr>
					<td>Name</td>
					<td><input type="text" name="name" required placeholder="Full Name" > *</td>
					</tr>
					
					<tr>
					<td>Address</td>
					<td><input type="text" name="address" required placeholder="Full address" ></td>
					</tr>
					
					<tr>
					<td>Mobile Number</td>
					<td> <input type="tel" name="phone" placeholder="10 digit phone number"  pattern="^\d{10}$"> *</td>
					</tr>
					
					<tr>
					<td>Email address</td>
					<td> <input type="email" name="email" required placeholder="abc@company.com"> *</td>
					</tr>
					
					<tr>
					<td>Nationality<br><br></td>
					<td><input type="text" name="nationality" required  > *<br><br></td>
					</tr>
					
					<tr>
					<td colspan="2"><h3>Total persons</h3></td>
					</tr>
					
					<tr>
					<td>Adults<br>
							<select name="adults" required >
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10 & above</option>
						</select> *
						</td>
						<td>Childs<br>
							<select name="child" required>
							<option>Select</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10 & above</option>
						</select>
						</td>
					</tr>
					
					<tr>
						<td colspan="2"><br><h3>Tentative Tours Dates</h3></td>
					</tr>
						
					<tr>	
						<td>From<br>
						<input type="date" id="Date1" name="datefrom"> *
						</td>
						
						<td>To<br>
						<input type="date" id="Date2" name="dateto"> *
						</td>

					</tr>
					
					
					<tr><td colspan="2"><br><h3>Other info.</h3></td>
					</tr>
					<tr>
						<td><br>Passport</td>
						<td><br><select name="passport" required>
							<option>Select</option>
							<option value="Yes">Yes</option>
							<option value="No">No</option>
							</select> *				
						</td>
					</tr>
					
					<tr>
						<td><br>Stay Type</td>
						<td><br><select name="stay" required>
							<option>Select</option>
							<option value="Standard">Standard</option>
							<option value="Delux">Delux</option>
							<option value="Premium">Premium</option>
							</select> *					
						</td>
					</tr>
					
					
					<tr>
					<td>Number of days</td>
						<td>
							<select name="days" required>
							<option>Select</option>*
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10 & above</option>
						</select>*
						</td>
					</tr>
					
					<tr><td>
						
					</td>
					</tr>
					
					<tr>
							<td>Remark</td>
							<td> <textarea name="remark" rows="3" cols="20"  style="height: 60px; width:400px;"></textarea></td>
							</tr>
					
					<tr>
					<td colspan="2"><br> <button type="submit" value="submit" name="submit" style="width:100px; height:25px; margin-left:40%;">Submit</td>
					</tr>
					</button>
					
					</table>
					</form>
				
				</div> -->

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