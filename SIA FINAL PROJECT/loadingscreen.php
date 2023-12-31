<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BSU_TNEU-Student Conduct Management System</title>
    <meta name="description" content="Student Conduct Management System">
    <link rel="icon" href="img/BSULogo.png" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="css/custom.css">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- spinskit.css -->
    <link rel="stylesheet" href="css/spinskit.css">
	<!-- font-awesome -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    
    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">
</head>

<body>
    <!-- loading screen -->
    <div class="sk-folding-cube">
        <div class="sk-cube1 sk-cube"></div>
        <div class="sk-cube2 sk-cube"></div>
        <div class="sk-cube4 sk-cube"></div>
        <div class="sk-cube3 sk-cube"></div>
      </div>

<script>
    window.addEventListener('load', function () {
        // When the page is fully loaded, hide the loading screen and navigate to the next page
        document.querySelector('sk-folding-cube').style.display = 'block';
        setTimeout(function() {
            window.location.href = 'index.php'; // Will go to landing page
        }, 2000); // Adjust the delay (in milliseconds) before transitioning to the next page
    });
</script>
</body>

</html>