<?php
  
?>

<!DOCTYPE html>
<html>
<head>
  <title>E-book shop </title>
  <!-- Add Bootstrap CSS link -->
  <link rel="stylesheet" href="aboutus.css">
  <script src="https://kit.fontawesome.com/d91d3f60a5.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="header">
  
  <a class="logo" href="user.php">E-book Shop</a>

  <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>

  <div class="icons">
  <a href="cart.php"><button class="btn"><i class="fa-solid fa-cart-shopping"></i></button></a>
      <a href="logout.php"><button class="btn"><i class="fa-solid fa-right-from-bracket"></i></button></a>
  </div>
</div>
    
	<div class="navBar">
		<a href="user.php">Home</a>
		<a href="category.php">Category </a>
		<a href="author.php">Authors</a>
		<a href="shop.php">Shop</a>
		<a href="bolg.php">Blog</a>
		<a href="contactus.php">Contact Us</a>
		<a href="aboutus.php">About us</a>
	</div>

    <div class="container">
        <ul class="list-group">
            <li class="list-group-item active" aria-current="true">Order Summary</li>
            <li class="list-group-item">Deliver to: Wahidul Islam</li>
            <li class="list-group-item">Email to: 143wd.1w@gmail.com</li>
            <li class="list-group-item">Items Total: 1</li>
            <li class="list-group-item">Total Payment: 850tk</li>

        </ul>
    </div>
    Place Order
	<div class="footer">
		<h3>Design By: Wahidul Islam</h3>
	</div>
	

<!-- Add Bootstrap JS scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>