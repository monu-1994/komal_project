<?php
if(isset($_GET["id"]) && $_GET["id"] != "")
{



    $con=mysqli_connect("localhost","root","","project");

    if(!$con)
    {
      echo mysqli_connect_error($con);
      exit("Problem in db connection");
    }

$insertQuery="DELETE FROM register
					WHERE id= '".$_GET["id"]."'";
    $res=mysqli_query($con,$insertQuery);
    if($res)
{
	header("Location: http://localhost/komalproject/crispy_project/showlog.php");
}else
{
    echo "Data not deleted";
    echo mysqli_error($con);
}

}else{
	exit("please provide id");
}
?>	
