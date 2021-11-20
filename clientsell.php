<?php
session_start();
require('checksession.php');
$userid=$_SESSION['userid'];
$bookid=$_POST['barcode'];
$flag=0;
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"bookbooking");
$res=mysqli_query($link,"select * from bookinginfo");
$res2=mysqli_query($link,"select * from bookinginfo where user_id='$userid'");
while ($row=mysqli_fetch_array($res)) {
  if($userid==$row['user_id'] && $bookid==$row['book_id']){
    $flag=1;
  }
}
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <style media="screen">
   * {
   font-family: sans-serif; /* Change your font family */
 }
 .img{
   position: relative;
 }
 .img img{
      width: 100%;
      filter: blur(7px);
 }
 .tag{
   position: absolute;
   z-index: 100;
   top:10%;
   left:50%;
   transform: translate(-50%,-50%);
 }
 h3{
     color: white;
     font-size: 25px;
     text-align: center;
 }
 .content-table {
   position: absolute;
   border-collapse: collapse;
   width: 700px;
   margin: 40px auto;
   top:25%;
   left:50%;
   transform: translate(-50%,-50%);
   font-size: 0.9em;
   min-width: 400px;
   border-radius: 5px 5px 0 0;
   overflow: hidden;
   box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
   text-align: center;
 }

 .content-table thead tr {
   background-color: #009879;
   color: #ffffff;
   text-align: left;
   font-weight: bold;
 }

 .content-table th,
 .content-table td {
   padding: 12px 15px;
   text-align: center;
 }

 .content-table tbody tr {
   border-bottom: 1px solid #dddddd;
 }

 .content-table tbody tr:nth-of-type(even) {
   background-color: #f3f3f3;
   font-weight: bold;
   color: #009879;
 }

 .content-table tbody tr:last-of-type {
   border-bottom: 2px solid #009879;
 }
 .tag h4{
   text-align: center;
   color: black;
   text-decoration: underline;:
 }
   </style>
 </head>
 <body>
   <div class="tag">
     <?php
     if ($flag==1) {
       echo "<h3>CONGRATULATION!!! You can sell this book.<br>We will inform you later.</h3>";
     } else {
       echo "<h3>Sorry!!! You can not sell this book</h3>";
     }
      ?>
     <h4>Here is your purchase list</h4>
   </div>
   <div class="img">
     <img src="book.jpg" alt="">
   <table class="content-table">
     <thead>
       <tr>
         <th>Book_Code</th>
         <th>Book_Name</th>
         <th>Book_Author</th>
       </tr>
     </thead>
     <tbody>
       <?php
       while ($row2=mysqli_fetch_array($res2)) {
         ?>
         <tr>
           <td><?php echo $row2['book_id'] ?></td>
           <td><?php echo $row2['book_name'] ?></td>
           <td><?php echo $row2['book_author'] ?></td>
         </tr>
         <?php
       }
        ?>

     </tbody>
   </table>
   </div>
 </body>
 </html>

<?php
if ($flag==1) {
  $book=mysqli_query($link,"select * from bookinfo where book_id='$bookid'");
  while ($bookres=mysqli_fetch_array($book)) {
    $name=$bookres['book_name'];
    $author=$bookres['book_author'];
    $price=$bookres['book_price'];
  }
  $user=mysqli_query($link,"select * from userinfo where user_id='$userid'");
  while ($userres=mysqli_fetch_array($user)) {
    $address=$userres['address'];
  }
  mysqli_query($link,"insert into sellinfo values('','$bookid','$name','$author','$userid','$price','$address')");
}
 ?>
