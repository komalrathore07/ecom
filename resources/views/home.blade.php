<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reena.uk</title>
  <!--css-->

  <!--csowl-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Bootstrap CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <!--animate css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
    integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--fontawesome-->
  <script src="https://kit.fontawesome.com/8feaa5fbd6.js" crossorigin="anonymous"></script>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Open+Sans&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
html{
  overflow-y: scroll; 
  max-width: 100%;
  overflow-x: hidden;
  scroll-behavior: smooth;
}
body {
  font-family: "Poppins", sans-serif;
}

.navbar {
  width: 100%;
  /* box-shadow: 0 1px 4px rgb(146 161 176 / 15%); */
  box-shadow: inset 0 0 2000px rgb(255, 255, 255);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  position: relative;
}

.nav-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  height: 70px;
}

.navbar .menu-items {
  display: flex;
}

.navbar .nav-container li {
  list-style: none;
}

.navbar .nav-container a {
  text-decoration: none;
  color: #0e2431;
  font-weight: 500;
  font-size: 1.2rem;
  padding: 0.7rem;
}

.navbar .nav-container a:hover {
  font-weight: bolder;
}

.nav-container {
  display: block;
  position: relative;
  height: 60px;
}

.nav-container .checkbox {
  position: absolute;
  display: block;
  height: 32px;
  width: 32px;
  top: 20px;
  left: 20px;
  z-index: 5;
  opacity: 0;
  cursor: pointer;
}

.nav-container .hamburger-lines {
  display: block;
  height: 26px;
  width: 32px;
  position: absolute;
  top: 17px;
  left: 20px;
  z-index: 2;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.nav-container .hamburger-lines .line {
  display: block;
  height: 4px;
  width: 100%;
  border-radius: 10px;
  background: #0e2431;
}

.nav-container .hamburger-lines .line1 {
  transform-origin: 0% 0%;
  transition: transform 0.4s ease-in-out;
}

.nav-container .hamburger-lines .line2 {
  transition: transform 0.2s ease-in-out;
}

.nav-container .hamburger-lines .line3 {
  transform-origin: 0% 100%;
  transition: transform 0.4s ease-in-out;
}

.navbar .menu-items {
  background-image: url(/images/n12.jpg);
  padding-top: 70px;
  /* box-shadow: inset 0 0 2000px rgb(255, 255, 255); */
  height: 100vh;
  width: 50%;
  transform: translate(-150%);
  display: flex;
  /* backdrop-filter: blur(30px); */
  /* -webkit-backdrop-filter: blur(30px); */
  flex-direction: column;
  margin-left: -40px;
  padding-left: 50px;
  transition: transform 0.5s ease-in-out;
  text-align: center;
  z-index: 1;
}

.navbar .menu-items li {
  margin-bottom: 1.2rem;
  font-size: 2rem;
  font-weight: 500;
}

.logo {
  transform: translateX(-50%);
  left: 50%;
  position: absolute;
}
.brand {
  display: flex;
  flex-direction: row;
  transform: translateX(-50%);
  left: 90%;
  font-size: 1em;
  position: absolute;
}
.fa-facebook {
  font-size: 2em;
  margin-left: -18px;
}
.fa-twitter {
  margin-left: -14px;
  font-size: 2em;
}

.nav-container input[type="checkbox"]:checked ~ .menu-items {
  transform: translateX(0);
}

.nav-container input[type="checkbox"]:checked ~ .hamburger-lines .line1 {
  transform: rotate(45deg);
}

.nav-container input[type="checkbox"]:checked ~ .hamburger-lines .line2 {
  transform: scaleY(0);
}

.nav-container input[type="checkbox"]:checked ~ .hamburger-lines .line3 {
  transform: rotate(-45deg);
}

.nav-container input[type="checkbox"]:checked ~ .logo {
  display: none;
}
.nav-container input[type="checkbox"]:checked ~ .brand {
  display: none;
}

h1 {
  color: rgb(0, 0, 0);
  font-family: "Poppins", sans-serif;
}
.glow-on-hover {
  width: 220px;
  height: 50px;
  border: none;
  outline: none;
  color: #fff;
  background: #111;
  cursor: pointer;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  font-family: "Poppins", sans-serif;
}

.glow-on-hover:before {
  content: "";
  background: linear-gradient(
    45deg,
    #ff0000,
    #ff7300,
    #fffb00,
    #48ff00,
    #00ffd5,
    #002bff,
    #7a00ff,
    #ff00c8,
    #ff0000
  );
  position: absolute;
  top: -2px;
  left: -2px;
  background-size: 400%;
  z-index: -1;
  filter: blur(5px);
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  animation: glowing 20s linear infinite;
  opacity: 0;
  font-family: "Poppins", sans-serif;
  transition: opacity 0.3s ease-in-out;
  border-radius: 10px;
}

.glow-on-hover:active {
  color: #000;
}

.glow-on-hover:active:after {
  background: transparent;
}

.glow-on-hover:hover:before {
  opacity: 1;
}

.glow-on-hover:after {
  z-index: -1;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #111;
  left: 0;
  top: 0;
  border-radius: 10px;
}

@keyframes glowing {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}
.box {
  position: relative;
  text-align: center;
  color: white;
  /* height: 120vh; */
}
.centered {
  position: absolute;
  display: block;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: "Poppins", sans-serif;
  font-weight: 1000;
}
.left {
  position: absolute;
  display: block;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: "Poppins", sans-serif;
  font-weight: 1000;
}
.right {
  position: absolute;
  display: block;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: "Poppins", sans-serif;
  font-weight: 1000;
}
.up {
  position: absolute;
  display: block;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: "Poppins", sans-serif;
  font-weight: 1000;
}
.box .glow-on-hover {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
/*text-animation*/
.centered {
  opacity: 0;
  transition: all 2s;
  transform: translateX(-100%);
}
.right {
  opacity: 0;
  transition: all 2s;
  transform: translateX(100%);
}
.left {
  opacity: 0;
  transition: all 2s;
  transform: translateY(100%);
}
.up {
  opacity: 0;
  transition: all 2s;
  transform: translateY(-100%);
}
.glow-on-hover {
  opacity: 0;
  transition: all 2s;
  transform: translateY(-100%);
}
.show {
  opacity: 1;
  filter: blur(0);
  transform: translateX(-50%);
}
/*footer*/
p {
  color: black;
  font-size: 18px;
  font-weight: 400;
  font-family: "Poppins", sans-serif;
}
.col-heading {
  color: black;
  font-size: 24px;
  font-weight: 700;
  font-family: "Poppins", sans-serif;
}
.ul {
  list-style: none;
}
.ul .nav-link {
  color: black;
  font-size: 20px;
  font-weight: 400;
  font-family: "Poppins", sans-serif;
  text-decoration: none;
  list-style: none;
  font-style: normal;
}
.ul .nav-link:hover {
  color: rgb(77, 77, 77);
  font-size: 20px;
  font-weight: 400;
  font-family: "Poppins", sans-serif;
}
.section {
  background-image: url(/images/n10.jpg);
  background-size: cover;
  background-repeat: no-repeat;
  font-family: "Poppins", sans-serif;
 
}

.theme-bg-black {
  background: rgba(255, 255, 255, 0.24);
  box-shadow: 0 8px 32px 0 rgba(19, 19, 19.37);
  backdrop-filter: blur(4px);
  border: 3px solid rgba(255, 255, 255, 0.18);
}
/* .img-5 {
  margin-top: -5em;
} */
#preloader {
  background: rgb(255, 255, 255) url(/images/preloader.gif) no-repeat center
    center;
  background-size: 25%;
  background-size: cover;
  height: 100%;
  width: 100%;
  position: fixed;
  z-index: 100000;
}
.map-responsive {
  overflow: hidden;
  padding-bottom: 30%;
  position: relative;
  height: 0;
}

.map-responsive iframe {
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  position: absolute;
}

  </style>

</head>

<body>

  <!-- <div id="preloader"></div> -->

  <div id="preloader"></div>
  
  <div class="navbar fixed-top mx-auto">
    <div class="container-fluid nav-container">
      <input class="checkbox" type="checkbox" name="" id="" />
      <div class="hamburger-lines">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </div>

      <div class="logo mx-auto">
        <img src="/images/a2.png" class="img img-fluid" alt="logo">
      </div>
      <div class="brand mx-auto">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
      </div>
      <div class="menu-items">
        <div class="container">
          <img src="/images/a2.png" class="img-fluid">
        </div>
        <li><a href="/" style="font-size: .8em">Home</a></li>
        <li><a href="/about" style="font-size: .8em">About Us</a></li>
        <li><a href="/services" style="font-size: .8em">Services</a></li>
        <li><a href="/pricing" style="font-size: .8em">Pricing</a></li>
        <li><a href="#" style="font-size: .8em">Contact</a></li>
      </div>
    </div>
  </div>


  <div class="main-body mx-auto">
    <div class="box">
      <img src="/images/a5.jpg" class="img-1 img-fluid">
      <div class="container-fluid mx-auto">
        <h1 class="up mx-auto mt-2">Welcome To Reena's Spa & Salon.</h1>
        <a href="#"><button class="glow-on-hover mx-auto mt-2" type="button">Login</button></a>
      </div>
    </div>

    <div class="box">
      <img src="/images/n2.jpg" class="img-2 img-fluid">
      <div class="container mx-auto">
        <h1 class="centered mx-auto">Always Make Room for Beauty in Your Life.</h1>
        <a href="#"><button class="glow-on-hover mx-auto" type="button">Book An Experience</button></a>
      </div>
    </div>

    <div class="box">
      <img src="/images/w1.jpg" class="img-3 img-fluid">
      <div class="container mx-auto">
        <h1 class="right mx-auto">Relax, Enjoy and Love Yourself.</h1>
        <a href="/about"><button class="glow-on-hover mx-auto" type="button">About Us</button></a>
      </div>
    </div>


    <div class="box">
      <img src="/images/n4.jpg" class="img-4 img-fluid">
      <div class="container mx-auto">
        <h1 class="left mx-auto mb-5">Rewards</h1>
        <a href="#"><button class="glow-on-hover mx-auto" type="button">Find Out More</button></a>
      </div>
    </div>


    <!--footer-->
    <section class="section">
      <footer class="footer theme-bg-black">
        <div class="container-fluid mx-auto py-1 mt-3">
          <div class="row">
            <div class="col-sm-4">
              <h4 class="col-heading" style="margin-left: 31px;">Opening Hours</h4>
              <ul class="ul" style="text-align: left">
                <p>Monday: Closed</p>
                <p>Tuesday: 10am - 6pm</p>
                <p>Wednesday: 10am - 6pm</p>
                <p>Thursday: 10am - 6pm</p>
                <p>Friday: 10am - 6pm</p>
                <p>Saturday: 10am - 6pm</p>
                <p>Sunday: Closed</p>
              </ul>
            </div>
            <div class="col-sm-3 mx-auto">
              <h4 class="col-heading mt-0" style="margin-left: 31px;">Reena's</h4>
              <ul class="ul" style="text-align: left">
                <li><a href="#" class="nav-link mb-2" style="font-size: 1.2em;">Home</a></li>
                <li><a href="/about" class="nav-link mb-2" style="font-size: 1.2em;">About Us</a></li>
                <li><a href="/services" class="nav-link mb-2" style="font-size: 1.2em;">Services</a></li>
                <li><a href="/pricing" class="nav-link mb-2" style="font-size: 1.2em;">Pricing</a></li>
                <li><a href="#" class="nav-link mb-2" style="font-size: 1.2em;">Contact Us</a></li>
              </ul>
            </div>

            <div class="col-sm-5 mx-auto">
              <h4 class="col-heading mt-1" style="margin-left: 31px;">Contact Us</h4>
              <p style="margin-left: 33px;">Our Salon Is Situated in Teddington, London.</p>
              <p style="margin-left: 33px;">Feel Free to Visit Us, Call or Book an Appointment!</p>
              <div class="container-fluid">
                <div class="row g-3">
                  <div class="col-sm-12" style="margin-left: 20px;">
                    <i class="fa-solid fa-location-pin mx-1"></i>
                    <p style="display:inline; text-align: center;">207 Waldegrave Road,
                      Teddington,
                      TW11 8LX</p>
                  </div>
                  <div class="col-sm-12" style="margin-left:20px;">
                    <i class="fa-solid fa-envelope mx-1"></i>
                    <p style="display:inline">
                      reenavirdee@hotmail.com</p>
                  </div>
                  <div class="col-sm-12 mb-3" style="margin-left:20px;">
                    <i class="fa-solid fa-phone mx-2"></i>
                    <p style="display: inline">07969385877</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid mx-auto text-center mb-5">
            <p style="font-size: 1.5em; font-weight:600">Visit Us Here!</p>
            <div class="map-responsive">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.391926902979!2d-0.34093818481731963!3d51.43259582399166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760c82e87c8f89%3A0x2cbb42bc02982b9c!2sReena&#39;s%20Hair%20and%20Beauty%20Salon!5e0!3m2!1sen!2sin!4v1669811046699!5m2!1sen!2sin"
              width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
              tabindex="0"></iframe>
            </div>
          </div>


          <div class="container-fluid border-top border-dark">
            <div class="row ">
              <div class="col-sm-4 mt-3">
                <p>All Rights Reserved</p>
              </div>
              <div class="col-sm-4 mx-auto">

              </div>
            </div>
          </div>
        </div>
      </footer>
    </section>
  </div>



    <!--jsfile-->
    <script src="/javascript/body.js"></script>
    <!--jquery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
      integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>

</body>

</html>