<?php
require_once('functions.php');

if(isset($_POST['btn'])){
	$res = send_book_email();	
	
	if($res){
		header('Location: index.php?msg=1');
		exit;
	}
	
	
}

if(isset($_POST['send_message'])){
	$res = send_quote_email();	
	
	if($res){
		header('Location: index.php?msg=2');
		exit;
	}
	
	
}




?>


<!DOCTYPE html>
<html>
<head>
	<title>MK CARGO | Home Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/menu.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,500,600,700,800|Open+Sans:300,300i,400,600,700,800&display=swap" rel="stylesheet">
    <style>
.capbox {
	background-color: #ff5100;
	border: #B3E272 0px solid;

	}

.capbox-inner {
	font: bold 11px arial, sans-serif;
	color: #000000;

height: 18px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	}

#CaptchaDiv {
	font: bold 17px verdana, arial, sans-serif;
	font-style: italic;
	color: #000000;
	background-color: #FFFFFF;
margin-top: -8px;
	-moz-border-radius: 4px;
	-webkit-border-radius: 4px;
	border-radius: 4px;
	}

#CaptchaInput { margin: 1px 0px 1px 0px; width: 135px; }


</style>
</head> 
<body>
<?php if(isset($_REQUEST['msg']) && $_REQUEST['msg']!=''){
	if($_REQUEST['msg']==1){
		$mes = 'Mail Sent Successfully';
	}else{
		$mes = 'Quote Sent Successfully';
	}
	
	 ?>
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Success!</strong> <?=$mes?>
</div>
<?php }?>
	<!-- Top Header -->
	<section class="mk-top-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 col-xs-6">
					<div class="mk-top-header-box">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<span>
							<small>Call Us Anytime</small>
							<a href="tel:01234860216">01234 860216</a>
						</span>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="mk-top-header-box">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<span>
							<small>Email Us</small>
							<a href="mailto:info@mkcargo.co.uk">info@mkcargo.co.uk</a>
						</span>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="mk-social">
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-6">
					<div class="mk-top-header-box">
						<a href="#get_quote" class="quote-btn">Get A Quote</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Top Header -->

	<!-- Header -->
	<section class="header">
		<div class="grid flex relative">
			<div class="block ntm nbm">
				<div class="col_12">
					<div class="header-wrapper">
						<div class="logo  animated fadeInDown">
							<a href="./" title="MK CARGO">
								<img src="assets/images/logo.png">
							</a>
						</div>	
									
						<div class="navbar">
							<ul class="main-nav animated fadeInRight">
								<li><a href="#">Home</a></li>
								<li><a href="#about_us">About Us</a></li>
								<li><a href="#our-prices">Prices</a></li>
								<li><a href="#forbidden-items">Forbidden Items</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Header -->

	<!-- Hero Banner -->
	<section class="mk-hero-banner">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-5">
					<div class="mk-banner-text">
						<h1>Ground, Air or Sea</h1>
						<small>We Deliver your package in one-time</small>
					</div>
				</div>
				<div class="col-xs-12 col-sm-5 col-lg-4 col-lg-offset-3">
					<div class="mk-banner-form">
						<h4>Book a Home Collection</h4>
						<form name="frm" action="" method="post" id="frm" onsubmit="check()">
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<input type="text" name="full_name" class="form-control" placeholder="YOUR NAME">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<input type="tel" name="phone" class="form-control" placeholder="PHONE">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<input type="text" name="address" class="form-control" placeholder="ADDRESS">
									</div>
								</div>
							</div>
						<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<input type="text" name="time" id="timepicker" class="form-control" placeholder="TIME">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<input type="text" name="destination" class="form-control" placeholder="DESTINATION">
									</div>
								</div>
							</div>
								<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
									   	<span id="message">Please verify.</span>
			<span id="success">Validation complete :)</span>
			<span id="fail">Validation failed :(</span>
           <p id="question" style="margin: -29px 0 10px;"></p>
           <input id="ans" type="text" name="code">
           
					
		
            
									</div>
								</div>
							</div>
							<div class="row text-center">
								<div class="col-sm-12">
									<div class="form-group">
									    	<button type="submit" class="mk-form-btn" value="Book Now" name="btn" style="margin-top: -13px;">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Hero Banner -->

	<!-- Delivery Services -->
	<section class="mk-delivery-services" id="about_us">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-12">
					<small>Welcome to MK CARGO</small>
					<h2>About Us</h2>
					<p>Mk Cargo is a fast and reliable courier service in the uk. We provide unique one-stop solution to all of our customer needs. We have 24/7 online booking facilities with excellent customer care whenever our customer need.</p>
					<p>You can save time and money with our 24/7 online and phone call booking services. Our office based in Milton Keynes, United Kingdom and we specialise in fast deliveries for Bangladesh and Worldwide. We have been making deliveries to all over the Bangladesh including all major metropolitans/cities throughout network of delivery points. We have branch offices and agents in the United Kingdom where you can contact them for hassle free service and we are very keen to help for all your enquiries. Our goal is to provide best possible service to our customers.</p> 
					<p>We offer several levels of services as well as special needs such as large items, fragile items, and express delivery etc. We achieve comprehensive logistic solutions with our highly trained professional staff and elite couriers.</p> 
					<h2>Our Services In</h2>
					<span></span>
				</div>
			</div>
		</div>
		<div class="mk-delivery-services-row">
			<div class="mk-delivery-img">
				<img src="assets/images/delivery-services.png">
			</div>
			<div class="mk-delivery-tabs">

			  <ul class="nav nav-tabs">
			    <li class="active"><a data-toggle="tab" href="#bangladesh">Bangaldesh</a></li>
			    <li><a data-toggle="tab" href="#india">India</a></li>
			    <li><a data-toggle="tab" href="#pakistan">Pakistan</a></li>
			    <li><a data-toggle="tab" href="#africa">Africa</a></li>
			  </ul>

			  	<div class="tab-content">
				    <div id="bangladesh" class="tab-pane fade in active">
				    	<p>Send cargo to Bangladesh from London, Manchester, Birmingham and Milton Keynes  by air and sea.  Any types of parcel from UK to anywhere in Bangladesh. For quick service and cheap Parcel rates for Bangladesh, please contact our office. We send all kind of parcel to Bangladesh.</p>
						<p>We have very special price for sending TV, Laptop and mobile to Bangladesh. MK  Cargo is a International cargo shipping company with a great expertise in sending cheap cargo to Bangladesh. Now promises to offer a great degree of convenience and transparency to all those who want to send goods to Bangladesh from London and other UK cities. We never charge any hidden fees and claims to be the cheapest service provider for anyone who wants to ship parcel to Bangladesh. Our professional employees will take care of your goods, whenever you send them.</p>
				   				    </div>
				    <div id="india" class="tab-pane fade">
				    	<p>Cargo to India always keep in mind cost and reliability factors for individual customers in general and industrial clients in particular, we will bring you the lowest shipping rates for cargo forwarding by air or sea. We also provide you door to door air and door to door sea shipping with highly affordable rates. We ship your personal belonging, clothes and documents.</p>
				      	<p>Our professional employees will take care of your goods, whenever you send them. If you want to travel by air and find out you have some excess luggage, don‘t worry about it, MK Cargo will take care of it and delivers what it promises.</p>
				    </div>
				    <div id="pakistan" class="tab-pane fade">
				    	<p>Pakistan is home to millions of inhabitants, there are thousands of people in UK who have business relationships with the people in Pakistan and there are expat Pakistanis in UK who have strong family ties in Pakistan. MK Cargo knows this fact and offers exceptional service for sending cargo to Pakistan and Azad Kashmir from UK. </p>
				      	<p>We have very good experience in providing unbeatable and reliable shipping services from UK to Pakistan and offer the lowest shipping rates. We provide cargo service for all over Pakistan by using multiple delivery channels. Get in touch for the lowest online cargo rates to Pakistan from UK.</p>
				    </div>
				    <div id="africa" class="tab-pane fade">
				    	<p>Our Sea and Air cargo services to West Africa (Nigeria/Ghana) and other African Countries from United Kingdom is the best. There are different shipping options to select from and at MK Cargo we think no load is too small, no customer is too small.</p>
				      	<p>MK Cargo takes pride in being flexible, cost effective and most reliable freight service to clients across the UK to send cargo and gifts to Africa. Our bespoke Cargo services meet your needs and requirements. Our air cargo & sea cargo services are the cheapest as well as the quickest. Our professional employees will take care of your goods, whenever you send them. MK Cargo provides best cargo shipping services to to Africa, We have very special price for shipping large items such as TV, Laptop and fridge etc.</p>
				    </div>
			  	</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="mk-delivery-services-cards">
						<img src="assets/images/truck.png">
						<h4>Collection Service </h4>
						<p> We provide collection service to pick your package from your home address. </p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="mk-delivery-services-cards">
						<img src="assets/images/box.png">
						<h4>Door to door Delivery </h4>
						<p> We provide door to door delivery to your desired  destination address.</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="mk-delivery-services-cards">
						<img src="assets/images/ball.png">
						<h4>Packaging </h4>
						<p>We provide full packaging service for small or large items. T&C applies </p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="mk-delivery-services-cards">
						<img src="assets/images/lifter.png">
						<h4>Support </h4>
						<p> We have 24/7 customer service support in country / destination country </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Delivery Services -->

	<!-- Gallery -->
	<section class="mk-gallery">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<div class="mk-fleet-galery-box mk-galery-box">
						<h4>Our Mission</h4>
						<p>Provide the best quality service with latest technology  for our customers</p>
						<a href="#">View All</a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="mk-galery-box">
						<img src="assets/images/truck-box.png">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="mk-galery-box">
						<img src="assets/images/container.png">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="mk-galery-box">
						<img src="assets/images/vehicle.png">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Gallery -->

	<!-- Looking For -->
	<section class="mk-looking-for" >
		<div class="container" id="forbidden-items">
			<div class="row">
				<div class="col-sm-6">
					<h3>FORBIDDEN  ITEMS</h3>
					<p class="mk-looking-text" >Acids, Batteries, Poisons, Matches, Lighters Bleach, Compressed gas Explosives,
Ignitable gas, Flammable liquids, Incapacitating sprays, Cheques or Tickets that are not named, Dangerous and hazardous goods/items, Fire Extinguishers, Engines / Generators / Gearboxes or any part containing or having contained oil/petrol unless flushed through
seeds/Food items, Human Remains / Body Fluids Live / Dead animals / Magnets
Liquids / Adhesives / Paint / Oil / Tobacco and tobacco products / Medication, Prescribed Drugs may be considerable / Passports / Birth Certificates /  Driving Licences / Animal skins.
</p>
					<div class="row">
						<div class="col-sm-6">
							<div class="mk-looking-for-cards">
								<img src="assets/images/lifter.png">
								<h4>AWe will not transport any prohibited items under any circumstances, If any shipment is found to contain any prohibited items you may be fined and your consignment will be destroyed.</h4>
								<p></p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="mk-looking-for-cards">
								<img src="assets/images/truck.png">
								<h4>We reserve the right to refuse or suspend transportation of any package which doesn’t meet the standard eg transportation are not adequately describe. We will not transport any good prohibited by law and regulation by the government of local region or destination countries .</h4>
								<p></p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="mk-looking-for-cards">
								<img src="assets/images/box.png">
								<h4>It is the sender responsibility to ensure the consignments meet all policy ad safety requirements. Neither MK Cargo nor the courier acknowledges that the consents are acceptable. It is also the shipper’s responsibility to comply with current government laws and regulations in each country. Shipment are subject to inspect by the government authorities. </h4>
								<p></p>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="mk-looking-for-cards">
								<img src="assets/images/ball.png">
								<h4>Articles of exceptional value such as works of art, antiques, precious stones, gold and silver
Prohibited items may be varied depending on shipping method and shipping provider. A list of restricted and prohibited items can be found on courier website. We always recommended you to check the restricted and prohibited items and comply with the guidelines of your chosen airline/carrier prior to sending your shipment. </h4>
								<p></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6" id="get_quote">
					<div class="mk-request-quote-form">
						<h4>Request a quick quote</h4>
						<form name="frmQuote" action="" method="post" id="frmQuote">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="name">Your Name</label>
										<input type="text" name="full_name" class="form-control" placeholder="Your Name">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="subject">Subject</label>
										<input type="text" name="subject" class="form-control" placeholder="Subject">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="email">E-mail Address</label>
										<input type="email" name="email" class="form-control" placeholder="E-mail Address">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="tel">Phone</label>
										<input type="tel" name="phone" class="form-control" placeholder="Phone Number">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label for="service">Service</label>
										<input type="text" name="service" class="form-control" placeholder="Service">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<div class="form-group mk-msg-fld">
										<label for="service">Message</label>
										<input type="text" name="message_txt" class="form-control" placeholder="Message">
									</div>
								</div>
							</div>
                                   <div class="row">
								<div class="col-sm-12">
									<div class="form-group">
									<p id="question2"></p>
									3+4=
									<input id="ans2" type="text">
			               <div id="message2">Please verify.</div>
		                		
									</div>
								</div>
							</div>
							<div class="row text-center">
								<div class="col-sm-12">
									<input type="submit" name="send_message" class="mk-form-btn" value="Send Message">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Looking For -->

	<!-- True Facts -->
	<section class="mk-true-facts">
		<div class="container" id="our-prices">
			<div class="row text-center">
				<div class="col-sm-12">
					<small>Our Prices</small>
					<h2>MK Cargo price information</h2>
					<span></span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="mk-true-fact-box">
						<div class="mk-true-fact-box-num">
							<h3>0-21KG</h3>
						</div>
						<div class="mk-true-fact-box-content">
							<img src="assets/images/employees.png">
							<h5>LOWER LIMIT </h5>
							<p>Our minimum lower weight limit is 0-21kg</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="mk-true-fact-box">
						<div class="mk-true-fact-box-num">
							<h3>10-1000KG</h3>
						</div>
						<div class="mk-true-fact-box-content">
							<img src="assets/images/map-pin.png">
							<h5>UPPER LIMIT</h5>
							<p>Our maximum upper weight limit is 10-1000kg</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="mk-true-fact-box">
						<div class="mk-true-fact-box-num">
							<h3>RATE</h3>
						</div>
						<div class="mk-true-fact-box-content">
							<img src="assets/images/ship.png">
							<h5>Air Cargo </h5>
							<p>Starting from £3.50 per KG (T&C applies)</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="mk-true-fact-box">
						<div class="mk-true-fact-box-num">
							<h3>OTHER</h3>
						</div>
						<div class="mk-true-fact-box-content">
							<img src="assets/images/circle.png">
							<h5>We do not charge on</h5>
							<p>Fuel, Security,  NES GB, Custom BD</p>
							<br> 
							<p>The above prices are excluding electronic items </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End True Facts -->

	<!-- Clients & News -->
	<section class="mk-clients-news">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-7">
					<div class="mk-clients">
						<h3>Information</h3>
						<ul>
							<li>
								<p>MK Cargo can deliver your shipment in any country around the World. Our rates for each country is changing frequently so we do recommend you to contact our office and find out the latest rates for your destination.</p>
								<div class="mk-img-title">
									
								</div>
							</li>
							<li>
								<p>MK Cargo can deliver your shipment anywhere within Europe at the best prices on the market. Large portion of our business are shipments going to France, Germany and Spain. We have special offers for shipments within Europe Union countries. Please find out more and contact our friendly team today.</p>
								<div class="mk-img-title">
								</div>
							</li>
						</ul>
					</div>
				</div>
				<div class=" col-sm-6 col-lg-5">
					<div class="mk-news">
						<h3>COLLECTION POINT <span><a href="#"></a></h3>
						<ul>
							<li>

								<span><strong>Milton Keynes </strong><small></li>
							<li>

								<span><strong>Bedford </strong><small></li>
							<li>
		
								<span><strong>Northampton</strong><small></li>
															<li>
		
								<span><strong>Cambridge </strong><small></li>
															<li>
		
								<span><strong>Leicester </strong><small></li>
															<li>
		
								<span><strong>Manchester </strong><small></li>
				</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Clients & News -->

	<!-- get a Quote -->
	<section class="mk-get-a-quote" >
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="mk-quote-text">
						<h4>We're ready to collect your package</h4>
						<p></p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="mk-quote-btn">
						<a href="#get_quote">Get a Quote</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End get a Quote -->

	<!-- Footer -->
	<footer id="contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="footer1">
						<img src="assets/images/footer-logo.png">
						<p>Mk Cargo is a fast and reliable courier service in the uk. We provide unique one-stop solution to all of our customer needs. We have 24/7 online booking facilities with excellent customer care whenever our customer need.</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="footer2">
						<label>Custom Menu</label>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="">About Us</a></li>
							<li><a href="">Prices</a></li>
							<li><a href="">Forbidden Items</a></li>
							<li><a href="">Contact</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="footer2">
						<label>Custom Menu</label>
						<ul>
							<li><a href="#">support Center</a></li>
							<li><a href="">Terms & Conditions</a></li>
							<li><a href="">Privacy Policy</a></li>
							<li><a href="">Destinations</a></li>
							<li><a href="">Road Map</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="footer3">
						<label>Get In Touch</label>
						<ul>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">135 Midland Road, Bedford, MK40 1DN</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i><a href="#">Tel No: 01234 860216</a></li>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="#">Email: info@mkcargo.co.uk </a></li>
							<li><i class="fa fa-clock-o" aria-hidden="true"></i><a href="#">Monday - Friday 09.00 - 17.00</a></li>
						</ul>

						<div class="mk-social-media">
							<label>we're Social</label>
							<ul>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->

	<!-- Mobile Menu -->
	<div id="nav-trigger">
		<a href="#" class="hamburger hamburger--spin">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</a>
	</div>
	<div id="nav-mobile"></div>
	<!-- End Mobile Menu -->

	<!-- Load JavaScript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!--<script src="assets/js/smoothscroll.js"></script>-->
 	<script src="assets/js/slick.min.js"></script>
	<script src="assets/js/application.js"></script>
    <script src="assets/js/jquery.validate.js"></script>
	<!-- End JavaScript -->

<script>
      
         var total;

function getRandom(){return Math.ceil(Math.random()* 20);}
function createSum(){
		var randomNum1 = getRandom(),
			randomNum2 = getRandom();
	total =randomNum1 + randomNum2;
  $( "#question" ).text( randomNum1 + " + " + randomNum2 + "=" );  
  $("#ans").val('');
  checkInput();
}

function checkInput(){
		var input = $("#ans").val(), 
    	slideSpeed = 200,
      hasInput = !!input, 
      valid = hasInput && input == total;
    $('#message').toggle(!hasInput);
    $('button[type=submit]').prop('disabled', !valid);  
    $('#success').toggle(valid);
    $('#fail').toggle(hasInput && !valid);
}

$(document).ready(function(){
	//create initial sum
	createSum();
	// On "reset button" click, generate new random sum
	$('button[type=reset]').click(createSum);
	// On user input, check value
	$( "#ans" ).keyup(checkInput);
});
        

        </script>
        
       
 <script type="text/javascript">
		 

		$( document ).ready( function () {
			
			 
			$( "#frm" ).validate( {
				rules: {
					full_name: "required",
					phone: "required",
					address: "required",
					time: "required",
					destination: "required",
				},
				messages: {
					full_name: "Name is required",
					phone: "Phone is required",
					address: "Address is required",
					time: "Time is required",
					destination: "Destination is required",
					
					
					
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "radio" ) {
						error.insertAfter(  '#exam_dates' );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
				}
			} );
			
			
			
				$( "#frmQuote" ).validate( {
				rules: {
					full_name: "required",
					phone: "required",
					subject: "required",
					service: "required",
					message_txt:'required',
					email: {
					 required: true,
					 email: true          
					},
				},
				messages: {
					full_name: "Name is required",
					phone: "Phone is required",
					subject: "Subject is required",
					service: "Service is required",
					message_txt: "Message is required",
					email: "Please enter a valid email"
					
					
					
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					if ( element.prop( "type" ) === "radio" ) {
						error.insertAfter(  '#exam_dates' );
					} else {
						error.insertAfter( element );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
				}
			} );
			
			
		 

			} );
			
			
		 
	</script>


	
     <link rel="stylesheet" type="text/css" href="assets/js/jquery-timepicker-master/jquery.timepicker.css">
    <script src="assets/js/jquery-timepicker-master/jquery.timepicker.js"></script>
    <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
    
     <style>
	.radio-inline {margin:0px !important;}
	.rinput{ height: 10px !important;;}
	.help-block {
 
 display:block;
 margin-top:0px;
 margin-bottom:-6px;
 color:#a94442 !important;
}
 </style>
</body>
</html>


