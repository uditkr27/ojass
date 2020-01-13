<!DOCTYPE html>
<html lang='en'>
<head>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> <?php
    echo str_replace("_"," ",$_GET['branch']) 
    ?> | OJASS'20</title>
  <meta charset="utf-8">
  <!--logo ojass-->
  <!-- <link rel="shortcut icon" href="../img/small_black.png"> -->
  <!--logo-->
   <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
   <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/updated.css">
    <link rel="stylesheet" type="text/css" href="css/scroll/clean-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/scroll/dabblet.css">
    <link rel="stylesheet" type="text/css" href="css/events.css">
    
    
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link id="layoutstyle" rel="stylesheet" href="../assets/color/theme.css">
    <!--the above part under logo was commented by me-->


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="../lib/animate/animate.min.css" rel="stylesheet">
<link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

<!-- Main Stylesheet File -->

 <link href="../css/style.css" rel="stylesheet">
 <!--link for the EventDetails internal preview page-->
 <?php $StyleEvent='./css/scroll';
       $StyleEventModified = substr(md5(filemtime($StyleEvent)), 0, 6);
 ?>
 <link rel="stylesheet" type="text/css" href="<?php echo $StyleEvent;?>?v=<?php echo $StyleEventModified ; ?>">

 <!--link for the EventDetails internal preview page ends-->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
  <script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-database.js"></script>
  <script type="text/javascript" src="js/firebase.js"></script>


    <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>

<!-- Custom Scripts -->
    <script type="text/javascript" src="js/firebase.js"></script>

    <script type="text/javascript">
        
        var branches={
        'Aakriti':'../img/eventsIcons/akriti.svg',
        'Armageddon':'../img/eventsIcons/armageddon.svg',
        'Arthashastra':'../img/eventsIcons/arthashastra.svg',
        'Aavartan':'../img/eventsIcons/avartan.svg',
        'Circuit House': '../img/eventsIcons/circuit_house.svg' ,
        'Deus-X-Machina': '../img/eventsIcons/deus_x_machina.svg' ,
        'Exposicion': '../img/eventsIcons/exposicion.svg',
        'Live CS':'../img/eventsIcons/live_cs.svg',
        'NSCET':'../img/eventsIcons/nscet.svg',
        'Neo Drishti':'../img/eventsIcons/neodrishti.svg',
        'No Ground Zone':'../img/eventsIcons/no_ground_zone.svg',
        'National College Film Festival':'../img/eventsIcons/paraphernalia.svg',
        'Prayas':'../img/eventsIcons/prayas.svg',
        'Produs':'../img/eventsIcons/produs.svg',
        'Rise of Machines':'../img/eventsIcons/rise_of_machines.svg',
        'Silicon Valley':'../img/eventsIcons/silicon_valley.svg',
        'Vishwa Code Genesis':'../img/eventsIcons/vishwacodegenesis.svg',
        'School Events':'../img/eventsIcons/school_events.svg',
        'Checkered Flag':'../img/eventsIcons/checkered_flag.svg'
      }

        </script>
<!--older style for navbar-->
<!-- <style>
    .logo_light {
        width: 50px;
    }

    #navbar-top {
        height: 85px;
        padding: 10px 0px;
        background-color: black;
    }
    .navbar-brand {
        padding: 0 15px;
    }

    #navbar-menu {
        margin-left: auto;
        margin-right: 3%;
    }

    .vertical_social {
        background-color: #191919;
    }

    #event_title {
    text-transform: uppercase;
    font-size: x-large;
    color: white;
    border-left: 1px solid pink;
    padding-left: 15px;
    }
    
</style> -->
<!--- new style added------------------>
<style>
   .features-content-col {
    width: 75%;
    text-align: left;
  }
   .features-graph {
        height: 600px;
        /* margin: 25px; */
      }
      .features-graph .button-holder {
        display: flex;
        /* display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex; */
       justify-content: center;
  
      align-items: center;
      }
      /*this is for the animated button holder*/
      .features-graph .animation-holder {
        display: flex;
         justify-content: center;
        align-items: center;
    
      }
      .features-graph .flash-oval {
        background-color: #00bff3!important;
        width: 12em;
        height: 12em;
        border-radius: 7em;
        -webkit-transform: translateX(1px);
        -ms-transform: translateX(1px);
        transform: translateX(1px);
        z-index: 100;
        margin: 10em auto 9em auto;
      }
      .features-graph .flash-oval img {
        /* position: absolute; */
        /* right: 32px;
        top: 23px; */
        width:200px;
        /* margin:155px 0 55px 60px!important; */
        margin-left:-97px;
        margin-top:80px;
      }
      /* button with icon */

      .features-graph .btn-with-icon {
        display: block;
        width: 70px;
        height: 70px;
        background-color: #fff;
        border: 1px solid #9df;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        -ms-border-radius: 10px;
        border-radius: 10px;
        transition-duration: 0.3s;
        background-position: center;
        background-repeat: no-repeat;
        line-height: 5em;
        z-index: 0;
        cursor: pointer;
        margin-left: 8%;
        margin-right: 8%;
        text-align: center;
        opacity: 1;
        filter: alpha(opacity=50);
      }

      /* button with active class */
      .features-graph .btn-with-icon.__active {
        opacity: 1;
        filter: alpha(opacity=100);
      }
      .features-graph .btn-with-icon:hover {
        opacity: 1;
      }
      /* label on button */
      .features-graph .sq-bt-label {
        letter-spacing: 0;
        color: #656b6f;
        font-size: 11px;
        font-weight: 400;
        line-height: 16px;
        position: absolute;
        text-transform: uppercase;
      }

      /* for top-left */
      .features-graph .label-top-left {
        /* right: 36%;
        top: 33%; */
        left:13%;
        top:13%;
      }
      .features-graph .label-top {
        /* right: 21.3%; */
        left:35%;
        top: 13%;
      }
      .features-graph .label-top-right {
        left: 58%;
        top: 13%;
      }
      .features-graph .label-bottom-left {
        left: 24%;
        bottom: 17%;
      }
    
      .features-graph .label-bottom-right {
        left: 43%;
        bottom: 17%;
      }
      /* tilted line for feature-1 */
      .features-graph .icon-features-1:after {
        content: " ";
        background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/598117/top-left.svg);
        background-size: 100%;
        height: 110px;
        width: 85px;
        background-repeat: no-repeat;
        position: absolute;
        /* top: 36.4%; */
        top:14%;
      }

      /* tilted line for feature-2 vertical */
      .features-graph .icon-features-2:after {
        content: " ";
        background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/598117/top.svg);
        height: 110px;
        width: 85px;
        background-repeat: no-repeat;
        position: absolute;
        top: 14%;
      }

      .features-graph .icon-features-3:after {
        content: " ";
        background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/598117/top-right.svg);
        background-size: 100%;
        height: 110px;
        width: 85px;
        background-repeat: no-repeat;
        position: absolute;
        top: 14%;
        left: 49%;
      }

      .features-graph .icon-features-4:after {
        content: " ";
        background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/598117/bottom-left.svg);
        background-size: 100%;
        height: 110px;
        width: 85px;
        background-repeat: no-repeat;
        position: absolute;
        bottom: 29%;
        left:28%;
      }
      /* .features-graph .icon-features-5:after {
        content: " ";
        background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/598117/bottom.svg);
        height: 110px;
        width: 85px;
        background-repeat: no-repeat;
        position: absolute;
        bottom: 23%;
      } */
      .features-graph .icon-features-6:after {
        content: " ";
        background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/598117/bottom-right.svg);
        background-size: 100%;
        height: 110px;
        width: 85px;
        background-repeat: no-repeat;
        position: absolute;
        bottom: 29%;
        left: 38%;
      }

      .features-graph #top-left-line {
        position: absolute;
        top: 170px;
        left: 50px;
        z-index: -4;
      }
      .features-graph .icon-features-1 {
        background-image: url(../img/eventsIcons/icon-1.svg);
        background-size: 150%;
        background-position: 50% 0;
      }
      .features-graph .icon-features-2 {
        background-image: url(../img/eventsIcons/icon-5.svg);
        background-size: 130%;
        background-position: 50% 50%;
      }
      .features-graph .icon-features-3 {
        background-image: url(../img/eventsIcons/icon-3.svg);
        background-size: 65%;
      }
      .features-graph .icon-features-4 {
        background-image: url(../img/eventsIcons/icon-6.svg);
        background-size: 65%;
        background-position: 50% 50%;
      }

      .features-graph .icon-features-6 {
       
        background-image: url(../img/eventsIcons/icon-4.svg);
       
        background-size: 150%;
        background-position: 50% 0;
      }

      .features-graph .wave {
        position: absolute;
        opacity: 0;
        width: 12em;
        height: 12em;
        border: #56a9e8 1px solid;
        border-radius: 7em;
        -webkit-animation-name: ripple;
        animation-name: ripple;
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -webkit-animation-iteration-count: linear;
        animation-iteration-count: linear;
        text-align: center;
        top: 0;
      }
      .features-graph .wave2 {
        position: absolute;
        opacity: 0;
        width: 12em;
        height: 12em;
        border: #56a9e8 1px solid;
        border-radius: 7em;
        -webkit-animation-name: ripple2;
        animation-name: ripple2;
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -webkit-animation-iteration-count: linear;
        animation-iteration-count: linear;
        top: 0;
        text-align: center;
      }
      .features-graph .wave3 {
        position: absolute;
        opacity: 0;
        width: 12em;
        height: 12em;
        border: #56a9e8 1px solid;
        border-radius: 7em;
        -webkit-animation-name: ripple3;
        animation-name: ripple3;
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -webkit-animation-iteration-count: linear;
        animation-iteration-count: linear;
        text-align: center;
        top: 0;
      }
      .features-graph .wave4 {
        position: absolute;
        opacity: 0;
        width: 12em;
        height: 12em;
        border: #56a9e8 1px solid;
        border-radius: 7em;
        -webkit-animation-name: ripple4;
        animation-name: ripple4;
        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -webkit-animation-iteration-count: linear;
        animation-iteration-count: linear;
        text-align: center;
        top: 0;
      }
      @-webkit-keyframes ripple {
        from {
          opacity: 0.8;
        }
        to {
          -webkit-transform: scale(1.2);
          transform: scale(1.2);
          opacity: 0;
        }
      }
      @keyframes ripple {
        from {
          opacity: 0.8;
        }
        to {
          -webkit-transform: scale(1.2);
          transform: scale(1.2);
          opacity: 0;
        }
      }
      @-webkit-keyframes ripple2 {
        from {
          opacity: 0.7;
        }
        to {
          -webkit-transform: scale(1.5);
          transform: scale(1.5);
          opacity: 0;
        }
      }
      @keyframes ripple2 {
        from {
          opacity: 0.7;
        }
        to {
          -webkit-transform: scale(1.5);
          transform: scale(1.5);
          opacity: 0;
        }
      }
      @-webkit-keyframes ripple3 {
        from {
          opacity: 0.7;
        }
        to {
          -webkit-transform: scale(2);
          transform: scale(2);
          opacity: 0;
        }
      }
      @keyframes ripple3 {
        from {
          opacity: 0.7;
        }
        to {
          -webkit-transform: scale(2);
          transform: scale(2);
          opacity: 0;
        }
      }
      @-webkit-keyframes ripple4 {
        from {
          opacity: 0.6;
        }
        to {
          -webkit-transform: scale(2.5);
          transform: scale(2.5);
          opacity: 0;
        }
      }
      @keyframes ripple4 {
        from {
          opacity: 0.4;
        }
        to {
          -webkit-transform: scale(2.5);
          transform: scale(2.5);
          opacity: 0;
        }
      }
      /* .features-items {
        display: flex;
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        flex-flow: row wrap;
        list-style: none;
        margin: 0;
        padding: 0;
      } */


    </style>

<!--- new style added------------------>

</head>
<body ng-app="eventApp" style="color: #000;background-color:#f5f8fd">
    <!-- particles.js container -->
    <center>

    <div id="loader-wrapper">
    <div id="loading-center-absolute">
        <div class="object" id="object_four"></div>
        <div class="object" id="object_three"></div>
        <div class="object" id="object_two"></div>
        <div class="object" id="object_one"></div>
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

    </div>

    <header id="navbar-top" class="header_wrap fixed-top">
        <div class="container-fluid">
        <?php
    require('./navbar2.php')
    ?>
      </div>
</header> 



<section style="overflow-x: hidden; height: inherit;margin-top:-45px;margin-left:65px;" id="home_section" class="section_banner section_gradiant3">
    <canvas id="banner_canvas" class="transparent_effect"></canvas>
      
    <a class="backtotop" href="#top"></a>
    <div class="container-fluid" ng-controller="demoCtrl">
      <div>
      

        <div class=""><!--class='row' style="display:flex;justify-content:center;align-item:center;text-align:center;"-->
        <!--the div below will be replaced every time-->
          <div class="imm">
            
          
          </div><!--class 'col-md-12 text-center' removed by me-->
        </div>
        
        <div ng-repeat="event in events" class="event-wrapper zxcv" id="{{event.name.split(' ').join('') | removeBrackets}}" style="display:none;">
        <div class="row">
          <div class="col-md-6 sidebar">
            <!-- <nav class="menu-navigation-dark sidebarmenu" style="position: absolute;left:20px;">
              
              <a href="#" style="position: relative;right:26px;" name='about'><i class="fa fa-address-book-o" ></i><span >About</span></a><br>
                  <a href="#" style="position: relative;right:26px;" name='detail'><i class="fa fa-info"></i><span>Details</span></a><br>
                  <a href="#" style="position: relative;right:26px;" name='prizes'><i class="fa fa-trophy"></i><span>Prizes</span></a><br>
                  <a href="#" style="position: relative;right:26px;" name='rules'><i class="fa fa-book"></i><span>Rules</span></a><br>
                  <a href="#" style="position: relative;right:26px;" name='coordinators'><i class="fa fa-users"></i><span>Co-ordinators</span></a><br>

           
          </nav> -->

          <nav class="menu-navigation-dark ">
      <div class="features-content-col">
        <div data-features-nav class="features-graph">
          <div class="button-holder sidebarmenu" style="margin-top:0px!important">
            <a
              href="#"
              name="about"
              class="icon-features-1 btn-with-icon __active"
              ><span class="sq-bt-label label-top-left">ABOUT</span></a
            >
            <a href="#" name="detail" class="icon-features-2 btn-with-icon"
              ><span class="sq-bt-label label-top">DETAILS</span></a
            >
            <a href="#" name="prizes" class="icon-features-3 btn-with-icon"
              ><span class="sq-bt-label label-top-right">PRIZES</span></a
            >
          </div>



           <div class="animation-holder">
            <div class="flash-oval">
             
              <img id="pulse" onclick="EventDetails()" style="cursor:pointer;"
                src=""
                alt="pulse"
              />
              
              
              <!-- <div class="wave hidden wave-anim"></div>
              <div class="wave2 hidden wave-anim"></div>
              <div class="wave3 hidden wave-anim"></div>
              <div class="wave4 hidden wave-anim"></div> -->
            </div>
          </div> 

          <!-- <span class="flash-oval">
              <img id="pulse"
                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/598117/flash.png"
                alt="pulse"
              />


          </span> -->



          <div class="button-holder sidebarmenu" style="margin-top:65%!important;">
            <a href="#" name="rules" class="icon-features-4 btn-with-icon"
              ><span class="sq-bt-label label-bottom-left">RULES</span></a
            >
            <a
              href="#"
              name="coordinators"
              class="icon-features-6 btn-with-icon"
              ><span class="sq-bt-label label-bottom-right"
                >EVENT HEADS</span
              ></a
            >
          </div>
        </div>
      </div>
    </nav>
          </div>
          <div class="col-md-6 mainarea">
            <div class="row text-center">
              <div class="col-md-12" id='stuffname'></div>
            </div>
            <div class="row">
            
              <div class="col-md-12">
                <div class="details">
                  
                  <!-- Tabs for 1st Sub Event -->
                  <div class="{{event.name.split(' ').join('') | removeBrackets}} about" style="display:none;">
                    
                    <h4 class="text-center" style="text-decoration: underline;">About</h4>
                    
                    <div ng-bind-html="event.about | html" class="txtdetail"></div>
                  </div>

                  <div class="{{event.name.split(' ').join('') | removeBrackets}} detail" style="display:none;">
         
                    <h4 class="text-center" style="text-decoration: underline;">Details</h4>
                    
                    <div ng-bind-html="event.detail | html" class="txtdetail"></div>
                  </div>

                  <div class="{{event.name.split(' ').join('') | removeBrackets}} rules" style="display:none;">
                    
                    <h4 class="text-center" style="text-decoration: underline;">Rules</h4>
                   
                    <div class="txtdetail">
                      <ol>
                      <li ng-repeat="rule in event.rules">
                          
                          <div ng-bind-html="rule.text | html"></div>
                          
                      </li>
                    </ol>
                    </div>
                  </div>

                  <div class="{{event.name.split(' ').join('') | removeBrackets}} prizes" style="display:none;">
                
                    <h4 class="text-center" style="text-decoration: underline;">Prizes</h4>
                   
                        
                   
                        <div class="txtdetail">
                          <!-- Condition for normal Prizes -->
                    <ul ng-if="!event.prize.Firstyear && !event.prize.firstyear && event.name!='CodeMania' && event.name!='CODESENSE'">
                      <li ng-repeat="(key,val) in event.prize">{{key | capitalize}}: &#x20b9; {{val}}</li>
                    </ul>
                    
                    <ul ng-if="event.name=='CodeMania'">
                	    <li>First: &#x20b9;{{event.prize.first}}</li>
                	    <li>Second: &#x20b9;{{event.prize.second}}</li>
                	    <li>Third: &#x20b9;{{event.prize.third}}</li>
                	    <li>Fourth: &#x20b9;{{event.prize.fourth}}</li>
                	    <li>Fifth: &#x20b9;{{event.prize.fifth}}</li>
                	    <li>Sixth: &#x20b9;{{event.prize.sixth}}</li>
                	    <b><li>Total: &#x20b9;{{event.prize.total}}</li></b>
                		<!--<li ng-repeat="(key,val) in current.prize">{{key}}: &#x20b9;{{val}}</li>-->
                	</ul>
                	
                	<ul ng-if="event.name=='CODESENSE'">
                	    <li>First: &#x20b9;{{event.prize.first}}</li>
                	    <li>Second: &#x20b9;{{event.prize.second}}</li>
                	    <li>Third: &#x20b9;{{event.prize.third}}</li>
                	    <li>Fourth: &#x20b9;{{event.prize.forth}}</li>
                	    <b><li>Total: &#x20b9;{{event.prize.total}}</li></b>
                		<!--<li ng-repeat="(key,val) in current.prize">{{key}}: &#x20b9;{{val}}</li>-->
                	</ul>
                    

                    

                    <!-- Condition for WHO AM I (WHI) in Ciruit_House -->
                    <!-- Condition for High Voltage Concepts in Ciruit_House -->
                    <div ng-if="event.prize.firstyear">

                      <b ng-if="event.name=='Hack-De-Science'">Web</b>
                      <b ng-if="event.name!='Hack-De-Science'">First year</b>: <br>
                      <li ng-repeat="(key,val) in event.prize.firstyear">
                        {{key | capitalize}} : &#x20b9; {{val}}
                      </li>

                      <b ng-if="event.name=='Hack-De-Science'">App</b>
                      <b ng-if="event.name!='Hack-De-Science'">Second year</b>: <br>
                      <li ng-repeat="(key,val) in event.prize.secondyear" >
                        
                        	{{key | capitalize}} : &#x20b9; {{val}}
                        

                      </li>

                      <div ng-if="event.prize.thirdyear">
                        <b ng-if="event.name=='Hack-De-Science'">Others</b>
                      	<b ng-if="event.name!='Hack-De-Science'">Third year</b>: <br>
	                      <li ng-repeat="(key,val) in event.prize.thirdyear">
	                        
	                        	{{key | capitalize}} : &#x20b9; {{val}}
	                        
	                      </li>
                      </div>

                      <b>Total</b>: &#x20b9; {{event.prize.total}}
                     
                    </div>
                        </div>

                  </div>
                  <div class="{{event.name.split(' ').join('') | removeBrackets}} coordinators" style="display:none;">
                  
                    <h4 class="text-center" style="text-decoration: underline;">Event Heads</h4>
                    
                    <div class="row text-center" ng-repeat="c in event.coordinators">
                      <div class="col-md-6">{{c.name}}</div>
                      <div class="col-md-6">{{c.phone}}</div>
                    </div>
                  </div>
</div>
              </div>
            </div>
          </div>
        </div>
      </div>

        <div class="row" >
          <div class="col-md-1"></div>
          <div class="col-md-9" style="position: fixed;bottom:30px;left:200px;">
            <br>
            <nav class="menu-navigation-dark" id='bottomMenu' class="fade-element-in" ng-if="flag" ng-cloak>
                    <a style="word-wrap: break-word;" ng-repeat="event in events" href="#" class="event-name" onclick="PreviewHide()"name="{{event.name.split(' ').join('').split('.').join('')}}">
                      <span style="color:#000;" >{{ event.name }}</span></a>
            </nav>
            <center style="position: relative;top:20px;">
              
              <h4 class="fade-element-in" ng-if="!flag">
                <!-- <span>Loading...</span>  -->
                <br>
                <img src="../img/preloader3.svg">
              </h4>
            </center>
          </div>
          <div class="col-md-1"></div>
        </div>
        
      </div>
    </div>

    </section>

  
	<script type="text/javascript" src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
</center>
</body>
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
          var branchname= '<?php echo $_GET['branch']; ?>';
          if(branchname=='NCFF'){
            branchname="National College Film Festival"
          }
         
        // $('<style>').text('.event-details-preview{width:70vw;height:90vh;margin:0px auto;overflow:hidden;border-radius: 25px; box-shadow: -11px 11px 1px #f5f8fd; };').appendTo(document.head);
        //   $('<style>').text('.card-head-event{ position: relative; height: 230px; background: #24b9fe;background: linear-gradient(135deg, #fff 8%, #24b9fe 83%);border-radius: 25px 25px 0 0;}').appendTo(document.head);
           $('<style>').text('.branch-heads{ width: 300px; height: 300px;}').appendTo(document.head);
        //   $('<style>').text('.back-text-event{display: flex; justify-content: center; font-size: 31px; font-weight: 900; opacity: 0.1;}').appendTo(document.head);
        //   $('<style>').text('.text{margin-top:8%;}').appendTo(document.head);
        //   $('<style>').text('.event-caption{display: block; padding: 0 20px;font-size: 14px; font-weight: 400; text-transform: uppercase; overflow: hidden;}').appendTo(document.head);
        //   $('<style>').text('.heads{display:flex;justify-content:space-around;}').appendTo(document.head);
        //   $('<style>').text('.branch-heads{width:220px;height:220px;margin-top: 5%; border-radius: 8em;}').appendTo(document.head);

        

     
        
          
         
        //  var html='<img src='+branches[branchname]+' class="event-img">';

          var html='<div class="event-details-preview row container-fluid"><div class="card-head-event col-md-4"><img src='+branches[branchname]+' class="event-imgs" style="z-index:5;display:block!important;margin-left:-18%;"/></div><div class="card-event-body col-md-8"><div class="event-desc"><div class="back-text-event"><span class="text" style="font-family:batman;font-size:42px;">'+branchname+'<br></span></div><span class="event-caption " style="margin-top:50%!important;"><br>{{about}}</span></div><br><strong ><u>BRANCH HEADS</u></strong><div class="row" style="justify-content:space-around;margin-top:1%;"> <div ng-repeat="h in head" class="event-name ">{{h.name}} <div class="heads"> <img src={{h.url}} alt="Branch Head" style="width:110px;height:110px;" class="branch-heads"/><br><img src="https://img.icons8.com/plasticine/18/000000/phone.png">: &nbsp;{{h.cn}}<br><img src="https://img.icons8.com/doodle/18/000000/whatsapp.png">: &nbsp;{{h.wn}}</div></div></div> </div></div>'
          $('.imm').html(html);

          // $("a").mouseenter(function(){
          //     $("<audio></audio>").attr({ 
          //       'src':'../audio/pi.mp3', 
          //       'volume':1,
          //       'autoplay':'autoplay'
          //     }).appendTo("body");
          //   });
          // $(document).on('mouseenter','#bottomMenu > a',function(){
          //   $("<audio></audio>").attr({ 
          //       'src':'../audio/pi.mp3', 
          //       'volume':1,
          //       'autoplay':'autoplay'
          //     }).appendTo("body");
          // })

          var eventIcon =document.getElementById('pulse');
          eventIcon.src = branches[branchname];
          // console.log(eventIcon.src);
          // console.log(eventIcon);

          function EventDetails(){
            console.log('clicked');
            
            // var branchname= '<?php /*echo $_GET['branch'];*/ ?>';
         
          //    var html='<div class="event-details-preview"style="width:70vw;height:90vh;margin:0px auto;overflow:hidden; border-radius: 25px; box-shadow: -11px 11px 1px #f5f8fd;"><div class="card-head-event" style=" position: relative; height: 230px; background: #24b9fe;background: linear-gradient(135deg, #fff 8%, #24b9fe 83%);border-radius: 25px 25px 0 0;"><img src='+branches[branchname]+' class="event-img"style="  position: absolute; left: 0; margin-top: -5px; margin-left: 760px; width: 380px; height: 380px;"/><div class="back-text-event"style="  display: flex; justify-content: center; font-size: 31px; font-weight: 900; opacity: 0.1;"><span class="text" style="margin-top:8%;">'+branchname+'</span></div></div><div class="card-event-body"><div class="event-desc"><span class="event-caption" style="display: block; padding: 0 20px;font-size: 14px; font-weight: 400; text-transform: uppercase; overflow: hidden;">%Event Description%</span></div>   <div style="display:flex;justify-content:space-around;" class="heads"><div> <img src='+branches[branchname]+' alt="Branch Head" class="branch-heads" style="width:220px;height:220px;margin-top: 45%; border-radius: 8em;"/></div> <div><img src='+branches[branchname]+' alt="Branch Head" class="branch-heads" style="width:220px;height:220px;margin-top: 45%; border-radius: 8em;"/> </div> <div><img src='+branches[branchname]+' alt="Branch Head" class="branch-heads" style="width:220px;height:220px;margin-top: 45%; border-radius: 8em;"/> </div></div></div></div>'; //<img src='+branches[branchname]+' class="event-img">
          //   console.log(html.src);
          //   console.log(branches[branchname])
          //  $('.imm').html(html);
           $('.zxcv').hide();
           //central image clicked
           $('.imm').show();
          $('.event-name').removeClass("selected");
          

          }
          function PreviewHide(){
            $('.imm').hide();

          }

    </script>

    <!-- Vendor Scripts -->
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.5.1/angular-sanitize.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.0/angular-animate.min.js"></script>
       
        <script type="text/javascript" src="js/events.js"></script>
        <script type="text/javascript" src="js/newng.js"></script>

        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script> 

        <!-- parallax js  --> 
        <script src="../assets/js/parallax.js"></script> 
        <!-- particles min js  --> 
        <script src="../assets/js/particles.min.js"></script> 
        <script src="../assets/js/jquery.dd.min.js"></script> 
        <!-- modern_canvas js --> 
        <script src="../assets/js/modern_canvas.js"></script> 
        <!-- scripts js --> 
        <script src="../assets/js/scripts.js"></script>


</html>