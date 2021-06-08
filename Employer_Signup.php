<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
</head>
<style>


</style>
<body >

	<nav class="navbar  navbar-expand-md navbar-dark bg-dark mb-4">
  	<a class="navbar-brand" href="#">Reclutare</a>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  	</button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Employers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
    </ul>
    
  </div>
</nav>
<div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="Images/reclutare.png" alt="" width="72" height="72">
    <h2>Talents Are Waiting. </h2>
    <h5>Create Your Account.</h5>
  </div>
 <form action="employer_insert.php" method="post"   style="width:500px; margin:auto">
 	
 	
 			<div class="form-group">
 				<label for="company_name">Company Name</label>
 				<input type="text" name="company_name" placeholder="Enter Company Name" required class="form-control">
 			</div>
 			
 	<div class="form-group">
 	<label for="email">Email</label>
 	<input type="email" name="email" required placeholder="Enter email" class="form-control">
 	</div>
 	<div class="form-group">
 	<label for="password">Password</label>
 	<input type="password" name="password" placeholder="Enter password" required class="form-control" >
 	</div>
 	<div class="form-group">
 	<label for="password1" >Repeat Password</label>
 	<input type="password" name="password1" placeholder="Re-enter password" required class="form-control" >
 	</div>
 	<div class="form-group">

  <label for="url">Company Website</label>
  <input type="url" name="url" placeholder="Enter Company URL" required class="form-control">  

  </div> 
 	<div class="form-group">
 	<label for="location" >Location</label>
 	<select name="location"  class="form-control">
 			<option value="Ahmedabad">Ahmedabad</option>
 			<option value="Banglore">Banglore</option>
 			<option value="Chennai">Chennai</option>
 			<option value="Delhi">Delhi</option>
 			<option value="Guragon">Guragon</option>
 			<option value="Hyderabad">Hyderabad</option>
 			<option value="Kolkata">Kolkata</option>
 			<option value="Mumbai">Mumbai</option>
 			<option value="Noida">Noida</option>
 			<option value="Pune">Pune</option>
 			<option value="Ahmednagar">Ahmednagar</option>
 			<option value="Anand">Anand</option>
 			<option value="Anantpur">Anantpur</option>
 			<option value="Ankleshwar">Ankleshwar</option>
 			<option value="Asansol">Asansol</option>
 			<option value="Aurangabad">Aurangabad</option>
 			<option value="Banswara">Banswara</option>
 			<option value="Bankura">Bankura</option>
 			<option value="Barnala">Barnala</option>
 			<option value="Bhatinda">Bhatinda</option>
 			<option value="Bhavnagar">Bhavnagar</option>
 			<option value="Bhiwani">Bhiwani</option>
 			<option value="Bhubaneshwar">Bhubaneshwar</option>
 			<option value="Bijnor">Bijnor</option>
 			<option value="Bulandshahr">Bulandshahr</option>
 			<option value="Burdawan">Burdawan</option>
 			<option value="Chandigarh">Chandigarh</option>
 			<option value="Chandrapur">Chandrapur</option>
 			<option value="Chindawara">Chindawara</option>
 			<option value="Cochin" selected>Cochin</option>
 			<option value="Darbhanga">Darbhanga</option>
 			<option value="Daman">Daman</option>
 			<option value="Darjeeling">Darjeeling</option>
 			<option value="Davangere">Davangere</option>
 			<option value="Dehradun">Dehradun</option>
 			<option value="Dhanbad">Dhanbad</option>
 			<option value="Dhenkanal">Dhenkanal</option>
 			<option value="Dindigul">Dindigul</option>
 			<option value="Gandhidham">Gandhidham</option>
 			<option value="Gandhinagar">Gandhinagar</option>
 			<option value="Ganganagar">Ganganagar</option>
 			<option value="Gangtok">Gangtok</option>
 			<option value="Gharaunda">Gharaunda</option>
 			<option value="Gondia">Gondia</option>
 			<option value="Guna">Guna</option>
 			<option value="Guntakul">Guntakul</option>
 			<option value="Guntur">Guntur</option>
 			<option value="Haldwani">Haldwani</option>
 			<option value="Hassan">Hassan</option>
 			<option value="Himatnagar">Himatnagar</option>
 			<option value="Hoshangabad">Hoshangabad</option>
 			<option value="Indore">Indore</option>
 			<option value="Itanagar">Itanagar</option>
 			<option value="Jalandhar">Jalandhar</option>
 			<option value="Jalgaon">Jalgaon</option>
 			<option value="Jalna">Jalna</option>
 			<option value="Jamnagar">Jamnagar</option>
 			<option value="Jaunpur">Jaunpur</option>
 			<option value="Jhansi">Jhansi</option>
 			<option value="Jind">Jind</option>
 			<option value="Junagadh">Junagadh</option>
 			<option value="Kakinada">Kakinada</option>
 			<option value="Kanchipuram">Kanchipuram</option>
 			<option value="Kandla">Kandla</option>
 			<option value="Kannur">Kannur</option>
 			<option value="Kanpur">Kanpur</option>
 			<option value="Karimnagar">Karimnagar</option>
 			<option value="Karnal">Karnal</option>
 			<option value="Khandwa">Khandwa</option>
 			<option value="Khanna">Khanna</option>
 			<option value="Krishnagiri">Krishnagiri</option>
 			<option value="Kumbhakonam">Kumbhakonam</option>
 			<option value="Kulu">Kulu</option>
 			<option value="Kurnool">Kurnool</option>
 			<option value="Lonavala">Lonavala</option>
 			<option value="Lucknow">Lucknow</option>
 			<option value="Ludhiana">Ludhiana</option>
 			<option value="Machilipatanam">Machilipatanam</option>
 			<option value="Madhubani">Madhubani</option>
 			<option value="Mahbubnagar">Mahbubnagar</option>
 			<option value="Malacca">Malacca</option>
 			<option value="Mandya">Mandya</option>
 			<option value="Mandi">Mandi</option>
 			<option value="Mandsaur">Mandsaur</option>
 			<option value="Mangalore">Mangalore</option>
 			<option value="Modinagar">Modinagar</option>
 			<option value="Mehsana">Mehsana</option>
 			<option value="Nadiad">Nadiad</option>
 			<option value="Nagaon">Nagaon</option>
 			<option value="Nagarcoil">Nagarcoil</option>
 			<option value="Nagpur">Nagpur</option>
 			<option value="Nainital">Nainital</option>
 			<option value="Namakkal">Namakkal</option>
 			<option value="Nalgonda">Nalgonda</option>
 			<option value="Narwana">Narwana</option>
 			<option value="Nashik">Nashik</option>
 			<option value="Nanded">Nanded</option>
 			<option value="Neemuch">Neemuch</option>
 			<option value="Nasik">Nasik</option>
 			<option value="Navsari">Navsari</option>
 			<option value="Neyveli">Neyveli</option>
 			<option value="Nellore">Nellore</option>
 			<option value="Nizamabad">Nizamabad</option>
 			<option value="Ongole">Ongole</option>
 			<option value="Osmanabad">Osmanabad</option>
 			<option value="Palanpur">Palanpur</option>
 			<option value="Panchkula">Panchkula</option>
 			<option value="Panipat">Panipat</option>
 			<option value="Panaji">Panaji</option>
 			<option value="Patan">Patan</option>
 			<option value="Parbhani">Parbhani</option>
 			<option value="Pathanamthitta">Pathanamthitta</option>
 			<option value="Pathankot">Pathankot</option>
 			<option value="Patna">Patna</option>
 			<option value="Pondicherry">Pondicherry</option>
 			<option value="Porbandar">Porbandar</option>
 			<option value="Quilon">Quilon</option>
 			<option value="Rajamundry">Rajamundry</option>
 			<option value="Ranchi">Ranchi</option>
 			<option value="Ratnagiri">Ratnagiri</option>
 			<option value="Sharanpur">Sharanpur</option>
 			<option value="Samana">Samana</option>
 			<option value="Sangli">Sangli</option>
 			<option value="Sangrur">Sangrur</option>
 			<option value="Satna">Satna</option>
 			<option value="Shillong">Shillong</option>
 			<option value="Singrauli">Singrauli</option>
 			<option value="Solan">Solan</option>
 			<option value="Sonipat">Sonipat</option>
 			<option value="Srinagar">Srinagar</option>
 			<option value="Sultanpur">Ahmedabad</option>
 			<option value="Tanuku">Tanuku</option>
 			<option value="Tenali">Tenali</option>
 			<option value="Theni">Theni</option>
 			<option value="Thanjavur">Thanjavur</option>
 			<option value="Tinuskia">Tinuskia</option>
 			<option value="Trivandrum">Trivandrum</option>
 			<option value="Tirunalveli">Tirunalveli</option>
 			<option value="Tuticorin">Tuticorin</option>
 			<option value="Ujjain">Ujjain</option>
 			<option value="Varnasi">Varnasi</option>
 			<option value="Virudhunagar">Virudhunagar</option>
 			<option value="Vishakapatanam">Vishakapatanam</option>
 			<option value="Warangal">Warangal</option>
 			<option value="Wayanad">Wayanad</option>
 			<option value="Yamunanagar">Yamunanagar</option>
 			<option value="Palani">Palani</option>
 			<option value="Other_India">Other India</option>	
 		</select>
 	</div>
 	<div class="form-group">
 	<label for="comp_num">Contact number</label>
 	<input type="text" name="comp_num"placeholder="Enter Contact number" required class="form-control">
 	</div>
 	
 	<div class ="form-check">
 	<input type="checkbox" id="accept-terms" class="form-check-input">
 	<label for="accept-terms" class="form-check-label">I have read &amp; agree to Reclutare's terms &amp; Conditions</label>
    </div>
 	<br>
 	<center><button type= "submit" name="submit" class="btn btn-outline-primary">Create Now</button> </center>
 	<br><br>
</form>
</div>

<footer style="background-color: black;" id="myFooter">
        
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="#">RECLUTARE</a></h2>
                </div>
                <div class="col-sm-2">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        
                    </ul>
                </div>
                <div class="col-sm-2">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        
                    </ul>
                </div>
                
               
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2019 Copyright  </p>
        
    </footer>
	

 
	<script
 	 src="https://code.jquery.com/jquery-1.12.4.js"
 	 integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
  	 crossorigin="anonymous"></script>
	<script src="js/bootstrap.js"></script>

</body>

</html>