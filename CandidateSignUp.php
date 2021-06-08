<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">

     
</head>
<style>

.errorHeader{
  font-weight: lighter;
  color:red;
  display:  none;
}
.fa-user{
  color:red;
}


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
    <h2>Your Dream Job is Waiting. </h2>
    <h5>Create Your Account.</h5>
  </div>
  
 <form id="candidate_signup_form" name="candidate_signup_form" action="candidate_insert.php" method="post" style="width:500px; margin:auto">
 	
 	<div class="row">
 		<div class="col">	
 			<div class="form-group  has-feedback">
 				<label for="first_name">First Name</label>
 				<input type="text" name="firstNameInput" id="firstNameInput" placeholder="Enter First Name" aria-describedby="firstNameInputStatus" class="form-control " onblur="firstNameValidate()">
        
        <span id="firstNameInputStatus" class="errorHeader">Invalid Name value.</span>
 			</div>
 		</div>
 		<div class="col">	
 			<div class="form-group has-feedback">
 				<label for="last_name" >Last Name</label>
 				<input type="text" name="last_name" placeholder="Enter Last Name" id="lastNameInput" class="form-control" aria-describedby="lastNameInputStatus" onblur="lastNameValidate()">
        
        <span id="lastNameInputStatus" class="errorHeader">Invalid Name value.</span>
 			</div>
 		</div>
 	</div>		
 	<div class="form-group has-feedback">
 	<label for="email">Email</label>
 	<input type="email" name="email" id="emailInput" placeholder="Enter email" class="form-control" aria-describedby="emailInputStatus" onblur="emailValidate()" >
  <span id="emailInputStatus" class="errorHeader">Invalid Email Id.</span>
 	</div>
 	<div class="form-group has-feedback"  >
 	<label for="password">Password</label>
 	<input type="password" name="password" id="passwordInput" placeholder="Enter password"  class="form-control" aria-describedby="passwordInputStatus" onblur="passwordValidate()" >
  <span id="passwordInputStatus" class="errorHeader">Password must contain min 8 characters long.</span>
 	</div>
 	<div class="form-group has-feedback" >
 	<label for="password1" >Repeat Password</label>
 	<input type="password" name="password1" id="passwordconfirmInput" aria-describedby="confirmpasswordInputStatus" placeholder="Re-enter password"  class="form-control" onblur="confirmPassword()" >
  <span id="confirmpasswordInputStatus" class="errorHeader">Password does not match.</span>
 	</div>
 	<div class="form-group has-feedback" >
 	<label for="gender"> Gender </label>
 	<select name="gender" class="form-control" id="genderInput" aria-describedby="genderInputStatus" onclick="maxDate()" onblur="genderValidation()">
  <option value="select_gender">-Select gender-</option>
 	<option value="male">Male</option>
 	<option value="female">Female</option>
 	<option value="others">Others</option>
 	</select>
  <span id="genderInputStatus" class="errorHeader">Give your gender.</span>
 	</div>
 	<div class="form-group has-feedback" >
 	<label for="dob" >DOB</label>
 	<input type="date" name="dob" placeholder="DOB"  id="dobInput" class="form-control" aria-describedby="dobInputStatus" onblur="dobValidate()" >
  <span id="dobInputStatus" class="errorHeader">Give your date of birth.</span>
  </div>

 	<div class="form-group has-feedback" >
 	<label for="location" >Location</label>
 	<select name="location" id="locationInput"  class="form-control" aria-describedby="locationInputStatus" onblur="locationValidate()">
      <option value="Select_location" selected>-Select your loaction-</option>
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
 			<option value="Cochin">Cochin</option>
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
    <span id="locationInputStatus" class="errorHeader">Give your location.</span>
 	</div>
 	<div class="form-group has-feedback">
 	<label for="mob_num">Mobile number</label>
 	<input type="text" id="mobInput" name="mob_num"placeholder="Enter mobile number." aria-describedby="mobInputStatus"  class="form-control" onblur="mobValidate()">
  
  <span id="mobInputStatus" class="errorHeader">Give your mobile number.</span>
 	</div>
 	
 	<div class="form-group has-feedback" >
 	<label for "upload">Resume</label>
 	<input type="file" name="upload" aria-describedby="resumeInputStatus" id="resumeInput" accept="application/pdf,application/vnd.ms-excel class="form-control" onblur="resumeValidate()">
  <span id="resumeInputStatus" class="errorHeader">Resume please.</span>
 	</div>

 	<div class ="form-check has-feedback">
 	<input type="checkbox" id="termsInput" aria-describedby="termsInputStatus" class="form-check-input">
 	<label for="acceptTerms" class="form-check-label">I have read &amp; agree to Reclutare's terms &amp; Conditions</label>
  <span id="termsInputStatus" class="errorHeader">Accept to our terms.</span>
    </div>
 	<br>
 	<center><button type= "submit" name="submit" class="btn btn-outline-primary" >Create Now</button> </center>
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
  <script src="validation.js"></script>

</body>

</html>