<?php
require_once("dbConnection1.php");
	print_r($_POST);
     if(isset($_POST["submit"]))
   {
	//print_r($_POST);
	
    $con=mysqli_connect("localhost","root","","project");

    if(!$con)
    {
      echo mysqli_connect_error($con);
      exit("Problem in db connection");
    }
// insert data
print_r($_POST);


   echo $insertQuery="UPDATE register SET 
					`name` = '".$_POST['login']."',
					`email` ='".$_POST['password']."',
					`password` ='".$_POST['password']."',
					`gender` ='".$_POST['password']."',
					`phone_number` ='".$_POST['password']."',
					`address` ='".$_POST['password']."'
					
					
					WHERE id= '".$_GET["id"]."'";
    $res=mysqli_query($con,$insertQuery);
    if($res)
{
    echo "Data inserted";
}else
{
    echo "Data not inserted";
    echo mysqli_error($con);
}
   }
?>	

<?php

    $con=mysqli_connect("localhost","root","","project");

    if(!$con)
    {
      echo mysqli_connect_error($con);
      exit("Problem in db connection");
    }

   echo $query= "SELECT * FROM register WHERE id = '".$_GET["id"]."' ";
    $res=mysqli_query($con,$query);

	$user = mysqli_fetch_assoc($res);

	print_r($user);	
    
?>

<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Veggie Restaurant Category Flat Bootstrap Responsive Website Template | Contact :: W3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Veggie Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
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

<!-- top header -->
<div class="header-top">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<ul class="d-lg-flex header-w3_pvt">
					
					
				</ul>
			</div>
			<div class="col-sm-6 header-right-w3_pvt">
				<ul class="d-lg-flex header-w3_pvt justify-content-lg-end">
					
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //top header -->

<!-- //header -->
<header class="py-sm-3 pt-3 pb-2">
	<div class="container">
			<div id="logo">
				<h1> <a href="index.html"><span class="fa fa-cutlery" aria-hidden="true"></span>Veggie</a></h1>
			</div>
		<!-- nav -->
		<nav class="d-lg-flex">
		
			<ul class="menu mt-2 ml-auto">
				
                <li class=""><a href="log out.html">Register</a></li>
                
			</ul>
			
		</nav>
		<div class="clear"></div>
		<!-- //nav -->
	</div>
</header>
<!-- //header -->

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
							  <input type="text" name="name" class="form-control" value="<?php echo $user["name"];?>"  placeholder="Name" required="">
						  </div>
						  <div class="form-group">
							  <input type="email" name="email" class="form-control"value="<?php echo $user["email"];?>" placeholder="Email" required="">
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
							  <input type="text" name="phone_number" class="form-control" value="<?php echo $user["phone_number"];?>" placeholder="Phone_Number" required="">
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
							
					  
	</body>
	</html>
	