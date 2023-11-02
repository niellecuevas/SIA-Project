<!DOCTYPE html>
<html>
<head>
	<!-- Main CSS -->
	<link rel="stylesheet" href="css/loginform.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!-- Page Title -->
	<title>Login Student Management System</title>
</head>
<body>
	<!-- Main Container -->
	<div class="container" id="container">

		<!-- Main Login Form -->
		<div class="form-container log-in-container">
			<form action="#">
				<img src="img/BSULogo.png" id="BSULogo" alt="logo">
                <div class="School">
                <h3 class="red-text"> Welcome Red Spartans!</h3>
                <h6> Please login your G-suite account</h6>
                </div>
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Password" />
				<a href="dashboard.html" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="button">Login</a>
			</form>
		</div>

		<!-- Side Panel  -->
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
                    <img src="img/OSDlogin.png" id= "imagebsu" alt="logo">
				</div>
			</div>
		</div>
	</div>
</body>
</html>