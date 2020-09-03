<?php 
session_start();
require_once("dbconnection1.php");?>

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
<?php include_once("header1.php");?>

<!-- top header -->								
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
		<h2 class="heading text-center mb-sm-5 mb-4">Menu</h2>
		<div class="row agileinfo_mail_grids">
			<div class="col-lg-8 agileinfo_mail_grid_right">
				  <form action="" method="post">
					  
					<div class="form-input">
						
					<ul>
                        Title&nbsp&nbsp:<input type="text" name="title"><br><br>
                        Recipe Description&nbsp&nbsp:<input type="text" name="recipe_discription"><br><br>
                        Price&nbsp&nbsp:<input type="text" name="price"><br><br>
                        
						</ul><br><br>
                   	</div>
							
							<div class="ADD-buttons">
								<button type="submit" name="submit" value="submit" class="btn">submit</button>
							</div>
	</body>
	</html>
	
	<?php
	//print_r($_POST);
     if(isset($_POST["submit"]))
   {
	print_r($_POST);
	
    $con=mysqli_connect("localhost","root","","project");

    if(!$con)
    {
      echo mysqli_connect_error($con);
      exit("Problem in db connection");
    }
// insert data
    $insertQuery="INSERT INTO menu(title,recipe_discription,`price`) VALUES('".$_POST['title']."','".$_POST['recipe_discription']."','".$_POST['price']."')";
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
