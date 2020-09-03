<?php require_once("dbconnection1.php");?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Crispy Restaurant Category Flat Bootstrap Responsive Website Template | Contact :: W3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Crispy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	<!-- css files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
    <link href="css/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
    <link href="css/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //google fonts -->
	
</head>
<body>
<?php include_once("header1.php");?>


<?php

if(isset($_POST) && $_POST["submit"] == "Submit"){
echo
$insertQuesry = "INSERT into register (`name`, `email`, `password`,`gender`,`phone_number`, `address`) values ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["password"]."', '".$_POST["gender"]."','".$_POST["phone_number"]."','".$_POST["address"]."')";
if(mysqli_query($con, $insertQuesry)){
  echo "Inserted successfully";
}else{
  echo "not   Inserted successfully";

}
}

?>

<!-- top header -->
<div class="header-top">
	<div class="container">
	<?php print_r($_POST)?>

		<div class="row">
			<div class="col-sm-6">
				<ul class="d-lg-flex header-w3_pvt">
					<li class="mr-lg-3">
						<span class="fa fa-envelope-open"></span>
						<a href="mailto:info@example.com" class="">info@example.com</a>
					</li>
					<li>
						<span class="fa fa-phone"></span>
						<p class="d-inline">Call Us +12 345 678</p>
					</li>
				</ul>
			</div>
			<div class="col-sm-6 header-right-w3_pvt">
				<ul class="d-lg-flex header-w3_pvt justify-content-lg-end">
					<li class="">
						<span class=""><span class="fas fa-clock"></span>Mon - Sun : 8:30am to 9:30pm</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //top header -->



<!-- banner -->
<div class="innerpage-banner" id="home">
	<div class="inner-page-layer">
	</div>
</div>
<!-- //banner -->

<!-- contact -->
<section class="mail pt-lg-5 pt-4">
	<div class="container pt-lg-5">
		<h2 class="heading text-center mb-sm-5 mb-4">Register</h2>
		<div class="row agileinfo_mail_grids">
			<div class="col-lg-8 agileinfo_mail_grid_right">
				<form action="" method="post">
					<div class="row">
						<div class="col-md-6 wthree_contact_left_grid pr-md-0">
							<div class="form-group">
								<input type="text" name="name" class="form-control" placeholder="Name" required="">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control"  placeholder="Email" required="">
							</div>
							<div class="form-group">
								<input type="password" name="password" class="form-control" placeholder="Password" required="">
							</div>
							<div class="form-group">
								<input type="radio" name="gender" class="form-control" value="male" placeholder="Gender" required="">Male
								</div>
								<div class="form-group">
								<input type="radio" name="gender" class="form-control" value="female" placeholder="Gender" required="">Female
							</div>
						</div>
						<div class="col-md-6 wthree_contact_left_grid">
							<div class="form-group">
								<input type="text" name="phone_number" class="form-control" placeholder="Phone_Number" required="">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="address" placeholder="Address" class="form-control" required=""></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="submit-buttons">
								<button type="submit" name="submit" value="Submit" class="btn">Submit</button>
								<?php print_r($_POST)?>
</div>
						</div>
					</div>
				</form>
			</div>
			
		</div>
	</div>
	<div class="map mt-5">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50996.31320435244!2d-122.06676498187694!3d36.97949802442312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808e441b7c36d549%3A0x52ca104b2ad7f985!2sSanta+Cruz%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1469096018666"
			style="border:0"></iframe>
	</div>
</section>
<!-- //contact -->

<!-- footer -->
<footer class="py-5">
	<div class="container py-sm-3">
		<div class="row footer-grids">
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
				<h4 class="mb-4"><span class="fa fa-cutlery"></span> Crispy</h4>
				<p class="mb-3">Onec Consequat sapien ut cursus rhoncus. Nullam dui mi, vulputate ac metus semper quis luctus sed.</p>
				<h5>Trusted by <span>500+ People</span> </h5>
			</div>
			<div class="col-lg-3 col-sm-6 mb-md-0 mb-sm-5 mb-4">
				<h4 class="mb-4">Address Info</h4>
				<p><span class="fa mr-2 fa-map-marker"></span>64d canal street TT 3356 <span>Newyork, NY.</span></p>
				<p class="phone py-2"><span class="fa mr-2 fa-phone"></span> +1(12) 123 456 789 </p>
				<p><span class="fa mr-2 fa-envelope"></span><a href="mailto:info@example.com">info@example.com</a></p>
			</div>
			<div class="col-lg-2 col-sm-6 mb-lg-0 mb-sm-5 mb-4">
				<h4 class="mb-4">Quick Links</h4>
				<ul>
					<li><a href="#">Order Online</a></li>
					<li class="my-2"><a href="#">Healthy Crispy</a></li>
					<li><a href="#">Support Helpline</a></li>
					<li class="mt-2"><a href="#">Privacy Ploicy</a></li>
				</ul>
			</div>
			<div class="col-lg-4 col-sm-6">
				<h4 class="mb-4">Subscribe Us</h4>
				<p class="mb-3">Subscribe to our newsletter</p>
				<form action="#" method="post" class="d-flex">
					<input type="email" id="email" name="EMAIL" placeholder="Enter your email here" required="">
					<button type="submit" class="btn">Subscribe</button>
				</form>
				<div class="icon-social mt-3">
					<a href="#" class="button-footr">
						<span class="fa mx-2 fa-facebook"></span>
					</a>
					<a href="#" class="button-footr">
						<span class="fa mx-2 fa-twitter"></span>
					</a>
					<a href="#" class="button-footr">
						<span class="fa mx-2 fa-dribbble"></span>
					</a>
					<a href="#" class="button-footr">
						<span class="fa mx-2 fa-pinterest"></span>
					</a>
					<a href="#" class="button-footr">
						<span class="fa mx-2 fa-google-plus"></span>
					</a>

				</div>
			</div>
		</div>
	</div>
</footer>
<!-- //footer -->

<!-- copyright -->
<div class="copyright">
	<div class="container py-4">
		<div class=" text-center">
			<p>© 2019 Crispy. All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
		</div>
	</div>
</div>
<!-- //copyright -->
		
<!-- move top -->
<div class="move-top text-right">
	<a href="#home" class="move-top"> 
		<span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
	</a>
</div>
<!-- move top -->

</body>
</html>