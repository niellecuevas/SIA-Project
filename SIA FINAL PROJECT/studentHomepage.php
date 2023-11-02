<!DOCTYPE html>
<html>
    <head lang="en" dir="ltr">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>BSU_TNEU-Student Conduct Information</title>
        <link rel="icon" href="img/BSULogo.png" sizes="32x32" type="image/png">
        <!--studhome.css -->
        <link rel="stylesheet" href="css/studhome.css">
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <!-- font-awesome -->
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </head>

    <body>
      <!---------------TOP NAVIGATION STARTS----------------->
      <header id="myHeader">
        <div class="navbar" >
          <div class="logo"><a href=""><img src="img/BSULogo.png">BatStateU</a></div>
          <div class="nav-btns">
          <a href="callSlip" id="callslip" class="action-btn" >Call Slip</a>
          <a href="logout" class="action-btn">Logout</a>
          </div>
          <div class="toggle-btn">
            <i class="fa-solid fa-bars"></i>
          </div>
        </div>
        
        <div class="dropdown_menu">
          <li><a href="callSlip" id="callslip" class="action-btn" >Call Slip</a></li>
         <li><a href="logout" class="action-btn">Logout</a></li>
        </div>
      </header>
      <!---------------TOP NAVIGATION END----------------->

      <!------------- STUDENT INFORMATON STARTS ------------------> 
       <div class="container">
        <div class="banner">
          <div class="banner-text">
            <h1>Student Information</h1>
          </div>
          <div class="studInfo" >
          <div class="nameNsrcode">
            <form>
              <label for="name">Name:</label>
              <input type="text" class="info" id="name" name="name" placeholder="Juan De Los Santos"><br><br>
              <label for="srcode" id="adjustSrcode">Sr-Code:</label>
              <input type="text"  class="info" id="srcode" name="srcode" placeholder="21-201290"><br><br>
            </form>
            </div>  
          <div class="courseNdept">
             <form>
            <label for="course">Course:</label>
            <input type="text" class="info" id="course" name="course" placeholder="Information Technology"><br><br>
            <label for="department" id="adjustDept">Department:</label>
            <input type="text" class="info" id="department" name="department" placeholder="CICS"><br><br>
             </form>
          </div>
        </div>
        </div>
       </div>
      <!------------- STUDENT INFORMATION END ------------------> 
                    
      <!------------- ANNOUNCEMENT BANNER SLIDESHOW ------------------>    
      <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="studHomeImg/announcementBanner1.png" style="width:100%">
          
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="studHomeImg/announcementBanner2.png" style="width:100%">
          
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="studHomeImg/announcementBanner3.png" style="width:100%">
          
        </div>
        
        </div>
        <br>
        
        <div style="text-align:center" >
          <span class="dot"></span> 
          <span class="dot"></span> 
          <span class="dot"></span> 
        </div>

        <!--End-->
        <!----------- STUDENT CONDUCT INFORMATION START----------------->
  <div class="openingText">
        <h1 id="titleVio" data-aos="fade-up">STUDENT CONDUCT INFORMATION</h1>
        <h3 id="secondTitle" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h3>
  </div>

<section>
  <div class="offenses-container"   data-aos="fade-right">
  <div class="offense-container" >
  <div class="offense">Minor Offense <p class="num">10</p></div>
  </div>

  <div class="offense-container" id="majorOffense">
    <div class="offense">Major Offense <p class="num">4</p> </div> 
  </div>
  </div>

  <div class="swiper mySwiper"  data-aos="fade-left">
    <div class="swiper-wrapper" >
    <div class="swiper-slide">
    <form>
      <div class="violationInfo">
          <label for="violation" class="lbl">Violation:</label>
          <input type="text" class="conductInfo" id="violation" name="violation" placeholder="Violation Name"><br><br>
          <label for="action" id="adjustSrcode" class="lbl">Action:</label>
          <input type="text" class="conductInfo" id="action" name="action" placeholder="Action Here"><br><br>
          <label for="date" class="lbl">Date:</label>
          <input type="date" class="conductInfo" id="date" name="date" placeholder="mm-dd-yyyy"><br><br>
          <label for="time" class="lbl" id="time">Time:</label>
          <input type="time" class="conductInfo" id="time" name="time" placeholder="00:00:00"><br><br>
          <label for="remarks" class="lbl" id="remarks">Remarks:</label>
          <input type="text" class="conductInfo" id="remarks" name="remarks" placeholder="Remarks here"><br><br>
          <label for="attachment" class="lbl" id="attachment">Attachment:</label>
        <input type="image" src="studHomeImg/violation.jpg" class="conductInfo" alt="violationImage" width="80" height="100">
        </div>
    </form>
    </div>

    <div class="swiper-slide">
      <form>
        <div class="violationInfo">
          <label for="violation" class="lbl">Violation:</label>
          <input type="text" class="conductInfo" id="violation" name="violation" placeholder="Violation Name"><br><br>
          <label for="action" id="adjustSrcode" class="lbl">Action:</label>
          <input type="text" class="conductInfo" id="action" name="action" placeholder="Action Here"><br><br>
          <label for="date" class="lbl">Date:</label>
          <input type="date" class="conductInfo" id="date" name="date" placeholder="mm-dd-yyyy"><br><br>
          <label for="time" class="lbl" id="time">Time:</label>
          <input type="time" class="conductInfo" id="time" name="time" placeholder="00:00:00"><br><br>
          <label for="remarks" class="lbl" id="remarks">Remarks:</label>
          <input type="text" class="conductInfo" id="remarks" name="remarks" placeholder="Remarks here"><br><br>
          <label for="attachment" class="lbl" id="attachment">Attachment:</label>
        <input type="image" src="studHomeImg/violation.jpg" class="conductInfo" alt="violationImage" width="80" height="100">
          </div>
      </form>
      </div>

      <div class="swiper-slide">
        <form>
          <div class="violationInfo">
            <label for="violation" class="lbl">Violation:</label>
            <input type="text" class="conductInfo" id="violation" name="violation" placeholder="Violation Name"><br><br>
            <label for="action" id="adjustSrcode" class="lbl">Action:</label>
            <input type="text" class="conductInfo" id="action" name="action" placeholder="Action Here"><br><br>
            <label for="date" class="lbl">Date:</label>
            <input type="date" class="conductInfo" id="date" name="date" placeholder="mm-dd-yyyy"><br><br>
            <label for="time" class="lbl" id="time">Time:</label>
            <input type="time" class="conductInfo" id="time" name="time" placeholder="00:00:00"><br><br>
            <label for="remarks" class="lbl" id="remarks">Remarks:</label>
            <input type="text" class="conductInfo" id="remarks" name="remarks" placeholder="Remarks here"><br><br>
            <label for="attachment" class="lbl" id="attachment">Attachment:</label>
          <input type="image" src="studHomeImg/violation.jpg" class="conductInfo" alt="violationImage" width="80" height="100">
            </div>
          </form>
        </div>

        <div class="swiper-slide">
          <form>
            <div class="violationInfo">
              <label for="violation" class="lbl">Violation:</label>
              <input type="text" class="conductInfo" id="violation" name="violation" placeholder="Violation Name"><br><br>
              <label for="action" id="adjustSrcode" class="lbl">Action:</label>
              <input type="text" class="conductInfo" id="action" name="action" placeholder="Action Here"><br><br>
              <label for="date" class="lbl">Date:</label>
              <input type="date" class="conductInfo" id="date" name="date" placeholder="mm-dd-yyyy"><br><br>
              <label for="time" class="lbl" id="time">Time:</label>
              <input type="time" class="conductInfo" id="time" name="time" placeholder="00:00:00"><br><br>
              <label for="remarks" class="lbl" id="remarks">Remarks:</label>
              <input type="text" class="conductInfo" id="remarks" name="remarks" placeholder="Remarks here"><br><br>
              <label for="attachment" class="lbl" id="attachment">Attachment:</label>
            <input type="image" src="studHomeImg/violation.jpg" class="conductInfo" alt="violationImage" width="80" height="100">
              </div>
            </form>
          </div>
  </div>
  <div class="swiper-button-next" style="color:#fffbf2;"></div>
  <div class="swiper-button-prev" style="color:#fffbf2;"></div>
  <div class="swiper-pagination" ></div>
  </div>
</section>

<!-----------VIOLATION INFORMATION END----------------->

<!---------------FOOTER STARTS--------------------->
<footer>
  <div class="footer-content">
      <h3>BATSTATEU - LIPA</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo iste corrupti doloribus odio sed!</p>
      <ul class="socials">
          <li><a href="https://www.facebook.com/BatStateUTheNEU" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/BatStateUTheNEU" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
          <li><a href="https://batstate-u.edu.ph" target="_blank"><i class="fa-brands fa-square-google-plus"></i></a></li>
          <li><a href="https://www.youtube.com/@BatStateUTheNEU" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
          <li><a href="https://www.linkedin.com/school/batstateutheneu/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
      </ul>
  </div>
  <div class="footer-bottom">
      <p>copyright &copy;2023 Batangas State University. designed by <span>SIAGTHREE</span></p>
  </div>
</footer>

<!-----------------FOOTER ENDS--------------------->




      <script>
        // ----------- DROPDOWN NAVIGATION JS ------------
        const toggleBtn = document.querySelector('.toggle-btn')
        const toggleBtnIcon = document.querySelector('.toggle-btn i')
        const dropDownMenu = document.querySelector('.dropdown_menu')

        toggleBtn.onclick = function() {
          dropDownMenu.classList.toggle('open')
          const isOpen = dropDownMenu.classList.contains('open')

          toggleBtnIcon.classList = isOpen
          ? 'fa-solid fa-xmark'
          : 'fa-solid fa-bars'
        }

      // ----------- ANNOUNCEMENT BANNER SLIDESHOW JS ------------

        let slideIndex = 0;
        showSlides();

        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 5000); // Change image every 2 seconds
        }

        // ------ STICKY HEADER ----------

        window.onscroll = function() {myFunction()};

        var header = document.getElementById("myHeader");
        var sticky = header.offsetTop;

        function myFunction() {
          if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
          } else {
            header.classList.remove("sticky");
          }
        }
       // ----------- TRANSITION DATA AOS JS ------------
                AOS.init({
                duration : 1200,
              })

      // ----------- SWIPER VIOLATION AREA JS ------------
      var swiper = new Swiper(".mySwiper", {
      cssMode: true,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
      },
      mousewheel: true,
      keyboard: true,
    });
        
      </script>


              
    </body>
</html>