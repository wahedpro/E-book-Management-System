<?php
  include("../connection.php");


if(isset($_POST['update_btn'])){

	$update_quantity = $_POST['update_quantity'];
	$cart_id = $_POST['cart_id'];

	$update_sql="UPDATE add_to_cart SET cart_quantity='$update_quantity' WHERE cart_id='$cart_id'";
	$update_sql_query=mysqli_query($con,$update_sql);
	if($update_sql_query){
		header("Location:cart.php");
	}
};

if(isset($_GET['remove'])){
	$remove_id=$_GET['remove'];
	$remove_sql="DELETE FROM add_to_cart WHERE cart_id='$remove_id'";
	mysqli_query($con, $remove_sql);
};

if(isset($_GET['delete_all'])){
	$remove_all_sql="DELETE FROM add_to_cart";
	mysqli_query($con, $remove_all_sql);
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>E-book shop </title>
  <!-- Add Bootstrap CSS link -->
  <link rel="stylesheet" href="cart.css">
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
		<a href="index.php">Home</a>
		<a href="category.php">Category </a>
		<a href="author.php">Authors</a>
		<a href="shop.php">Shop</a>
		<a href="bolg.php">Blog</a>
		<a href="contactus.php">Contact Us</a>
		<a href="aboutus.php">About us</a>
	</div>
	
	<div class="container">
		<section class="shopping-cart">
			<h2>Shopping Cart</h2>
			<table>
				<thead>
					<th>Images</th>
					<th>Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total Price</th>
					<th>Action</th>
				</thead>
				<tbody>
					<?php
						$sql="SELECT * FROM add_to_cart";
						$gread_total=0;
						$sqlcart=mysqli_query($con, $sql);		
						while($data=mysqli_fetch_assoc($sqlcart)){
							$cart_id= $data['cart_id'];
							$cart_book_name= $data['cart_book_name'];
							$cart_price= $data['cart_price'];
							$cart_images= $data['cart_images'];
							$cart_quantity= $data['cart_quantity'];
							
					?>

					<tr>
						<td><img src="../images/book_images/<?php echo $cart_images ?>" height="100"></td>
						<td><?php echo $cart_book_name ?></td>
						<td><?php echo $cart_price ?>TK</td>
						<td>
							<form action="" method="post">
							<input type="hidden" name="cart_id" value="<?php echo $cart_id ?>">
							<input type="number" name="update_quantity" min="1" value="<?php echo $cart_quantity ?>">
							<input type="submit" class="btn btn-primary" name="update_btn" value="Update">
							</form>
						</td>
						<td><?php echo $total= $cart_price * $cart_quantity ?> TK</td>
						<td><a href="cart.php?remove=<?php echo $cart_id ?>"  class="btn btn-danger" onclick="return confirm('Do you want to delete this book?')">Remove</a></td>
					</tr>
					<?php
						$gread_total = (int)$total+ (int)$gread_total;
						};
					?>
					<tr>
						<td><a href="shop.php" class="btn btn-primary mt-3" style="margin-top:0;">Continue Shopping</a></td>
						<td colspan="3">Gread Total</td>
						<td><?php echo $gread_total; ?> TK</td>
						<td><a href="cart.php?delete_all" class="btn btn-danger" onclick="return confirm('Do you want to delete all books?')">Delete all</a></td>

					</tr>
				</tbody>
			</table>
			<div class="checkout_btn text-center">
				<a href="checkout.php" class="btn btn-success <?= ($gread_total>1)?'':'disabled' ?>">Place Order</a>
			</div>
		</section>
	</div>
	
	<div class="footer">
		<h3>Design By: Wahidul Islam</h3>
	</div>
	

<!-- Add Bootstrap JS scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>