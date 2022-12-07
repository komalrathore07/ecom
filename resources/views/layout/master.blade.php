<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <!--fontawesome-->
  <script src="https://kit.fontawesome.com/8feaa5fbd6.js" crossorigin="anonymous"></script>
  <!--css-->
  <link href="/css/body.css" rel="stylesheet">
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

</head>

<body>

  <!-- <div id="preloader"></div> -->

  <div id="preloader"></div>
  
  <div class="navbar fixed-top">
    <div class="container-fluid nav-container">
      <input class="checkbox" type="checkbox" name="" id="" />
      <div class="hamburger-lines">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </div>

      <div class="logo">
        <img src="/images/a2.png" class="img-1 img-fluid" alt="logo">
      </div>
      <div class="brand">
        <a href="#"><i class="fa-brands fa-facebook"></i></a>
        <a href="#"><i class="fa-brands fa-twitter"></i></a>
      </div>
      <div class="menu-items">
        <div class="container">
          <img src="/images/a2.png" class="img-fluid">
        </div>
        <li><a href="#" style="font-size: .8em">Home</a></li>
        <li><a href="/html/aboutus.html" style="font-size: .8em">About Us</a></li>
        <li><a href="/html/Services.html" style="font-size: .8em">Services</a></li>
        <li><a href="#" style="font-size: .8em">Pricing</a></li>
        <li><a href="#" style="font-size: .8em">Contact</a></li>
      </div>
    </div>
  </div>
   
  @yield('content')

  

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
                <li><a href="" class="nav-link mb-2" style="font-size: 1.2em;">About Us</a></li>
                <li><a href="#" class="nav-link mb-2" style="font-size: 1.2em;">Services</a></li>
                <li><a href="#" class="nav-link mb-2" style="font-size: 1.2em;">Pricing</a></li>
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