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
            <form action="./php/actlogin.php" method="POST" id="loginForm">
                <img src="img/BSULogo.png" id="BSULogo" alt="logo" class="logo">
                <div class="School">
                    <h3 class="red-text"> Welcome Red Spartans!</h3>
                    <p> Please login to your G-suite account</p>
                </div>

                <!-- Form TextBoxes -->
                <input type="text" placeholder="Staff Id or SR Code" name="id" id="idInput" required/>
                <input type="password" placeholder="Password" name="password" required/>

                <!-- Radio Buttons for admin and student -->
                <div class="radio-container">
                    <input type="radio" id="admin" name="role" value="admin" class="radio">
                    <label for="admin">Admin</label>
                    <input type="radio" id="user" name="role" value="student" class="radio" checked>
                    <label for="user">Student</label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="button">Log In</button>
            </form>
        </div>

        <!-- Side Panel -->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <img src="img/OSDlogin.png" id="imagebsu" alt="logo">
                </div>
            </div>
        </div>
    </div>
	<script src="./js/login.js"></script>
</body>
</html>
