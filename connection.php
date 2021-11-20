<?php
$firstname=$_POST['first-name'];
$lastname=$_POST['last-name'];
$userid=$_POST['user-name'];
$phone=$_POST['phonenumber'];
$address=$_POST['address'];
$password=$_POST['signuppass'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"bookbooking");
mysqli_query($link,"insert into userinfo values('$firstname','$lastname','$userid','$phone','$address','$password')");
?>
