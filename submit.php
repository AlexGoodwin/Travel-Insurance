<?php		
	error_reporting(-1);
	include('common.php');
	
	if(isset($_POST['name'])){
		$stmt = $db->prepare("INSERT INTO applications (name, email, phone, social, weight, address_line1, address_line2, city, state, zip, trip_start, trip_end, status) VALUES (:name, :email, :phone, :social, :weight, :address_line1, :address_line2, :city, :state, :zip, :trip_start, :trip_end, :status)");
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
		$stmt->bindParam(':status', $status);
	
		
		// insert one row
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$social = preg_replace('/[^0-9]/', '', $_POST['ssn']);
		$weight = $_POST['weight'];
		$address_line1 = $_POST['address_line1'];
		if(isset($_POST['address_line2'])){
			$address_line2 = $_POST['address_line2'];
		}
		else{$address_line2 = '';}
		$city = $_POST['city'];
		$state = $_POST['state'];
		$zip = $_POST['zip'];
		$trip_start = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['tripStart'])));
		$trip_end = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['tripEnd'])));
		$status = $_POST['status'];
		
		$result = $stmt->execute(); 
	}
	else{
		// no post data
	}
	
	include('head.php');
?>
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
		        <div class="grid-60 prefix-20">
			        <h1>Thank You!<img src="img/logo.png"></h1>
			        <p>Your information has been submitted. Expect a call/email in no more than 48 business hours.</p>
			        
			        <p>Questions? <a href="#" title="Email Us">Contact us</a>.</p>
		        </div>
		        
		        <? include('footer.php');?>
			</section>
        </section>

        <? include('foot.php');?>
    </body>
</html>
