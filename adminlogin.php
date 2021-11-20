<?php
$username=$_POST['uname'];
$password=$_POST['psw'];
mysql_connect("localhost","root");
mysql_select_db("bookbooking");
$result=mysql_query("select * from admininfo where username='$username' and password='$password'") or die("Faild to query database".mysql_error());
$row= mysql_fetch_array($result);
if ($row['username']==$username && $row['password']==$password ) {
  header("location: adminhomepage.php");
} else {
  echo "log in faild";
}

 ?>
