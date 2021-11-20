<?php
session_start();
$username=$_POST['user'];
$password=$_POST['password'];
$_SESSION['userid']=$username;
mysql_connect("localhost","root");
mysql_select_db("bookbooking");
$result=mysql_query("select * from userinfo where user_id='$username' and password='$password'") or die("Faild to query database".mysql_error());
$row= mysql_fetch_array($result);
if ($row['user_id']==$username && $row['password']==$password ) {
  header("location: homepage.php");
} else {
  echo "log in faild";
}

 ?>
