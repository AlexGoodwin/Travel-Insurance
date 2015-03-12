<? 
	require('common.php');
	include('head.php');?>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header>
	        
	        <? include('nav.php');?>
	        
			<h1>Traveling? Get Insured.</h1>
			<h2>Get a fast & easy quote from an agent.</h2>
			
			<a href="#application" class="scrollDown"></a>
			<div class="darker"></div>
        </header>
        
        <section id="application">
	        <section class="grid-container">
		        <img src="http://placehold.it/200x100&text=Logo" alt="placeholder">
		        <form class="grid-100" action="submit.php" method="post">
			        <div class="grid-30 prefix-20">
				        <label for="name">Name</label>
				        <input type="text" name='name' id="name" placeholder="Name" required="required">
				        
				        <label for="email">Email</label>
				        <input type="email" name='email' id="email" placeholder="Email" required="required">
				        
				        <label for="phone">Phone</label>
				        <input type="tel" id="phone" name="phone" placeholder="Phone Number" required="required">
				        
				        <label for="ssn">Social Security</label>
				        <input type="tel" id="ssn" name="ssn" placeholder="Social Security Number" pattern="\d{3}-?\d{2}-?\d{4}" required="required">
				        
				        <label for="weight">Weight</label>
				        <input type="text" name='weight' id="weight" placeholder="Weight (Lbs)" required="required">
				        
				        <label for="address_line1">Mailing Address</label>
				        <input type="text" name="address_line1" id="address_line1" placeholder="Mailing Address" class="noMargin" required="required">
				        
				        <label for="address_line2">Mailing Address (Line 2)</label>
				        <input type="text" name="address_line2" id="address_line2" placeholder="Mailing Address (Line 2)" >
				        
				        <label for="city">City</label>
				        <input type="text" name="city" id="city" placeholder="City" required="required">
				        
						<div class="halfInput">				        
					        <label for="state">State</label>
					        <input type="text" name="state" id="state" placeholder="State" required="required">
					        
					        <label for="zip">Zip</label>
					        <input type="text" name="zip" id="zip" placeholder="Zip" maxlength="5" required="required">
						</div>
			        </div>
			        
			        <div class="grid-30 suffix-20">			        
				        <label for="tripStart">Trip Start</label>
				        <input type="text" name="tripStart" id="tripStart" placeholder="Trip Start" required="required">
				        
				        <label for="tripEnd">Trip End</label>
				        <input type="text" name="tripEnd" id="tripEnd" placeholder="Trip End" required="required">
			        </div>
			        
			        <div class="clearfix"></div>
			        
			        <input type="hidden" name="status" value="Received">
			        
			        <div class="grid-60 prefix-20">
				        <input type='submit' value="Get A Quote">
			        </div>
		        </form>
		        <div class="grid-60 prefix-20 disclaimer">
			        <p>Your information is transmitted and stored over a secure, industry-standard https connection. Questions? <a href="#">Contact us</a> or view our <a href="#">privacy policy</a>.</p>
		        </div>
		        
		        <? include('footer.php');?>
			</section>
        </section>

        <? include('foot.php');?>
    </body>
</html>
