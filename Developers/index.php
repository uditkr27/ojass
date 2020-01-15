<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Developers | OJASS'20</title>

      <!-- custom stylesheet -->
      <link rel="stylesheet" href="main.css">

      <!-- font-awesome icons -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- Jquery CDN -->
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

      <!-- Plugin  -->
      <script src="jquery.reflection.js"></script>
      <script src="jquery.cloud9carousel.js"></script>
</head>
<body>
      <div id="wrap">
            <div id="showcase">
                  <img src="https://drive.google.com/uc?id=1qG0JYjakgjkcv5KMKxupB8PHSjUXUPAp" alt="vivek" class="cloud9-item">
                 <!-- <img src="Adam.png" alt="Adam" class="cloud9-item">
                  <img src="Amy.png" alt="Amy" class="cloud9-item">-->
                  <img src="https://drive.google.com/uc?id=1qG0JYjakgjkcv5KMKxupB8PHSjUXUPAp" alt="Blake" class="cloud9-item">
                  <img src="https://drive.google.com/uc?id=1qG0JYjakgjkcv5KMKxupB8PHSjUXUPAp" alt="Angela" class="cloud9-item">
                 
                  <img src="https://drive.google.com/uc?id=1qG0JYjakgjkcv5KMKxupB8PHSjUXUPAp" alt="777" class="cloud9-item">
                  
                  <!-- <img src="Developers/pic-3.png" alt="Udit" class="cloud9-item"> -->
                  <!-- <img src="Blake.png" alt="Blake" class="cloud9-item">
                  <img src="Angela.png" alt="Angela" class="cloud9-item">
                  <img src="Claire.png" alt="Claire" class="cloud9-item">
                  <img src="Blake.png" alt="Blake" class="cloud9-item">
                  <img src="Angela.png" alt="Angela" class="cloud9-item">
                  <img src="Claire.png" alt="Claire" class="cloud9-item">
                  <img src="Blake.png" alt="Blake" class="cloud9-item">
                  <img src="Angela.png" alt="Angela" class="cloud9-item">
                  <img src="Claire.png" alt="Claire" class="cloud9-item"> -->
            </div>

            <p id="item-title">&nbsp;</p>

            <div class="nav noselect">
                  <button class="left"><i class="fa fa-arrow-left"></i></button>
                  <button class="right"><i class="fa fa-arrow-right"></i></button>
            </div>

      </div>

      <script type="text/javascript">

      $(function() {
            var showcase = $("#showcase")

            showcase.Cloud9Carousel( {
                  yPos: 42,
                  yRadius: 48,
                  mirrorOptions: {
                        gap: 12,
                        height: 0.2
                  },
                  buttonLeft: $(".nav > .left"),
                  buttonRight: $(".nav > .right"),
                  autoPlay: true,
                  bringToFront: true,

                  onRendered: showcaseUpdated,
                  onLoaded: function() {
                        showcase.css( 'visibility', 'visible' )
                        showcase.css( 'display', 'none')
                        showcase.fadeIn( 1500 )
                  }
            })

            function showcaseUpdated( showcase ) {
                  var title = $("#item-title").html(
                        $(showcase.nearestItem()).attr( 'alt' )
                  )

                  var c = Math.cos((showcase.floatIndex() % 1) * 2 * Math.PI)
                  title.css('opacity', 0.5 + (0.5 * c))
            }

            $('.nav > button').click( function( e ) {
                  var b = $(e.target).addClass( 'down' )
                  setTimeout( function() { b.removeClass( 'down' ) }, 80)
            } )

            $(document).keydown( function( e ) {
                  switch( e.keyCode ) {
                        case 37:
                        $('.nav > .left').click()
                        break

                        case 39:
                        $('.nav > .right').click()
                  }
            })
      })

      </script>
</body>
</html>
