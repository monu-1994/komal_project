
<!-- //header -->
<?php 
error_reporting(0);
session_start();

print_r($_SESSION);
?>
<header class="py-sm-3 pt-3 pb-2">
	<div class="container">
			<div id="logo">
				<h1> <a href="index.html"><span class="fa fa-cutlery" aria-hidden="true"></span> Crispy</a></h1>
			</div>
		<!-- nav -->
		<nav class="d-lg-flex">

			<label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
			<input type="checkbox" id="drop" />
			<ul class="menu mt-2 ml-auto">
				<li class="active"><a href="index.php">Home</a></li>
				<li class=""><a href="about.php">About Us</a></li>
				<li class=""><a href="services.php">Services</a></li>
				<li class=""><a href="gallery.php">Gallery</a></li>
				<li class=""><a href="Menu1.php">Menu</a></li>
                <li class=""><a href="blog.php">Blog</a></li>
				<li class=""><a href="contact.php">Contact Us</a></li>
				<li class=""><a href="register.php">Register</a></li>
				<li class=""><a href="login1.php">Login</a></li>

			</ul>
			<div class="login-icon ml-2">
				<a class="user" href="#"> Call Us</a>
			</div>
		</nav>
		<div class="clear"></div>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->
