<?php
session_start();
require('checksession.php');
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"bookbooking");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>WOWBOOK</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="home.css">
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="logo">
        <h1>WOWBOOK</h1>
      </div>
      <div class="menu">
        <ul>
          <li><a href="homepage.php">Home</a></li>
          <li class="dropdown">
            <a class="dropdownbtn"href="javascript:void(0)">Chategory</a>
            <div class="dropdown-content">
              <a href="cse.php">CSE</a>
              <a href="eee.php">EEE</a>
              <a href="med.php">Medical</a>
              <a href="math.php">Mathematics</a>
            </div>
          </li>
          <li><a href="about.php">About us</a></li>
          <a class="sell" href="sell.php">Sell Here</a>
          <a class="logout" href="logout.php">Log out</a>
        </ul>
      </div>
    </div>
  </header>
  <br>
  <br>
  <div class="container">
    <div class="row">
      <?php
      $res=mysqli_query($link,"select * from bookinfo");
      while($row=mysqli_fetch_array($res))
      {
        $_SESSION['id']=$row["book_id"];
        //echo $_SESSION['id'];
        ?>

        <div class="col-sm-6 col-md-3">
          <div class="product">
            <div class="img-box">
              <img src="./asset/<?php echo $row["book_img"]; ?>" alt="book">
            </div>
            <div class="details">
              <h2 name="bookname"><?php echo $row["book_name"]; ?><br> <span><?php echo $row["book_author"]; ?></span></h2>
              <div class="price">$<?php echo $row["book_price"]; ?></div>
              <label for="">Description</label>
              <p><?php echo $row["book_description"]; ?></p>
              <a href="details.php?bid=<?php echo $row["book_id"]; ?>">Details</a>
            </div>
          </div>
        </div>
        <?php
      }
       ?>
    </div>
  </div>

</body>
</html>
