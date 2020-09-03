<?php
echo "db con";
//Database connection

$con = mysqli_connect("localhost","root","","project");

if(!$con){
    exit("Problem in db connection");
}

?>