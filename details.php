<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"bookbooking");
 ?>
<?php
session_start();
$id=$_GET['bid'];
$res=mysqli_query($link,"select * from bookinfo where book_id='$id'");
$com=mysqli_query($link,"select * from comment where book_id='$id'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Details</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <style>
    body{
      background: #e7e7e7;
      background-image: url(book.jpg);
    }
    .upperpart{
      display: flex;
    }
    .img_box{
      overflow: hidden;
      border: 1px solid green;
      width: 400px;
      height: 450px;
      padding: 20px;
      text-align: center;
      margin: 44px 50px 0px 50px;
      box-shadow: 0 8px 16px rgba(0,0,0,0.4);
      background: #f2f2f2;
      border-radius: 10px;
    }
    .img_box img{
      width: 80%;
      margin: auto;
      box-sizing: border-box;
    }
    .details_box
    {
      box-sizing: border-box;
      background: rgba(0,0,0,0.5);
      width: 500px;
      height: 500px;
      text-align: center;
      margin: 46px 50px 0px 50px;
    }
    .details{
      text-align: center;
      color: #EDF8FC;
      text-shadow: 2px 2px 13px #FDFDFD;
      margin-top: 58px;
    }
    .bname,.aname{
      font-weight: bold;
      color: #6c5ce7;
      font-size: 24px;
    }
    h3{
      font-weight: lighter;
    }
    .description
    {
      font-weight: bold;
      color: #368CCC;
    }
    .bt{
      width:140px;
      padding: 10px;
      margin: 50px auto;
      background-color: #368CCC;
      border-radius: 5px;
    }
    a{
      text-decoration: none;
      color: white;
      margin-left: 23px;
      background-color: #368CCC;
      position: relative;
    }
    i{
      position: absolute;
      left: -25px;
      top: -2px;
    }
    .comment{
      margin-left: 50px;
    }
    .comment textarea{
      border: 1px solid gray;
      border-radius: 5px;
    }
    .comment input{
      height: 25px;
      width: 100px;
      font-size: 14px;
      border-radius: 13px;
      background:#368CCC;
      color:white;
      cursor:pointer;
    }
    .comment p{
      margin: 1px;
    }
    .comment .usname{
      font-size: 20px;
      color: blue;
    }
  </style>
</head>
<body>
  <div class="upperpart">
<?php
while ($row=mysqli_fetch_array($res)) {
 ?>
 <div class="img_box">
   <img src="asset/<?php echo $row["book_img"]; ?>" alt="book">
 </div>
 <div class="details_box">
   <h2 class="details">DETAILS</h2>
   <span class="bname">Name: <?php echo $row["book_name"] ?></span>
   <br>
   <span class="aname">Author: <?php echo $row["book_author"] ?></span>
 <h3 class="description">Description</h3>
 <p><?php echo $row["book_description"] ?></p>
 <h3>Price: <span>$<?php echo $row["book_price"] ?></span></h3>
 <div class="bt">
   <a href="cart.php?sid=<?php echo $row["book_id"] ?>" class="submit2"><i class="material-icons">
   shopping_cart
 </i>Place Order</a>
 </div>
 </div>
 <?php
}
  ?>
  </div>
  <div class="comment">
    <?php
    while ($com1=mysqli_fetch_array($com)) {
      ?>
      <p class="usname"><?php echo $com1["user_name"] ?></p>
      <p><?php echo $com1["comment"] ?></p>
      <br>
      <?php
    }
     ?>

    <form action="" method="post">
 <textarea name="msg" rows="5" cols="50"></textarea>
 <br>
 <input type="submit" name="csubmit" value="Comment">
 </form>
 </div>
 <?php
 $userid=$_SESSION['userid'];
 $res=mysqli_query($link,"select * from userinfo where user_id='$userid'");
 while ($row=mysqli_fetch_array($res)) {
 $username=$row["first_name"];
 }
 if (isset($_POST["csubmit"])) {
    $msg= $_POST['msg'];
   mysqli_query($link,"insert into comment values('','$id','$userid','$username','$msg')");
 }
  ?>
</body>
</html>
