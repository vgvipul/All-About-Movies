<?php
$con=mysqli_connect("localhost","root","","all_about_movies") or die('error');
$NAME=$_POST['name'];
$PHONE=$_POST['phone'];

$EMAIL=$_POST['email'];


$sql="INSERT INTO info(Name,Email,Phone) VALUES('$NAME','$EMAIL','$PHONE')";

if(!mysqli_query($con,$sql)){
	echo('SORRY! YOUR DATA IS NOT STORED IN OUR DATABASE');
}
else{
	echo('YOUR DATA HAS BEEN SUCCESSFULLY SAVED IN OUR DATABASE');
    echo ('<a href="project.html">Proceed to Webpage</a>');
	}
?>