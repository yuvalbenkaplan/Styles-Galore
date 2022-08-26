<?php
// Free html5 templates : www.zerotheme.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$subject=$_POST['subject'];

	$to = "youremail@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zHairSalon - Free Salon Html5 Templates</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	
	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<script src="js/jquery-2.1.1.js"></script>
	<script src="js/script.js"></script>

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->
    
</head>

<body class="archive-page">
	<div class="wrap-body">
		<header>
			<div class="wrap-header">
				<!---Main Header--->
				<div class="main-header">
					<div class="zerogrid">
						<div class="row">
							<div class="col-1-4">
								<span class="contact-info left">
									<b style="color:#2b2459;font-size:14px;">Mon - Sat 8.00 - 20.00</b>
									<br>
									Sunday CLOSED
								</span>
							</div>
							<div class="col-2-4">
								<div id="logo"><a href="index.html"><img src="images/logo.png" /></a></div>
							</div>
							<div class="col-1-4">
								<span class="contact-info right">
									<b style="color:#2b2459;font-size:14px;">Call us: 123-456-78-90</b>
									<br>
									info@yoursite.com
								</span>
							</div>
						</div>
					</div>
				</div>
				<!---Top Menu--->
				<div id="cssmenu" >
					<ul>
					   <li><a href="index.html"><span>zHairSalon</span></a></li>
					   <li class="has-sub"><a href="#"><span>Category</span></a>
						  <ul>
							 <li class="has-sub"><a href="#"><span>Item 1</span></a>
								<ul>
								   <li><a href="#"><span>Sub Item</span></a></li>
								   <li class="last"><a href="#"><span>Sub Item</span></a></li>
								</ul>
							 </li>
							 <li class="has-sub"><a href="#"><span>Item 2</span></a>
								<ul>
								   <li><a href="#"><span>Sub Item</span></a></li>
								   <li class="last"><a href="#"><span>Sub Item</span></a></li>
								</ul>
							 </li>
						  </ul>
					   </li>
					   <li><a href="archive.html"><span>Archive</span></a></li>
					   <li><a href="single.html"><span>About</span></a></li>
					   <li class="last active"><a href="contact.html"><span>Contact</span></a></li>
					</ul>
				</div>
			</div>
		</header>

		<!--////////////////////////////////////Container-->
		<section id="container">
			<div class="wrap-container zerogrid">
				<div class="crumbs">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div id="main-content">
					<div class="wrap-content" style="border-right: none">
						<div class="row">
							<h1 class="t-center" style="margin: 40px 0;color: #212121;letter-spacing: 2px;font-weight: 500;">Contact Us</h1>
							<div class="col-full">
								<div id="map" style="height: 450px;"></div>
							</div>
							<div class="col-1-3">
								<div class="wrap-col">
									<h3 style="margin: 20px 0">Contact Info</h3>
									<strong>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE LAUDANTIUM, TOTAM REM APERIAM.</strong>
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia.</p>
									<p>JL.Kemacetan timur no.23. block.Q3<br>
										Jakarta-Indonesia</p>
									   <p>+6221 888 888 90 <br>
										+6221 888 88891</p>
									<p>info@yourdomain.com</p>
								</div>
							</div>
							<div class="col-2-3">
								<div class="wrap-col">
									<div class="contact">
										<h3 style="margin: 20px 0 20px 30px">Contact Form</h3>
										<div id="contact_form">
											<!--Warning-->
											<center><?php echo $text;?></center>
											<!---->
											<form name="form1" id="ff" method="post" action="contact.php">
												<label class="row">
													<div class="col-1-2">
														<div class="wrap-col">
															<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
														</div>
													</div>
													<div class="col-1-2">
														<div class="wrap-col">
															<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
														</div>
													</div>
												</label>
												<label class="row">
													<div class="col-full">
														<div class="wrap-col">
														<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
														</div>
													</div>
												</label>
												<label class="row">
													<div class="wrap-col">
														<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
														placeholder="Message"></textarea>
													</div>
												</label>
												<center><input class="button bt1" type="submit" name="submitcontact" value="Submit"></center>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--////////////////////////////////////Footer-->
		<footer>
			<div class="zerogrid wrap-footer">
				<div class="row">
					<div class="col-1-3 col-footer-1">
						<div class="wrap-col">
							<h3 class="widget-title">About Us</h3>
							<p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum gravida, metus elit vehicula dui. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum</p>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium</p>
						</div>
					</div>
					<div class="col-1-3 col-footer-2">
						<div class="wrap-col">
							<h3 class="widget-title">Recent Post</h3>
							<ul>
								<li><a href="#">MOST VISITED COUNTRIES</a></li>
								<li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
								<li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
								<li><a href="#">STARTUP COMPANY’S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
							</ul>
						</div>
					</div>
					<div class="col-1-3 col-footer-3">
						<div class="wrap-col">
							<h3 class="widget-title">Subcribe</h3>
							<p>Never missed any post published in our site. Subscribe to our daly newsletter now.</p>
							<p>Email address:</p>
							<form action="#" method="post">
								<input type="text" name="your-name" value="" size="40" placeholder="Your Email" />
								<input type="submit" value="SUBSCRIBE" class="button button-subcribe" />
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="zerogrid wrapper">
					Copyright @ zHairSalon - Desigend by <a href="https://www.zerotheme.com" title="free website templates">ZEROTHEME</a>
					<ul class="quick-link">
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms of Use</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
	
	<!-- Google Map -->
	<script>
	  var marker;
	  var image = 'images/map-marker.png';
      function initMap() {
        var myLatLng = {lat: 39.79, lng: -86.14};

		// Specify features and elements to define styles.
        var styleArray = [
          {
            featureType: "all",
            stylers: [
             { saturation: -80 }
            ]
          },{
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [
              { hue: "#000000" },
              { saturation: 50 }
            ]
          },{
            featureType: "poi.business",
            elementType: "labels",
            stylers: [
              { visibility: "off" }
            ]
          }
        ];
		
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          scrollwheel: false,
		   // Apply the map style array to the map.
          styles: styleArray,
          zoom: 7
        });

        var directionsDisplay = new google.maps.DirectionsRenderer({
          map: map
        });

		// Create a marker and set its position.
        marker = new google.maps.Marker({
          map: map,
		  icon: image,
		  draggable: true,
          animation: google.maps.Animation.DROP,
          position: myLatLng
        });
		marker.addListener('click', toggleBounce);
      }
	  
	  function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>
	
</body>
</html>