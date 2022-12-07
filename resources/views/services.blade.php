<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services</title>
   <!--link css-->
   
    <!--fontawesome-->
    <script
      src="https://kit.fontawesome.com/8feaa5fbd6.js"
      crossorigin="anonymous"
    ></script>
    <!-- Bootstrap CSS only -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <!--animate css-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
      integrity="sha512-doJrC/ocU8VGVRx3O9981+2aYUn3fuWVWvqLi1U+tA2MWVzsw+NVKq1PrENF03M+TYBP92PnYUlXFH1ZW0FpLw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!--aos-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Open+Sans&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
:root {
  /* Set neon color */
  --neon-text-color: #f40;
  --neon-border-color: #08f;
}
html{
  max-width: 100%;
  overflow-x: hidden;
  overflow-y: scroll; 
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

  .main-body{
    margin-top: 70px;
  }

  .box {
    position: relative;
    text-align: center;
    /* color: white; */
     /* height: 100vh; */
  }
  /*open*/
  .left {
    position: absolute;
    display: block;
    padding: 3rem 4rem 3rem;
    border: 0.4rem solid #fff;
    border-radius: 2rem;
    top: 48%;
    left: 50%;
    font-size: 10vw;
    transform: translate(-50%, -50%);
    font-family: "Poppins", sans-serif;
    color: #fff;
    text-shadow:
    0 0 5px #fff,
    0 0 10px #fff,
    0 0 20px orange,
    0 0 40px orange,
    0 0 80px  orange,
    0 0 90px orange,
    0 0 100px orange,
    0 0 150px orange;
  }
  
  h1 {
    animation: flicker 3.5s infinite alternate;     
    font-family: "Poppins", sans-serif;
  }
  
  /* Flickering animation */
  @keyframes flicker {
      
    0%, 18%, 22%, 25%, 53%, 57%, 100% {
  
        text-shadow:
        0 0 4px orangered,
        0 0 11px orangered,
        0 0 19px orangered,
        0 0 40px orangered,
        0 0 80px orangered,
        0 0 90px orange,
        0 0 100px orange,
        0 0 150px orange;

        box-shadow:
            0 0 .5rem #fff,
            inset 0 0 .5rem #fff,
            0 0 2rem var(--neon-border-color),
            inset 0 0 2rem var(--neon-border-color),
            0 0 4rem var(--neon-border-color),
            inset 0 0 4rem var(--neon-border-color);        
       
    }
    20%, 24%, 55% {        
        text-shadow: none;
    }    
  }
      
  .heading-2{
    font-weight: 200;
    font-size: 2em;
    font-family: "Poppins", sans-serif;
    text-align: center;
    color: whitesmoke;
  }
  .text-heading{
    text-align: center;
    font-family: "Poppins", sans-serif;
    font-size: 3em;
    color: whitesmoke;
    font-weight: 500;
    text-shadow:
    0 0 5px #fff,
    0 0 10px #fff,
    0 0 20px orange,
    0 0 40px orange,
    0 0 80px  orange,
    0 0 90px orange,
    0 0 100px orange,
    0 0 150px orange;
  }
  
.text{
    text-align: left;
    font-family: "Poppins", sans-serif;
    font-size: 1.5em;
    color: whitesmoke;
    font-weight: 200;
}
.img{
  border-radius: 16px;
    box-shadow: 10px 10px 8px orange;
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
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
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
.img-5 {
  margin-top: -5em;
}
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
  
  <div class="navbar fixed-top">
    <div class="container-fluid nav-container">
      <input class="checkbox" type="checkbox" name="" id="" />
      <div class="hamburger-lines">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
      </div>

      <div class="logo mx-auto">
        <img src="/images/a2.png" class="img-fluid" alt="logo">
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

    <!--mainbody-->
    <div class="main-body mx-auto bg-dark">
      <div class="box">
        <img src="/images/n1.jpg" class="img-1 img-fluid" />
        <h1 class="left mx-auto mt-2">OPEN NOW</h1>
      </div>

      <div class="container mt-3">
        <p class="heading-2" data-aos="fade-up" data-aos-duration="3000">
          Imagine Stepping Into A Beautiful Space Where<br />
          You Indulge In Your Beauty Bliss While Saving Time.<br />
          It’s A Woman’s Dream Come True!
        </p>
      </div>

      <hr style="border: 1px solid orange" />

      <div class="container-fluid mt-5 text-center bg-dark">
        <div class="row g-4">
          <div class="col-sm-7">
            <p
              class="text-heading"
              data-aos="fade-right"
              data-aos-duration="3000"
            >
              CACI ENERGY
            </p>
            <p class="text" data-aos="fade-right" data-aos-duration="3000">
              This facial combines our signature Non-Surgical facial toning
              treatment with ultimate skin rejuvenation. Using breakthrough
              S.P.E.D microcurrent and LED (light therapy) to enhance results,
              this new treatment provides the very best in CACI non-surgical
              facial toning.
            </p>
            <button
              class="glow-on-hover"
              type="button"
              data-aos="fade-right"
              data-aos-duration="3000"
            >
              KNOW MORE
            </button>
          </div>
          <div class="col-sm-5 mb-5 mt-5">
            <img
              src="/images/s1.png"
              alt="caci"
              class="img img-fluid mt-5 mb-5"
              data-aos="fade-left"
              data-aos-duration="3000"
            />
          </div>

          <hr style="border: 1px solid orange" />

          <div class="col-sm-5 mt-5 mb-5">
            <img
              src="/images/s2.jpg"
              alt="massage"
              class="img img-fluid mt-5 mb-5"
              data-aos="fade-right"
              data-aos-duration="3000"
            />
          </div>

          <div class="col-sm-7">
            <p
              class="text-heading"
              data-aos="fade-left"
              data-aos-duration="3000"
            >
              Massage
            </p>
            <p class="text" data-aos="fade-left" data-aos-duration="3000">
              Experience the benefits of massage using individually blended
              essential oils to totally immerse yourself with one of Reena's
              massages. In tranquil surroundings all of your senses will be
              indulged. A totally luxurious and relaxing treatment promotes
              wellbeing of the mind and body to relieve you of all of your
              stresses, worries & aches.
            </p>
            <a href="#"
              ><button
                class="glow-on-hover"
                type="button"
                data-aos="fade-left"
                data-aos-duration="3000"
              >
                KNOW MORE
              </button></a
            >
          </div>

          <hr style="border: 1px solid orange" />

          <div class="col-sm-7">
            <p
              class="text-heading"
              data-aos="fade-right"
              data-aos-duration="3000"
            >
              Dermalogica Treatments
            </p>
            <p class="text" data-aos="fade-right" data-aos-duration="3000">
              These are results targeted facial treatments. By face-mapping your
              skin zone-by-zone, we'll create a treatment that is customised to
              meet your needs.
            </p>

            <a href="#"
              ><button
                class="glow-on-hover"
                type="button"
                data-aos="fade-right"
                data-aos-duration="3000"
              >
                KNOW MORE
              </button></a
            >
          </div>
          <div class="col-sm-5 mt-5">
            <img
              src="/images/s3.jpg"
              alt="facial"
              class="img img-fluid mt-5 mb-5"
              data-aos="fade-left"
              data-aos-duration="3000"
            />
          </div>

          <hr style="border: 1px solid orange" />

          <div class="col-sm-5 mt-5">
            <img
              src="/images/s4.png"
              alt="facial"
              class="img img-fluid mt-5 mb-5"
              data-aos="fade-right"
              data-aos-duration="3000"
            />
          </div>
          <div class="col-sm-7">
            <p
              class="text-heading"
              data-aos="fade-left"
              data-aos-duration="3000"
            >
              Elight IPL+RF / SHR Hair Removal Treatments
            </p>
            <p class="text" data-aos="fade-left" data-aos-duration="3000">
              Elight IPL+RF/SHR permanent hair reduction is a painless and
              highly effective treatment for removing hair from unwanted areas.
              Best of all, this non-invasive and effective approach yields
              permanent hair reduction and long-term hair removal anywhere on
              the body.
            </p>

            <a href="#"
              ><button
                class="glow-on-hover"
                type="button"
                data-aos-duration="3000"
              >
                KNOW MORE
              </button></a
            >
          </div>

          <hr style="border: 1px solid orange" />

          <div class="col-sm-7">
            <p
              class="text-heading"
              data-aos="fade-right"
              data-aos-duration="3000"
            >
              Waxing
            </p>
            <p class="text" data-aos="fade-right" data-aos-duration="3000">
              Waxing is the removal of unwanted, superfluous hair usually found
              under the arm, bikini line, legs & the full body. Wax is applied
              at a comfortable temperature to the hair whilst still in a liquid
              state. It dries almost instantly on the skin contracting around
              the hairs. When removed, it pulls the hair from the root thus
              removing it. Waxing is a very popular and successful treatment
              which our experienced therapists can perform fast and efficiently
              without causing unnecessary pain.
            </p>

            <a href="#"
              ><button
                class="glow-on-hover"
                type="button"
                data-aos="fade-right"
                data-aos-duration="3000"
              >
                KNOW MORE
              </button></a
            >
          </div>
          <div class="col-sm-5 mt-5">
            <img
              src="/images/aboutus2.jpg"
              alt="facial"
              class="img img-fluid mt-5 mb-5"
              data-aos="fade-left"
              data-aos-duration="3000"
            />
          </div>

          <hr style="border: 1px solid orange" />

          <div class="col-sm-5 mt-5">
            <img
              src="/images/s4.jpg"
              alt="facial"
              class="img img-fluid mt-5 mb-5"
              data-aos="fade-right"
              data-aos-duration=" 3000"
            />
          </div>

          <div class="col-sm-7">
            <p
              class="text-heading"
              data-aos="fade-left"
              data-aos-duration="3000"
            >
              Henna
            </p>
            <p class="text" data-aos="fade-left" data-aos-duration="3000">
              Mehndi begins as a henna paste that is expertly applied to the
              surface of the skin. As it dries, it flakes off, revealing the
              orange-hued patterns on the skin below. Throughout the course of
              the wear, mehndi will darken before it begins to fade.
              <br />
              Reena has trained extensively in India to master to art of Mehndi.
            </p>

            <a href="#"
              ><button
                class="glow-on-hover"
                type="button"
                data-aos-duration="3000"
              >
                KNOW MORE
              </button></a
            >
          </div>

          <hr style="border: 1px solid orange" />

          <div class="col-sm-7">
            <p
              class="text-heading"
              data-aos="fade-right"
              data-aos-duration="3000"
            >
              Ear Piercing
            </p>
            <p class="text" data-aos="fade-right" data-aos-duration="3000">
              Quick and painless our ear piercing treatment will allow you to
              wear all types of earrings. In fact we have a selection you can
              choose from.
              <br />
              Reena has trained extensively in India to master to art of Mehndi.
            </p>

            <a href="#"
              ><button
                class="glow-on-hover"
                type="button"
                data-aos="fade-right"
                data-aos-duration="3000"
              >
                KNOW MORE
              </button></a
            >
          </div>
          <div class="col-sm-5 mt-5">
            <img
              src="/images/s5.jpg"
              alt="facial"
              class="img img-fluid mt-5 mb-5"
              data-aos="fade-left"
              data-aos="fade-left"
              data-aos-duration="3000"
            />
          </div>

          <hr style="border: 1px solid orange" />

          <div class="col-sm-5 mt-5">
            <img
              src="/images/s6.jpg"
              alt="facial"
              class="img img-fluid mt-5 mb-5"
              data-aos="fade-right"
              data-aos-duration="3000"
            />
          </div>

          <div class="col-sm-7">
            <p
              class="text-heading"
              data-aos="fade-left"
              data-aos-duration="3000"
            >
              Threading
            </p>
            <p class="text" data-aos="fade-left" data-aos-duration="3000">
              Threading is an ancient art of hair removal, a very delicate
              procedure involving the gentle and precise rolling of a length of
              cotton thread, which is twisted along the hairs that are to be
              removed. The twisting action of the cotton thread traps the hair
              and lifts it out of the follicle.
              <br />
              Reena has trained for many years now to master the art of
              threading to give you an expert finish, which is kinder to the
              skin and gives better definition.
            </p>

            <a href="#"
              ><button
                class="glow-on-hover"
                type="button"
                data-aos-duration="3000"
              >
                KNOW MORE
              </button></a
            >
          </div>

          <hr style="border: 1px solid orange" />

          <div class="col-sm-7">
            <p
              class="text-heading"
              data-aos="fade-right"
              data-aos-duration="3000"
            >
              Tinting
            </p>
            <p class="text" data-aos="fade-right" data-aos-duration="3000">
              By shaping and tinting your eyelashes and brows to suit the
              contours of your face and colour of your hair you can bring out
              the beauty in your eyes and transform your look.
            </p>

            <a href="#"
              ><button
                class="glow-on-hover"
                type="button"
                data-aos="fade-right"
                data-aos-duration="3000"
              >
                KNOW MORE
              </button></a
            >
          </div>
          <div class="col-sm-5 mt-5">
            <img
              src="/images/s7.jpg"
              alt="facial"
              class="img img-fluid mt-5 mb-5"
              data-aos="fade-left"
              data-aos-duration="3000"
            />
          </div>

          <hr style="border: 1px solid orange" />

          <div class="col-sm-5 mt-5">
            <img
              src="/images/s8.jpg"
              alt="facial"
              class="img img-fluid mt-5 mb-5"
              data-aos="fade-right"
              data-aos-duration="3000"
            />
          </div>

          <div class="col-sm-7">
            <p
              class="text-heading"
              data-aos="fade-left"
              data-aos-duration="3000"
            >
              Bridal Services
            </p>
            <p class="text" data-aos="fade-left" data-aos-duration="3000">
              Make Up and Beauty Package, Full consultation with our make up
              artist, where colour choices and skin tones will be discussed
            </p>

            <a href="#"
              ><button
                class="glow-on-hover"
                type="button"
                data-aos="fade-right"
                data-aos-duration="3000"
              >
                KNOW MORE
              </button></a
            >
          </div>

          <hr style="border: 1px solid orange" />

          <div class="col-sm-7">
            <p
              class="text-heading"
              data-aos="fade-right"
              data-aos-duration="3000"
            >
              Hair Services
            </p>
            <p class="text" data-aos="fade-right" data-aos-duration="3000">
              At Reena's, we understand how a great hair cut, style or perfect
              colour can enhance your looks & make you stand out in a crowd with
              that inspiring look.
              <br />

              We are also passionate about hair condition and will provide you
              free consultation in maintaining healthy hair
            </p>

            <a href="#"
              ><button
                class="glow-on-hover"
                type="button"
                data-aos-duration="3000"
              >
                KNOW MORE
              </button></a
            >
          </div>
          <div class="col-sm-5 mt-5">
            <img
              src="/images/n1.jpg"
              alt="facial"
              class="img img-fluid mt-5 mb-5"
              data-aos="fade-left"
              data-aos-duration="3000"
            />
          </div>

          <hr style="border: 1px solid orange" />

          <div class="col-sm-5 mt-5">
            <img
              src="/images/s9.jpg"
              alt="facial"
              class="img img-fluid mt-5 mb-5"
              data-aos="fade-right"
              data-aos-duration=" 3000"
            />
          </div>

          <div class="col-sm-7">
            <p
              class="text-heading"
              data-aos="fade-left"
              data-aos-duration="3000"
            >
              Nail Extensions
            </p>
            <p class="text" data-aos="fade-left" data-aos-duration="3000">
              At Reena's, we understand how a great hair cut, style or perfect
              colour can enhance your looks & make you stand out in a crowd with
              that inspiring look.
            </p>

            <a href="#"
              ><button
                class="glow-on-hover"
                type="button"
                data-aos-duration="3000"
              >
                KNOW MORE
              </button></a
            >
          </div>

          <hr style="border: 1px solid orange" />

          <div class="col-sm-7">
            <p
              class="text-heading"
              data-aos="fade-right"
              data-aos-duration="3000"
            >
              Electrolysis
            </p>
            <p class="text" data-aos="fade-right" data-aos-duration="3000">
              Electrolysis is a popular, highly skilled, progressive treatment
              method for permanent hair removal, however to achieve this it can
              take several sessions. We use disposable materials and a full
              range of professional hygiene products to ensure your comfort and
              safety.
            </p>

            <a href="#"
              ><button
                class="glow-on-hover"
                type="button"
                data-aos="fade-right"
                data-aos-duration="3000"
              >
                KNOW MORE
              </button></a
            >
          </div>
          <div class="col-sm-5 mt-5">
            <img
              src="/images/s10.jpg"
              alt="facial"
              class="img img-fluid mt-5 mb-5"
              data-aos="fade-left"
              data-aos-duration="3000"
            />
          </div>
        </div>
      </div>
    </div>
    
    <!--footer-->
    <section class="section">
      <footer class="footer theme-bg-black">
        <div class="container-fluid mx-auto py-1 mt-3">
          <div class="row">
            <div class="col-sm-4">
              <h4 class="col-heading" style="margin-left: 31px">
                Opening Hours
              </h4>
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
              <h4 class="col-heading mt-0" style="margin-left: 31px">
                Reena's
              </h4>
              <ul class="ul" style="text-align: left">
                <li>
                  <a href="/" class="nav-link mb-2" style="font-size: 1.2em"
                    >Home</a
                  >
                </li>
                <li>
                  <a href="about" class="nav-link mb-2" style="font-size: 1.2em"
                    >About Us</a
                  >
                </li>
                <li>
                  <a href="/services" class="nav-link mb-2" style="font-size: 1.2em"
                    >Services</a
                  >
                </li>
                <li>
                  <a href="/pricing" class="nav-link mb-2" style="font-size: 1.2em"
                    >Pricing</a
                  >
                </li>
                <li>
                  <a href="#" class="nav-link mb-2" style="font-size: 1.2em"
                    >Contact Us</a
                  >
                </li>
              </ul>
            </div>

            <div class="col-sm-5 mx-auto">
              <h4 class="col-heading mt-1" style="margin-left: 31px">
                Contact Us
              </h4>
              <p style="margin-left: 33px">
                Our Salon Is Situated in Teddington, London.
              </p>
              <p style="margin-left: 33px">
                Feel Free to Visit Us, Call or Book an Appointment!
              </p>
              <div class="container-fluid">
                <div class="row g-3">
                  <div class="col-sm-12" style="margin-left: 20px">
                    <i class="fa-solid fa-location-pin mx-1"></i>
                    <p style="display: inline; text-align: center">
                      207 Waldegrave Road, Teddington, TW11 8LX
                    </p>
                  </div>
                  <div class="col-sm-12" style="margin-left: 20px">
                    <i class="fa-solid fa-envelope mx-1"></i>
                    <p style="display: inline">reenavirdee@hotmail.com</p>
                  </div>
                  <div class="col-sm-12 mb-3" style="margin-left: 20px">
                    <i class="fa-solid fa-phone mx-2"></i>
                    <p style="display: inline">07969385877</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid mx-auto text-center mb-5">
            <p style="font-size: 1.5em; font-weight: 600">Visit Us Here!</p>
            <div class="map-responsive">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2487.391926902979!2d-0.34093818481731963!3d51.43259582399166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760c82e87c8f89%3A0x2cbb42bc02982b9c!2sReena&#39;s%20Hair%20and%20Beauty%20Salon!5e0!3m2!1sen!2sin!4v1669811046699!5m2!1sen!2sin"
                width="600"
                height="450"
                frameborder="0"
                style="border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe>
            </div>
          </div>

          <div class="container-fluid border-top border-dark">
            <div class="row">
              <div class="col-sm-4 mt-3">
                <p>All Rights Reserved</p>
              </div>
              <div class="col-sm-4 mx-auto"></div>
            </div>
          </div>
        </div>
      </footer>
    </section>

       <!-- JavaScript Bundle with Popper -->
       <script 
       src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
       integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
       crossorigin="anonymous"
     ></script>
    <!--jquery-->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
      integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <!--javascript-->
    <script src="/javascript/body.js"></script>
    <!--js-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!--js-->
    <script>
      AOS.init();
    </script>
  </body>
</html>