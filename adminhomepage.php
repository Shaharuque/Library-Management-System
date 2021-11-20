<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin Panel</title>
  <style>
    body
    {
      width:400px;
      top:50%;
      left:50%;
      position: absolute;
      transform: translate(-50%,-50%);
      border: 1px solid green;
      height: 400px;
      padding: 20px;
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4);

    }
    h1{
      text-align: center;
      color: red;
    }
    h3{
      text-align: center;
      text-decoration: underline;
    }
    li,a{
      padding: 5px;
      text-decoration: none;
      color:green;
      font-size: 24px;
    }
    .box{
      margin-top: 67px;
    }
  </style>
</head>
<body>
  <h1>Welcome to Admin Panel</h1>
  <h3>Please select one option</h3>
  <div class="box">
  <ul>
    <li><a href="update.php">Update Book Store</a></li>
    <li><a href="order.php">Show Order</a></li>
    <li><a href="sellrequest.php">Sell Request</a></li>
  </ul>
  </div>
</body>
</html>
