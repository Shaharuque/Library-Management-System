<?php
session_start();
require('checksession.php');
$bokid=$_GET['sid'];
$userid=$_SESSION['userid'];
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"bookbooking");
 ?>
<?php
$res=mysqli_query($link,"select * from userinfo where user_id='$userid'");
while ($row=mysqli_fetch_array($res)) {
$address=$row["address"];
}
$res1=mysqli_query($link,"select * from bookinfo where book_id='$bokid'");
while ($row1=mysqli_fetch_array($res1)) {
  $price=$row1["book_price"];
  $bname=$row1["book_name"];
  $aname=$row1["book_author"];
}
mysqli_query($link,"insert into bookinginfo values('','$bokid','$bname','$aname','$userid','$price','$address')");
echo "CONGRATULATION!!! You have successfully orderd. And it cost you $price";
 ?>
