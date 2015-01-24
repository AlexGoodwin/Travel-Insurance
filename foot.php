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
		//fancybox
		$('.fancybox').fancybox({
			padding: 0
		});
		
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