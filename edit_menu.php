<?php
require_once("dbconnection1.php");
	print_r($_POST);
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
print_r($_POST);


   echo $insertQuery="UPDATE Menu1 SET 
					`title` = '".$_POST['title']."',
					`recipe_discription` ='".$_POST['recipe_discription']."',
					`price` ='".$_POST['price']."'
					
					
					
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

   echo $query= "SELECT * FROM menu WHERE id = '".$_GET["id"]."' ";
    $res=mysqli_query($con,$query);

	$user1 = mysqli_fetch_assoc($res);

	print_r($user1);	
    
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
		<h2 class="heading text-center mb-sm-5 mb-4">Add Recipe</h2>
		<div class="row agileinfo_mail_grids">
			<div class="col-lg-8 agileinfo_mail_grid_right">
				  <form action="" method="post">
					  
					<div class="form-input">
						
					<ul>
                        Title&nbsp&nbsp:<input type="text" name="title" value="<?php echo $user1["title"];?>"><br><br>
                        Recipe Description&nbsp&nbsp:<input type="text" name="recipe_discription" value="<?php echo $user1["recipe_discription"];?>"><br><br>
                        Price&nbsp&nbsp:<input type="text" name="price"><br><br>
                        
						</ul><br><br>
                   	</div>
							
							<div class="ADD-buttons">
								<button type="submit" name="submit" value="submit" class="btn">submit</button>
								<?php print_r($_POST)?>
						</div>
	</body>
	</html>
	