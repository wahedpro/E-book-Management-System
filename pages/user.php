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
	$sqlcategory="SELECT * FROM category limit 4";
	$querycategory=mysqli_query($con,$sqlcategory);
	
	$list_of_category=array();
	
	while($data=mysqli_fetch_assoc($querycategory)){
		$category_id= $data['category_id'];
		$category_name= $data['category_name'];
		
		$list_of_category[$category_id]=$category_name;
		
	}

?>

<!DOCTYPE html>
<html>
<head>
  <title>E-book shop </title>
  <!-- Add Bootstrap CSS link -->
  <link rel="stylesheet" href="user.css">
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
	
	<div class="Slider">
		<img src="../images/E-BOOKS.png" alt="">
	</div>
	
	<div class="productbar">
		<h2>Products</h2>
	</div>
	
	<div class="container">
    <div class="row ">
    <?php
			$sql="SELECT * FROM book_list";
			
			$query=mysqli_query($con,$sql);			
			while($data=mysqli_fetch_assoc($query)){
				$book_id = $data['book_id'];
				$book_name= $data['book_name'];
				$book_description= $data['book_description'];
				$book_price= $data['book_price'];
				$book_author_name= $data['book_author_name'];
				$book_category= $data['book_category'];
				$book_entry_date= $data['book_entry_date'];
				$Book_publisher_name= $data['Book_publisher_name'];
				$book_images= $data['book_images'];
      
    ?>
      <div class="col ml-3 py-3 text-center">
        <div class="card" style="width: 14rem;">
          <img src="../images/book_images/<?php echo $book_images ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $book_name ?></h5>
            <p class="card-text"><?php echo $list_of_author[$book_author_name] ?></p>
            <h5 class="card-title"><?php echo $book_price ?> Tk</h5>
            <a href="product_view.php?id=<?=$book_id?>"  class="btn btn-primary text-center">View Details</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>

	<div class="productbar">
		<a href="shop.php"><h2>View All</h2></a>
	</div>

	<div class="container mt-3 mb-3 d-flex justify-content-around">
	<div class="row">
    <div class="col">
	<div class="card" style="width: 18rem;">
  		<img src="../images/noties/1.png" class="card-img-top" alt="...">
	</div>
    </div>
    <div class="col">
	<div class="card" style="width: 18rem;">
  		<img src="../images/noties/2.png" class="card-img-top" alt="...">
	</div>
    </div>
    <div class="col">
	<div class="card" style="width: 18rem;">
  		<img src="../images/noties/3.png" class="card-img-top" alt="...">
	</div>
    </div>
  </div>
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