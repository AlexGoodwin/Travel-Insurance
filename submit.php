<?php		
	error_reporting(-1);
	include('common.php');
	
	if(isset($_POST['name'])){
		$stmt = $db->prepare("INSERT INTO applications (name, email, phone, social, weight, address_line1, address_line2, city, state, zip, trip_start, trip_end) VALUES (:name, :email, :phone, :social, :weight, :address_line1, :address_line2, :city, :state, :zip, :trip_start, :trip_end)");
		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':phone', $phone);
		$stmt->bindParam(':social', $social);
		$stmt->bindParam(':weight', $weight);
		$stmt->bindParam(':address_line1', $address_line1);
		$stmt->bindParam(':address_line2', $address_line2);
		$stmt->bindParam(':city', $city);
		$stmt->bindParam(':state', $state);
		$stmt->bindParam(':zip', $zip);
		$stmt->bindParam(':trip_start', $trip_start);
		$stmt->bindParam(':trip_end', $trip_end);
	
		
		// insert one row
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$social = $_POST['social'];
		$weight = $_POST['weight'];
		$address_line1 = $_POST['address_line1'];
		$address_line2 = $_POST['address_line2 '];
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$trip_start = $_POST['trip_start'];
		$trip_end = $_POST['trip_end'];
		$stmt->execute();
	}
	else{
		// no post data
	}
?>
	
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/unsemantic-grid-responsive.css">
        <link rel="stylesheet" href="css/style.css">
        
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
		        <p>Your information has been submitted. Expect a call/email in no more than 48 business hours.</p>
		        
		        <footer class="grid-60 prefix-20">
			        <div class="grid-25">
				        <img src="http://placehold.it/100x50">
			        </div>
			        
			        <div class="grid-25">
				        <img src="http://placehold.it/100x50">
			        </div>
			        
			        <div class="grid-25">
				        <img src="http://placehold.it/100x50">
			        </div>
			        
			        <div class="grid-25">
				        <img src="http://placehold.it/100x50">
			        </div>
		        </footer>
			</section>
        </section>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
        
        <!-- jQuery UI -->
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

        <script src="js/main.js"></script>
        
        <!-- Date picker -->
        <script>
			$(document).ready(function() {
				// parallax
				$(window).scroll(function(){
					var position = $(window).scrollTop();
					$('header').css({backgroundPositionY: position/4});
					if(position <= 360)
						$('#application section').css({top: (-150 - position/2)});
				});
				
				$( "#from" ).datepicker({
					defaultDate: "+1w",
					changeMonth: true,
					changeYear: true,
					onClose: function( selectedDate ) {
						$( "#to" ).datepicker( "option", "minDate", selectedDate );
					}
				});
				$( "#to" ).datepicker({
					defaultDate: "+1w",
					changeMonth: true,
					changeYear: true,
					onClose: function( selectedDate ) {
						$( "#from" ).datepicker( "option", "maxDate", selectedDate );
					}
				});
				
				// form validation
				$('form').on('submit', function(evt){
				    evt.preventDefault();
				    var phone = $(this).find('#fieldPhone').val().replace(/[\s().+-]/g, '');
				    var ssn = $(this).find('#fieldSsn').val().replace(/-/g, '');
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
