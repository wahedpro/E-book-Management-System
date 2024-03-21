<?php
	include("../connection.php");
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
			<a href="#"><button class="btn"><i class="fa fa-user"></i></button></a>
			
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

	<div class="productbar mb-3">
		<h2>Author</h2>
	</div>
	

<div class="container mb-3 text-center">
		<div class="card-deck">

	<?php
			$sql="SELECT * FROM author_data limit 4";
			
			$query=mysqli_query($con,$sql);		
			while($data=mysqli_fetch_assoc($query)){
				$author_id= $data['author_id'];
				$author_name= $data['author_name'];
				$author_bio= $data['author_bio'];
				$author_images= $data['author_images'];
	?>
		<div class="card ">
			<img class="card-img-top mx-auto d-block p-2" src="../images/author_images/<?php echo $author_images ?>" style="height: 150px; width: 150px; border-radius: 50%; border: 10px;">
			<div class="card-body ">
				<h5 class="card-title"><?php echo $author_name ?> </h5>
				<p class="card-text"><?php echo $author_bio ?></p>
			</div>
  		</div>
		<?php } ?>
	</div>
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