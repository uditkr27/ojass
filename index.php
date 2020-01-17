<?php
  $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iphone");
  $android= strpos($_SERVER['HTTP_USER_AGENT'],"Android");
  $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
  $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
  $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

  if($iphone || $android || $palmpre || $ipod || $berry == true)
  {
    echo "<script>window.location='http://m.ojass.in'</script>";
  }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>OJASS'20 | NIT JSR</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <!-- <link href="img/favicon.png" rel="icon"> -->

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" href="lib/flipclock/flipclock.css">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<aside style="text-align:center;display:none;">
  <h1>Please Resize.</h1>
</aside>

<style>
#video {
    width: 100vw;
    height: 100%;
    margin-top:-70px;

    /* object-fit: cover; */
    /* position: fixed; */
    left: 0px;
    top: 0px;
    z-index: 2;
}



.our-dir{
      border: 2px solid #1E90FF;
      border-radius: 10px;
      text-align: center;
      margin: 10px;
      z-index: 1;
      position: relative;
  }

  .our-dir:before,
  .our-dir:after{
      content: "";
      width: 100%;
      height: 104%;
      background: #1E90FF;
      position: absolute;
      top: 50%;
      left: 0;
      z-index: -1;
      transform: translateY(-50%) scaleX(0.3);
      transition: all 0.3s ease 0s;
  }

  .our-dir:after{
      width: 106%;
      left: 50%;
      transform: translate(-50%, -50%) scaleY(0.25);
  }

  .our-dir:hover:before{ transform: translateY(-50%) scaleX(0.7); }

  .our-dir:hover:after{ transform: translate(-50%, -50%) scaleY(0.7); }

  .our-dir img{
      width: 100%;
      height: auto;
      border-radius: 10px;
      transition: all 0.3s ease 0s;
  }

  .our-dir .dir-content{
      width: 93%;
      padding: 25px 0 10px;
      background: #1E90FF;
      position: absolute;
      bottom: 50px;
      left: 50%;
      opacity: 0;
      -webkit-clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%);
      clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%);
      transform: translateX(-50%);
      transition: all 0.3s cubic-bezier(0.5, 0.2,0.1,0.9);
  }

  .our-dir:hover .dir-content{
      bottom: 10px;
      opacity: 1;
  }

  .our-dir .title{
      font-size: 25px;
      font-weight: 600;
      color: #fff;
      letter-spacing: 1px;
      text-transform: capitalize;
      margin: 0;
  }

  .our-dir .post{
      display: block;
      font-size: 16px;
      color: #fff;
      text-transform: uppercase;
      margin-bottom: 10px;
  }

  .our-dir .social{
      padding: 0;
      margin: 0;
      list-style: none;
  }

  .our-dir .social li{
      display: inline-block;
      margin: 0 5px;
  }

  .our-dir .social li a{
      display: block;
      width: 35px;
      height: 35px;
      line-height: 35px;
      border-radius: 50%;
      background: #fff;
      font-size: 20px;
      color: #1E90FF;
      transition: all 0.3s ease 0s;
  }

  .our-dir .social li a:hover{
      background: linear-gradient(to bottom,#1E90FF, darkred);
      box-shadow: 0 0 0 5px rgba(255,255,255,0.3);
      color: #fff;
  }

  @media only screen and (max-width: 990px){
      .our-dir{ margin-bottom: 30px; }
  }
</style>


<body>
  <!-- Uncomment below i you want to use a preloader -->
  <div id="preloader">
    <!-- <div id="loader-wrapper">
    <div id="loading-center-absolute">
        <div class="object" id="object_four"></div>
        <div class="object" id="object_three"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_one"></div>
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>
   -->
    <div style="text-align:center;">
      <br><br><br>
      <!-- <h1 style="text-align:center;">
        Loading ...
      </h1> -->
      <br><br><br><br>
    </div>

    <div style="display:inline-block;">
      <img src="./img/preloader2.gif">
    </div>
  </div>


  <!--==========================
  Header
  ============================-->
  <header id="header">


    <div class="container-fluid" style="color:#fff;">

      <!-- <div class="logo float-left ml-4">
        Uncomment below if you prefer to use an image logo
        <h1 class="text-light"><a href="./index.php" class="scrollto"><span>OJASS</span></a></h1>
        <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a>
      </div> -->
      <div class=" float-left ml-4">
        <a href="" class="scrollto"><img src="img/logo-black-2.png" alt="" class="" height="70px" style="margin-top:-15px;"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Events</a></li>

          <li><a href="#why-us">Celebrities</a></li>
          <li><a href="#portfolio">Guest Lectures</a></li>
          <li><a href="#portfolio2">Workshops</a></li>
          <li><a href="#team">Team</a></li>

          <li><a href="#clients">Sponsors</a></li>
          <li><a href="#faq">FAQs</a></li>
          <li><a href="#footer">Contact Us</a></li>
          <!-- <li class="float-right notifications"><button onclick="notif()" style="background:transparent;border:none;"><i
                class="fa fa-bell-o fa-2x" aria-hidden="true"></i></button>
          </!-->
        </ul>

      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Notification Section
  ============================-->


  <div class="notifiation-panel" id="NotifPanel"
    style="background:aqua;right:0!important;display:block;height:500px; margin-top:70px; position:fixed;z-index:5;">

  </div>
  <!-- Notifications -->


  <!--==========================
    Social Media Side bar
  ============================-->

  <div class="icon-bar">
    <div class="social-btns">
      <a class="btn facebook" target="_blank" href="https://www.facebook.com/Ojassnitjamshedpur"><i class="fa fa-facebook"></i></a>
      <a class="btn twitter" target="_blank" href="https://twitter.com/ojass_nitjsr"><i class="fa fa-twitter"></i></a>
      <a class="btn instagram" target="_blank" href="https://www.instagram.com/ojass_techfest"><i class="fa fa-instagram"></i></a>
    </div>
  </div>

  <!--==========================
    Intro Section
  ============================-->



  <section id="intro" class="parallax clearfix" style="margin-bottom:7%;">
    <div class="container-fluid  h-100">
      <div class="row justify-content-center align-self-center fullscreen-bg" style="text-align:center;">
        <!-- <div class="col-md-6 intro-info order-md-first order-last" style="margin: 2% 0 0 0;">
          <img src="./img/small_black.png" width="280px" alt="theme logo">
          <h1>OJASS'20</h1>
          <h3><span>INDIC ERUDATION</span></h3>

        </div>

        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="img/intro-img.svg" alt="" class="img-fluid" style="margin-top:60px;">
        </div> -->

        <!-- <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
          <img src="img/logo.png" alt="" srcset="" width="" style="width:70vw;margin-top:-5%;">
        </div> -->


        <video id="video"  playsinline loop muted preload="auto" class="fullscreen-bg__video">
        <source src="img/Teaser.mp4" type="video/mp4">
    </video>
    <div style="background:#fff;width:70px;top: 15vh;
          right: 10px">
    <a id="mute" style="cursor: pointer;
          height: 50px;
          width: 50px;
          position: absolute;
          top: 15vh;
          right: 10px;
          background-size: cover;z-index:10;
          background-image:url(img/mute.svg);padding:15px;
          "
          onClick="toggleSound()" >
       

      </a>
     </div> 
   
      </div>




<!-- 
      <div class="row justify-content-center align-self-center" style="margin: 2% 0;margin-top:-3%;">
        <div class="col-md-2"></div>
        <div class="col-md-8" sytle="text-align:center;align-items:center;">

          <div class="clock" style=""></div>
          <div class="message"></div>
        </div>
        <div class="col-md-2"></div>
      </div> -->
    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about" class="parallax">

      <div class="">
        <div class="row">
          <!-- <div class="col-lg-1 col-md-1">
        </div> -->

          <div class="col-lg-4 col-md-5" style="margin-left:2%;">
            <div class="about-img">
            <video playsinline controls loop preload="auto" width="100%">
              <source src="img/theme.mp4" type="video/mp4">
            </video>
                <!-- <img src="img/rellax/SVG/Science-512.png" alt=""> -->
                <!-- <video width="100%" playsinline controls loop>
                <source src="img/Teaser.mp4" type="video/mp4">

                Your browser does not support HTML5 video.
              </video> -->
            </div>
          </div>

          <div class="col-lg-6 col-md-5">
            <div class="about-content">
              <h2>ABOUT US</h2>
              <h3 class=" wow slideInRight"><span style="font-size: 25px;">O</span>jass is the Annual Techno-Management
                fest of NIT Jamshedpur.</h3>
              <p class="wow fadeIn" data-wow-delay="1s" style="text-align: justify;width:100%;"> Started in the year
                2004, Ojass assembles a wide range of events comprising every genre of engineering, management and even
                film-making with the aim to foster and boost cogent engineering practices in the nation and stimulate
                the future generation to dream big. Certified Workshops in diversed fields are conducted every year
                before the fest to help students understand the different technology trends in the market. A three-day
                spectacle, Ojass also organizes many motivating guest lectures under the event cluster "Guru Gyan".
                Since its inception, Ojass has been receiving immense participation from the student community from all
                over India with the 2019 edition accounting for over 4000 participants. The prize money for this edition
                was ₹18 Lac. OJASS 20 is slated to kick-off from 28th February 2020 and the grandeur will prevail for
                the
                next two days. Save these dates, for we are all set to make it Bigger and Better, than ever!</p>

            </div>
          </div>
          <div class="col-lg-1 col-md-2">
            <img src="./img/rellax/SVG/drone.svg" alt="" srcset="" width="120px" class="rellax">
          </div>
        </div>



      </div>

    </section><!-- #about -->


    <!--==========================
      Services Section  ~~~Event Section
    ============================-->
    <section id="services" class="section-bg parallax">
      <div class="container">

        <header class="section-header">
          <h3>EVENTS</h3>
        </header>
        <div class="container descriptions">

          <p>Productivity is never an accident. It is always the result of a commitment to excellence, intelligent
            planning, and focused effort." We at OJASS- NIT Jamshedpur's Technomanagement fest, bring to you a plethora
            of events. An opportunity to showcase your skills at a large scale. Compete with the best and brightest of
            minds, in more than 80 events, ranging from testing your skills in building a startup to a treasure hunt. We
            have everything in store for you.</p>
        </div>

        <div class="row">

          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;">
              <a href="./Events/EventDetails.php?branch=Deus-X-Machina" target="_blank">
              <img src = "./img/eventsIcons/deus_x_machina.svg" height="140px" style="margin-left:-30px; margin-top:-40px;">
              </a>
              </div>
              <h4 class="title">
              <a href="./Events/EventDetails.php?branch=Deus-X-Machina" target="_blank">Deus-X-Machina</a></h4>
              <!-- <p class="description"> -->
                <!-- <small class="description">
                  Production & Industrial Engineering
                </small> -->
              <!-- </p> -->
              <!-- <div class="description">
                  Production & Industrial Engineering
              </div> -->
            </div>
          </div>



          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e6fdfc;">
              <a href="./Events/EventDetails.php?branch=Arthashastra" target="_blank">
              <img src = "./img/eventsIcons/arthashastra.svg" height="140px" style="margin-left:-30px; margin-top:-40px;">
              </a>
              </div>
              <h4 class="title"><a href="./Events/EventDetails.php?branch=Arthashastra" target="_blank">Arthashastra</a></h4>
              <!-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p> <-->
            </div>
          </div>


          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #eafde7;">

                <a href="./Events/EventDetails.php?branch=Vishwa Code Genesis" target="_blank">
                  <img src="./img/eventsIcons/vishwacodegenesis.svg" height="140px"
                    style="margin-left:-30px; margin-top:-40px;">
                </a>
              </div>
              <h4 class="title">
                <a href="./Events/EventDetails.php?branch=Vishwa Code Genesis" target="_blank">Vishwa Code Genesis</a></h4>
              <!-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum</p> -->
            </div>
          </div>


          <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;">
              <a href="./Events/EventDetails.php?branch=Rise of Machines" target="_blank">
              <img src = "./img/eventsIcons/rise_of_machines.svg" height="140px" style="margin-left:-30px; margin-top:-40px;">
              </a></div>
              <h4 class="title">
              <a href="./Events/EventDetails.php?branch=Rise of Machines" target="_blank">Rise of Machines</a></h4>
              <!-- <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p> -->
            </div>
          </div>



          



           <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #e1eeff;">
              <a href="./Events/EventDetails.php?branch=NCFF" target="_blank">
              <img src = "./img/eventsIcons/paraphernalia.svg" height="140px" style="margin-left:-30px; margin-top:-40px;">
              </a>
              </div>
              <h4 class="title"><a href="./Events/EventDetails.php?branch=NCFF" target="_blank">NCFF</a></h4>
              <!-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p> -->
            </div>
          </div>



           <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <div class="icon" style="background: #fff0da;">
              <a href="./Events/EventDetails.php?branch=Armageddon" target="_blank">
              <img src = "./img/eventsIcons/armageddon.svg" height="140px" style="margin-left:-30px; margin-top:-40px;">
              </a>
              </div>
              <h4 class="title"> <a href="./Events/EventDetails.php?branch=Armageddon" target="_blank">Armageddon</a></h4>
              <!-- <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p> -->
            </div>
          </div>



        </div>

        <div class="row">
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 wow bounceInUp " data-wow-delay="0.2s"
            data-wow-duration="1.8s">
            <a href="./Events/event.php" target="_blank">
              <button type="button" class="float-right btn btn-outline-info btn-lg">Explore More</button>
            </a>
          </div>
        </div>

      </div>
    </section><!-- #services  Events-->

    <!--==========================
      Why Us Section  Celebrities
    ============================-->
    <section id="why-us" class="wow fadeIn parallax">
      <!-- <div class="container"> -->

        <header class="section-header">
          <h3>CELEBRITIES</h3>

        </header>
          <div class="container">
        <div class="row ">

        <div class="col-md-12">
            <div class="why-us-content">
              <br>
            
              <p >
                "The brightest stars shine to light up someone else's sky." And OJASS'20 has a torrent of stars to
                dazzle our skies and our evenings! We bring to you with 'stars in our eyes', our evening behemoths, all
                set to capture your minds and hearts from 28 Feb- 1 March, 2020! Hope to see y'all there!
              </p>
              <br>
              

              <!-- <div class="features wow bounceInUp clearfix">
                <i class="fa fa-diamond" style="color: #f058dc;"></i>
                <h4>Corporis dolorem</h4>
                <p>Commodi quia voluptatum. Est cupiditate voluptas quaerat officiis ex alias dignissimos et ipsum.
                  Soluta at enim modi ut incidunt dolor et.</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-object-group" style="color: #ffb774;"></i>
                <h4>Eum ut aspernatur</h4>
                <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore
                  fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>
              </div>

              <div class="features wow bounceInUp clearfix">
                <i class="fa fa-language" style="color: #589af1;"></i>
                <h4>Voluptates dolores</h4>
                <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut
                  enim ullam voluptas distinctio aut.</p>
              </div> -->



            </div>

          </div>


          <div class="col-md-4" style="height:auto;">
            <div class="why-us-img">
              <img src="img/clients/celebs/1.jpeg" alt="" class="img-fluid">
              <!-- <br>
              <br>
              <center>
                <h4>Past Celebrities</h4>
              </center> -->
            </div>


            <!-- <div id="owl-demo" class="owl-carousel owl-theme" style="">

              <div class="item"><img src="img/clients/celebs/day1.jpg" alt=""></div>
              <div class="item"><img src="img/clients/celebs/day1a.jpg" alt=""></div>
              <div class="item"><img src="img/clients/celebs/day1b.jpg" alt=""></div>
              <div class="item"><img src="img/clients/celebs/day1c.jpg" alt=""></div>
              <div class="item"><img src="img/clients/celebs/day2b.jpg" alt=""></div>
              <div class="item"><img src="img/clients/celebs/day3a.jpg" alt=""></div>

            </div> -->


          </div>
          <div class="col-md-4">
            <div class="why-us-img">
              <img src="img/clients/celebs/2.jpeg" alt="" class="img-fluid">
              <!-- <br>
              <br>
              <center>
                <h4>Past Celebrities</h4>
              </center> -->
            </div>

          </div>
          <div class="col-md-4">
            <div class="why-us-img">
              <img src="img/clients/celebs/3.jpeg" alt="" class="img-fluid">
              <!-- <br>
              <br>
              <center>
                <h4>Past Celebrities</h4>
              </center> -->
            </div>

          </div>



          
          <!-- </div> -->
        </div>
        <br>
      <div class="container">
        <div class="guru row  features wow bounceInUp">
          <div class="col-md-6">
           
          </div>
          <div class="float-left col-md-6">
            
            
            <a href="./GuruGyan/gurugyan.php" target="_blank">
              <button type="button" class="float-right btn btn-outline-info btn-lg">Guru Gyan</button>
            </a>
          </div>
        </div>
      </div>
    </div>

    </section>
    <!-- whu us Celebrities -->



    <!--==========================
      Portfolio Section ```` Guest Lectures
    ============================-->
    <section id="portfolio" class="section-bg parallax">
      <div class="container ">

        <header class="section-header">
          <h3 class="section-title">GUEST LECTURES</h3>

        </header>
        <div class="container descriptions">
          <p>
            The Guest Lecture Series of OJASS has always been one of the biggest highlights which attracts a majority of
            the student folks. Remaining constant since our inception, the series has inspired many students by giving
            them an opportunity to see the world through the eyes of some of the most eminent personalities. This year
            the students got to have an interactive session with Mr. Priyank Aryan, Mr. Sandeep Jain, Mr. Mukesh Kumar
            and other great personalities.
          </p>
        </div>


        <br>
        <div class="container">
        <!-- <div class="row portfolio-container "> -->


        <div class="owl-carousel guest-carousel">
          <img class="guest-img"  src="img/guest/guest1.jpg" alt=""  style="padding:10%!important;">
          <img class="guest-img" src="img/guest/guest2.jpg" alt="" style="padding:10%!important;">
          <img class="guest-img" src="img/guest/guest3.jpg" alt="" style="padding:10%!important;">
          <!-- <img src="img/guest/guest1.jpg" alt="">
          <img src="img/guest/guest2.jpg" alt="">
          <img src="img/guest/guest3.jpg" alt=""> -->
          <!-- <img src="img/clients/major.png" alt="">
          <img src="img/clients/codechef.png" alt=""> -->
        </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/guest/guest1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">PRIYANK ARYAN</a></h4>
                <p>App</p>
                <div>
                  <a href="img/guest/guest1.jpg" data-lightbox="portfolio" data-title="" class="link-preview"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/guest/guest2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">SANDEEP JAIN</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/guest/guest2.jpg" class="link-preview" data-lightbox="portfolio" data-title=""
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/guest/guest3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">MUKESH KUMAR</a></h4>
                <p>App</p>
                <div>
                  <a href="img/guest/guest3.jpg" class="link-preview" data-lightbox="portfolio" data-title=""
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 2</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 2</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">App 3</a></h4>
                <p>App</p>
                <div>
                  <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->
          <!-- 
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 1</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Card 3</a></h4>
                <p>Card</p>
                <div>
                  <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->
          <!-- 
          <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">Web 1</a></h4>
                <p>Web</p>
                <div>
                  <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div> -->

        <!-- </div> -->
        </div>

      </div>
    </section><!-- #portfolio Guest Lectures-->


    <!--==========================
      Portfolio2 Section ```` Workshops
    ============================-->


    <section id="portfolio2" class="section-bg parallax" style="background:#fff;">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">WORKSHOPS</h3>

        </header>
        <div class="container descriptions">
          <p>
            "Any sufficiently advanced technology is indistinguishable from magic." - Arthur C. Clarke.
            Being a techno-management fest, we at OJASS'20 consider it our moral duty to further the cause of
            technology. Hence, we spread our umbrella a little wider and added some tremendous workshops in the kitty of
            our successes. From delving deep into the complex world of robotics to untangling web development, from the
            intermingling of homo sapiens with Android to an exposure on capturing the perfect moment in photography,
            from looking out the 'window' to explore Linux to knowing the workings of our soon-to-be masters in Machine
            Learning, we've done it all and we're hella proud!


          </p>
        </div>


        <br>
        <!-- <div style="text-align:center;">
          <h1 style="text-align:center;">
            To be updated soon...
          </h1>
          </div> -->
          <center style="text-align:center;margin:0 auto;">
        <div class="row portfolio-container ">
          <div class="col-lg-4 col-md-4 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/workshop/workshop1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">AUTONOMOUS ROBOTICS</a></h4>
                <!-- <p>App</p> -->
                <div>
                  <a href="img/workshop/workshop1.jpg" data-lightbox="portfolio" data-title="" class="link-preview"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          
          <div class="col-lg-4 col-md-4 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/workshop/workshop2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">INTERNET OF THINGS</a></h4>
                <!-- <p>App</p> -->
                <div>
                  <a href="img/workshop/workshop2.jpg" data-lightbox="portfolio" data-title="" class="link-preview"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/workshop/workshop1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a href="#">INTERNET OF THINGS</a></h4>
                <!-- <p>App</p> -->
                <div>
                  <a href="img/workshop/workshop1.jpg" data-lightbox="portfolio" data-title="" class="link-preview"
                    title="Preview"><i class="ion ion-eye"></i></a>
                  <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        </center>

      </div>

    </section><!-- #portfolio2 Workshops-->



    
    <!--==========================
      Director & PI Section ````
    ============================-->

    <section>
    <header class="section-header">
          <h3 class="section-title">DIRECTOR & PROFESSOR-INCHARGE</h3>

        </header>

    <div class="container mt-4">
      <div class="row" style="display:flex;justify-content:space-around;">
       <div class="col-md-4 col-sm-6">
           <div class="our-dir">
               <img src="img/guest/guest1.jpg">
               <div class="dir-content">
                   <h3 class="title">Karunesh Shukla</h3>
                   <span class="post">Director</span>
                   <ul class="social">
                       <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                   </ul>
               </div>
           </div>
       </div>
       <div class="col-md-4 col-sm-6">
           <div class="our-dir">
               <img src="img/guest/guest1.jpg">
               <div class="dir-content">
                   <h3 class="title">Sarvesh Mishra</h3>
                   <span class="post">PROFESSOR-INCHARGE</span>
                   <ul class="social">
                       <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                       <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                       <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
    </div>





    </section>



    <!--==========================
      Team Section
    ============================-->
    <section id="team" class="section-bg parallax" style="z-index:1024;
     
    ">
      <!-- min-height:100vh; Add this to above style attribute -->
      <div class="container">
        <header class="section-header">
          <h3>OUR TEAM</h3>
        </header>

        <?php 
        
         include('./Team/team.php');  
        ?>
        <!-- <div style="text-align:center;">
          <h1 style="text-align:center;">
            To be updated soon...
          </h1>
        </div> -->

      </div>
    </section><!-- #team -->




    <!--==========================
      Awards and Recognition
    ============================-->
   <section id="award">

      <div class="container " style="text-align: center;">

        <header class="section-header">
          <h3>UNDER THE PATRONAGE OF</h3>

        </header>
        <div class="container descriptions">

          <p>OJASS-The Techno-Management fest of NIT Jamshedpur has received various recognitions and patronage from
            various prominent organizations. Some of the prominent ones are:-</p>
        </div>

        <div class="row container your-class" id="page1" style="display:flex;flex-direction:row;justify-content:space-between">
          <div class="col-md-3 pat" >
            <div class="" style="">
              <div>
                <div>
                  <img src="./img/patronage/digital.jpg">

                </div>
                <div class="team-content" style="display:flex;justify-content:center;">
                  <h3 class="title"></h3>

                </div>
                <div style="display:flex;justify-content:center;">
                  <strong> Digital India for its innovative challenge with the motto - "power to empower".</strong>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-3 pat">
            <div class="" style="">
              <div class="">
                <div >
                  <img src="./img/patronage/cee.jpg">

                </div>
                <div style="display:flex;justify-content:center;">
                  <strong> Center for environment education(CEE) to improve public awareness and understanding of the
                    environment.</strong>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-3 pat">
            <div class="" style="">
              <div class="">
                <div >
                  <img src="./img/patronage/sayen.png">

                </div>
                <div style="display:flex;justify-content:center;">
                  <strong> South Asia Youth Environment Network(SAYEN) for its approach and initiative towards
                    environmental change.</strong>
                </div>
              </div>
            </div>




          </div>


       
          <div class="col-md-3 pat">

            <div class="">
              <div class="">
                <div >
                  <img src="./img/patronage/unesco.jpg">
                  <div style="display:flex;justify-content:center;">
                    <strong>
                      UNESCO for the promotion of technical knowledge and education.</strong>
                  </div>

                </div>

              </div>
            </div>


          </div>
</div>


    </section>




    <!--==========================
      Clients Section
    ============================-->

    <section id="clients" class="wow fadeInUp parallax section-bg">
      <div class="container section-bg">

        <header class="section-header">
          <h3>OUR SPONSORS</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/jktyre.png" alt="">
          <img src="img/clients/career.png" alt="">
          <img src="img/clients/electronics1.jpg" alt="">
          <img src="img/clients/sound.png" alt="">
          <img src="img/clients/event3.png" alt="">
          <img src="img/clients/knwldg.png" alt="">
          <img src="img/clients/major.png" alt="">
          <img src="img/clients/codechef.png" alt="">
        </div>

      </div>
      <!-- <div class="row">
        <div class="container">
          <div class="col-md-12 float-right">
            <a href="./Sponsor/sponsor.php" target="_blank">
              <button type="button" class="float-right btn btn-outline-info btn-lg">Explore More</button>
            </a>
          </div>
        </div>
      </div> -->
    </section>

    <!-- #clients -->



    <!--==========================
      Frequently Asked Questions Section
    ============================-->

    <section id="faq" class="parallax">
      <div class="container ">
        <header class="section-header">
          <h3>FREQUENTLY ASKED QUESTIONS</h3>
        </header>

        <ul class="nav nav-pills justify-content-center" role="tablist">
          <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.5s"
            style="border-right:1px solid;">
            <a class="nav-link active" data-toggle="pill" href="#tab1">General</a>
          </li>

          <li class="nav-item animation" data-animation="fadeInUp" data-animation-delay="0.6s">
            <a class="nav-link" data-toggle="pill" href="#tab2">Events </a>
          </li>
        </ul>

        <div class="tab-content">
          <div id="tab1" class="container tab-pane active"><br>
            <div id="faq1" class="faq">
              <ul id="faq-list1" class="faq-list wow fadeInUp">
                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq18">What is Ojass?<i
                      class="ion-android-remove"></i></a>
                  <div id="faq18" class="collapse" data-parent="#faq-list1">
                    <p>
                      Ojass,the annual Techno-Management fest of NIT Jamshedpur is one of the East India's biggest
                      college festivals. It will span for 3 days: February-28,2020 to March-1,2020. The spirit of Ojass
                      lies in
                      encouraging sound practices,making precision engineering a way of life,effectively bringing about
                      a paradigm shift from classroom to path-breaking innovation. </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq21" class="collapsed">What about the accomodation?<i
                      class="ion-android-remove"></i></a>
                  <div id="faq21" class="collapse" data-parent="#faq-list1">
                    <p>
                      Accommodation will be provided for the students in the college hostels. </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">How far is the college from railway station?
                    <i class="ion-android-remove"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list1">
                    <p>
                      From Tatanagar junction, college is located at a distance of 6 KM. From Adityapur Railway Station,
                      it is located at a distance of 1.6 KM. </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">How to register for Campus Ambassador ? And
                    what are the benefits of becoming Campus Ambassador?<i class="ion-android-remove"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list1">
                    <p>
                      You will get yourself registered free in the Ojass if you bring 20+ registrations. Also you will
                      get free accommodation, ojass t-shirt, kits and goodies. You will get a work experience of
                      leadership and management and for that we will award a campus certificate. To Register for Campus
                      Ambassador : <a target="_blank" href="https://forms.gle/pkquhZRyDYwM1aG96">Click here!</a>
                      
                      For further queries, feel free to contact-<br>
                          Prachi:&nbsp; (+91-74883 09597)<br>
                          Gaurav: &nbsp; (+91-79924 25023)<br>
                       </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">Still have doubts ?<i
                      class="ion-android-remove"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list1">
                    <p>
                      Feel free to drop us a message at our Facebook page or contact&nbsp;: <br>
                        Gaurav Mridul : +91 79924 25023
                      <br>
                        Prachi : +91 74883 09597
                      <br>
                        Divyansh : +91 62990 79553
                      <br>
                      Kishore : +91 89198 45029
                      
                      
                      . We will
                      get back to you soon.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <div id="tab2" class="container tab-pane fade"><br>
            <div id="faq2" class="faq">
              <ul id="faq-list2" class="faq-list">
                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq6">What are the types of events in Ojass ?<i
                      class="ion-android-remove"></i></a>
                  <div id="faq6" class="collapse" data-parent="#faq-list2">
                    <p>
                      Ojass is a plethora of many events. It includes branch events, gaming events, formal events,fun
                      events etc.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq7" class="collapsed">Is there any special arrangements during
                    night for girls participating in Ojass ?<i class="ion-android-remove"></i></a>
                  <div id="faq7" class="collapse" data-parent="#faq-list2">
                    <p>
                      All the arrangement of mattresses would be provided inside the hostel itself.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq8" class="collapsed">Are there any online events?<i
                      class="ion-android-remove"></i></a>
                  <div id="faq8" class="collapse" data-parent="#faq-list2">
                    <p>
                      Yes,there will be online events. For details of the online events stay updated to our facebook
                      page.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq9" class="collapsed">How can we participate ?<i
                      class="ion-android-remove"></i></a>
                  <div id="faq9" class="collapse" data-parent="#faq-list2">
                    <p>
                      Get registered through our android app or you can get registered in our campus at the time of
                      fest.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-toggle="collapse" href="#faq10" class="collapsed">Will participation certificate be given for
                    events ?<i class="ion-android-remove"></i></a>
                  <div id="faq10" class="collapse" data-parent="#faq-list2">
                    <p>
                      Yes,we do give participation certificate for the registered candidates.
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </section><!-- #faq -->

  </main>




  <!--==========================
    Footer
  ============================-->
  <section id="footer">
    <footer class="section-bg">
      <div class="footer-top">
        <div class="container">

          <div class="row">

            <div class="col-lg-6">

              <div class="row">

                <div class="col-sm-6">

                  <div class="footer-info">
                    <!-- <h3>OJASS</h3> -->
                      <img src="img/logo-crp.png" alt="logo" srcset="" width="250px">
                      <br><br>
                    <p>
                      The Annual Techno-Management
                      fest of NIT Jamshedpur.</p>

                  </div>


                </div>

                <div class="col-sm-6">
                  <div class="footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                      <li><a href="./">Home</a></li>
                      <li><a href="https://www.nitjsr.ac.in/" target="_blank">NIT Jamshedpur</a></li>

                    </ul>
                  </div>

                  <div class="footer-links">
                    <h4>Contact Us</h4>
                    <p>
                      National Institute of Technology,
                      <br>
                      Jamshedpur, Jharkhand<br>

                    </p>
                  </div>

                  <div class="social-links">
                    <a href="https://twitter.com/ojass_nitjsr" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/Ojassnitjamshedpur" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/ojass_techfest" class="instagram"><i class="fa fa-instagram"></i></a>
                    <!-- <i href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> -->
                  </div>

                </div>

              </div>

            </div>

            <div class="col-lg-6">

              <div class="form">
                <!-- action="" method="post" role="form" -->
                <h4>Send us a message</h4>
                <!-- <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique
                  commodi harum aut temporibus.</p> -->

                <form class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                      data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                      data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                      data-rule="minlen:4" data-msg="Please enter at least 4 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" id="message" name="message" rows="5" data-rule="required"
                      data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>

                  <div id="sendmessage">Your message has been sent. Thank you!</div>
                  <div id="errormessage"></div>

                  <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                </form>
                
              </div>

            </div>

            <div id="snackbar">Your message has been sent. Thank you!</div>

          </div>

        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; &nbsp;<a class="webteam" href="./Developers/" target="_blank">OJASS WEBTEAM</a>
        </div>
      </div>
    </footer>
  </section><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery.visible.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/rellax/rellax.min.js"></script>
  <script src="lib/flipclock/flipclock.js"></script>

  <script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-database.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
  <script>
    var rellax = new Rellax('.rellax', {
      speed: -3.2,
      center: false,
      wrapper: null,
      round: true,
      vertical: true,
      horizontal: false
    });
  </script>

  <script type="text/javascript">
    var clock;

    $(document).ready(function () {

      // Grab the current date
      var currentDate = new Date();

      // Set some date in the future. In this case, it's always Jan 1   format(year,month,date)
      var futureDate = new Date(currentDate.getFullYear() + 1,0 , 28);

      // Calculate the difference in seconds between the future and current date
      var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

      // Instantiate a coutdown FlipClock
      clock = $('.clock').FlipClock(diff, {
        clockFace: 'DailyCounter',
        countdown: true
      });
    });
  </script>

</body>

</html>