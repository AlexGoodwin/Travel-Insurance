<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>XSI Travel Insurance</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/unsemantic-grid-responsive.css">
        <link rel="stylesheet" href="css/style.css">
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
        <!-- typekit -->
        <script src="//use.typekit.net/cvd4zmg.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		
		<!-- fancybox -->
		<link rel="stylesheet" type="text/css" href="fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
	        
	        <? include('nav.php');?>
	        
			<h1>Traveling? Get Insured.</h1>
			<h2>Get a fast & easy quote from an XSI agent.</h2>
			
			<a href="#application" class="scrollDown"></a>
			<div class="darker"></div>
        </header>
        
        <section id="application">
	        <section class="grid-container">
		        <img src="img/logo.png" alt="XSI logo">
		        <form class="grid-100" action="submit.php" method="post">
			        <div class="grid-30 prefix-20">
				        <label for="name">Name</label>
				        <input type="text" name='name' placeholder="Name" required="required">
				        
				        <label for="email">Email</label>
				        <input type="email" name='email' placeholder="Email" required="required">
				        
				        <label for="phone">Phone</label>
				        <input type="tel" id="phone" name="phone" placeholder="Phone Number" required="required">
				        
				        <label for="ssn">Social Security</label>
				        <input type="tel" id="ssn" name="ssn" placeholder="Social Security Number" pattern="\d{3}-?\d{2}-?\d{4}" required="required">
				        
				        <label for="weight">Weight</label>
				        <input type="text" name='weight' placeholder="Weight (Lbs)" required="required">
				        
				        <label for="address_line1">Mailing Address</label>
				        <input type="text" name="address_line1" placeholder="Mailing Address" class="noMargin" required="required">
				        
				        <label for="address_line2">Mailing Address (Line 2)</label>
				        <input type="text" name="address_line2" placeholder="Mailing Address (Line 2)" >
				        
				        <label for="city">City</label>
				        <input type="text" name="city" placeholder="City" required="required">
				        
						<div class="halfInput">				        
					        <label for="state">State</label>
					        <input type="text" name="state" placeholder="State" required="required">
					        
					        <label for="zip">Zip</label>
					        <input type="text" name="zip" placeholder="Zip" maxlength="5" required="required">
						</div>
			        </div>
			        
			        <div class="grid-30 suffix-20">			        
				        <label for="tripStart">Trip Start</label>
				        <input type="text" name="tripStart" id="tripStart" placeholder="Trip Start" required="required">
				        
				        <label for="tripEnd">Trip End</label>
				        <input type="text" name="tripEnd" id="tripEnd" placeholder="Trip End" required="required">
			        </div>
			        
			        <div class="clearfix"></div>
			        
			        <div class="grid-60 prefix-20">
				        <input type='submit' value="Get A Quote">
			        </div>
		        </form>
		        <div class="grid-60 prefix-20 disclaimer">
			        <p>Your information is transmitted and stored over a secure, industry-standard https connection. Questions? <a href="#">Contact us</a> or view our <a href="#">privacy policy</a>.</p>
		        </div>
		        
		        <footer class="grid-60 prefix-20">
			        <div class="grid-25">
				        <img src="http://placehold.it/100x50" alt='placeholder image'>
			        </div>
			        
			        <div class="grid-25">
				        <img src="http://placehold.it/100x50" alt='placeholder image'>
			        </div>
			        
			        <div class="grid-25">
				        <img src="http://placehold.it/100x50" alt='placeholder image'>
			        </div>
			        
			        <div class="grid-25">
				        <img src="http://placehold.it/100x50" alt='placeholder image'>
			        </div>
		        </footer>
			</section>
        </section>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        
        <!-- jQuery UI -->
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        
        <!-- fancybox -->
        <script type="text/javascript" src="fancybox/source/jquery.fancybox.js?v=2.1.5"></script>

        <script src="js/main.js"></script>
        
        <!-- Date picker -->
        <script>
			$(document).ready(function(){
				$('.fancybox').fancybox();
				
				// parallax
				$(window).scroll(function(){
					var position = $(window).scrollTop();
					$('header').css({backgroundPositionY: position/4});
					if(position <= 360)
						$('#application section').css({top: (-150 - position/2)});
				});
				
				$( "#tripStart" ).datepicker({
					defaultDate: "+1w",
					changeMonth: true,
					changeYear: true,
					onClose: function( selectedDate ) {
						$( "#tripEnd" ).datepicker( "option", "minDate", selectedDate );
					}
				});
				$( "#tripEnd" ).datepicker({
					defaultDate: "+1w",
					changeMonth: true,
					changeYear: true,
					onClose: function( selectedDate ) {
						$( "#tripState" ).datepicker( "option", "maxDate", selectedDate );
					}
				});
				
				// form validation
				$('form').on('submit', function(evt){
				    var phone = $(this).find('#phone').val().replace(/[\s().+-]/g, '');
				    var ssn = $(this).find('#ssn').val().replace(/-/g, '');
				});
			});
			
			//smooth scroll
			$(function() {
			  $('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        if(target.selector == '#application'){
				        $('html,body').animate({
				          scrollTop: target.offset().top - 330
				        }, 500);
			        }
			        else{
				        $('html,body').animate({
				          scrollTop: target.offset().top
				        }, 500);
			        }			        
			        return false;
			      }
			    }
			  });
			});
			
		</script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
