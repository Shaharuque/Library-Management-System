<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"bookbooking");
$res=mysqli_query($link,"select * from bookinginfo");

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Order</title>
  <style>
  * {
  font-family: sans-serif; /* Change your font family */
  width: 700px;
  margin: 20px auto;
  text-align: center;
}
h3{
    color: #009879;
    text-decoration: underline;
    font-size: 25px;
}
.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
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

  </style>
</head>
<body>
  <h3>ORDER LIST</h3>
  <table class="content-table">
    <thead>
      <tr>
        <th>Sl</th>
        <th>Book_Code</th>
        <th>Book_Name</th>
        <th>Book_Author</th>
        <th>User_Id</th>
        <th>Book_Price</th>
        <th>User_Address</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while ($row=mysqli_fetch_array($res)) {
        ?>
        <tr>
          <td><?php echo $row["id"] ?></td>
          <td><?php echo $row["book_id"] ?></td>
          <td><?php echo $row["book_name"] ?></td>
          <td><?php echo $row["book_author"] ?></td>
          <td><?php echo $row["user_id"] ?></td>
          <td><?php echo $row["book_price"] ?></td>
          <td><?php echo $row["user_address"] ?></td>
        </tr>
        <?php
      }
       ?>

    </tbody>
  </table>
</body>
</html>
