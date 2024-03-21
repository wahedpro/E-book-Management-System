<?php
  include("../connection.php");

   //list of Author
	$sqlauthor="SELECT * FROM author_data";
	$queryauthor=mysqli_query($con,$sqlauthor);
	
	$list_of_author=array();
	
	while($data=mysqli_fetch_assoc($queryauthor)){
		$author_id= $data['author_id'];
		$author_name= $data['author_name'];
				
		$list_of_author[$author_id]=$author_name;
	}
	
	//list of category
	$sqlcategory="SELECT * FROM category";
	$querycategory=mysqli_query($con,$sqlcategory);
	
	$list_of_category=array();
	
	while($data=mysqli_fetch_assoc($querycategory)){
		$category_id= $data['category_id'];
		$category_name= $data['category_name'];
		
		$list_of_category[$category_id]=$category_name;
		
	}

  
	if(isset($_GET['id'])){
		$getId=$_GET['id'];
		
		$sql="SELECT * FROM book_list WHERE book_id=$getId";
		
		$query=mysqli_query($con,$sql);
		
		$data=mysqli_fetch_assoc($query);
		
		$book_id 			 = $data['book_id'];
		$book_name			 = $data['book_name'];
		$book_description	 = $data['book_description'];
		$book_price			 = $data['book_price'];
		$book_author_name	 = $data['book_author_name'];
		$book_category		 = $data['book_category'];
		$book_entry_date	 = $data['book_entry_date'];
		$Book_publisher_name = $data['Book_publisher_name'];
		$book_images		 = $data['book_images'];	
	}


	if(isset($_POST['add_to_cart'])){

		$book_name			 = $data['book_name'];
		$book_price			 = $data['book_price'];
		$book_images		 = $data['book_images'];
		$book_quantity 		 = 1;	

		$sql="SELECT * FROM `add_to_cart` WHERE cart_book_name = '$book_name'";
		$select_cart=mysqli_query($con, $sql);
		if(mysqli_num_rows($select_cart)){
			echo "Already added to cart";
		}else{
			$insert="INSERT INTO add_to_cart(cart_book_name, cart_price, cart_images, cart_quantity) 
			VALUES('$book_name', '$book_price', '$book_images', '$book_quantity')";
			$insert_cart=mysqli_query($con, $insert);
			echo "add to cart";
		}
	}
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
    <div class="card mb-3">
	<form action="" method="post">
      <div class="row ">		
        <div class="col-md-2">
          <img src="../images/book_images/<?php echo $book_images ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col">
          <div class="card-body">
            <h5 class="card-title"><?php echo $book_name ?></h5>
            <p class="card-text">by: <?php echo $list_of_author[$book_author_name] ?></p>
            <p class="card-text">Category: <?php echo $list_of_category[$book_category] ?></p>
            <p class="card-text">Tk. <?php echo $book_price ?></p>
			<input type="submit" class="btn btn-primary" name="add_to_cart" value="Add to cart">
          </div>
        </div>
		</form>
      </div>
    </div>

    <ul class="list-group mb-3">
      <li class="list-group-item active" aria-current="true">Book Description</li>
      <li class="list-group-item"><?php echo $book_description ?></li>
    </ul>

    <ul class="list-group mb-3">
      <li class="list-group-item active" aria-current="true">Specification</li>
      <li class="list-group-item">Title: <?php echo $book_name ?></li>
      <li class="list-group-item">Author: <?php echo $list_of_author[$book_author_name] ?></li>
      <li class="list-group-item">Publisher: <?php echo $Book_publisher_name ?></li>
      <li class="list-group-item">Edition: <?php echo $book_entry_date ?></li>
  </ul>
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