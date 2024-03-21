<?php
	include("connection.php");
	
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
	
	if(isset($_GET['book_name'])){
		$new_book_name			 = $_GET['book_name'];
		$new_book_id 			 = $_GET['book_id'];
		$new_book_description	 = $_GET['book_description'];
		$new_book_price			 = $_GET['book_price'];
		$new_book_author_name	 = $_GET['book_author_name'];
		$new_book_category		 = $_GET['book_category'];
		$new_book_entry_date	 = $_GET['book_entry_date'];
		$new_Book_publisher_name = $_GET['Book_publisher_name'];
		
		$sqledit ="UPDATE book_list SET book_name='$new_book_name', book_description='$new_book_description', 
		book_price=$new_book_price, book_author_name='$new_book_author_name',
		book_category='$new_book_category', book_entry_date='$new_book_entry_date',
		Book_publisher_name='$new_Book_publisher_name' WHERE book_id = $new_book_id";
		
		if (mysqli_query($con, $sqledit)){
			echo "updated successfully";
		} else {
			echo "updating record: " . mysqli_error($con);
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit Book Data </title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	<body>

	<div class="container">
        <div class="container-fluid mb-1 mt-3 border-bottom"> <!--Header part start-->
            <?php include('component/header.php') ?>
        </div> <!--Header Part end-->
        <div class="container-fluid"> <!--Body part start-->
            <div class="row">
                <div class="col-sm-3"> <!--Left side start-->
                    <?php include('component/leftside.php') ?>
                </div> <!--Left side start-->
                <div class="col-sm-9"> <!--Right side start-->
				<form action="edit_book.php" method="GET" enctype="multipart/form-data">
			Edit Book: <br><br>
			
			Book Name: <br>
			<input type="text" name="book_name" value="<?php echo $book_name ?>"><br><br>
			
			Book Description: <br>
			<input type="text" name="book_description" value="<?php echo $book_description ?>"><br><br>
			
			Book Price: <br>
			<input type="text" name="book_price" value="<?php echo $book_price ?>"><br><br>
			
			Book Author Name: <br>
			<select name="book_author_name">
				<?php
					//list of Author
					$sqlauthor="SELECT * FROM author_data";
					$queryauthor=mysqli_query($con,$sqlauthor);
				
					while($data=mysqli_fetch_assoc($queryauthor)){
						$author_id= $data['author_id'];
						$author_name= $data['author_name'];
				?>
					<option value='<?php echo $author_id ?>'<?php if($author_id == $book_author_name){echo 'selected'; } ?>> 
					<?php echo $author_name ?></option>";
				
				<?php } ?>
				
			</select>
			<br><br>
			Book Category: <br>
			<select name="book_category">
				<?php
					$sqlcategory="SELECT * FROM category";
					$querycategory=mysqli_query($con,$sqlcategory);
				
					while($data=mysqli_fetch_assoc($querycategory)){
						$category_id= $data['category_id'];
						$category_name= $data['category_name'];
				?>
					<option value='<?php echo $category_id ?>'<?php if($category_id == $book_category){echo 'selected'; } ?>> 
					<?php echo $category_name ?></option>";
					
				<?php } ?>
			</select>
			<br><br>
			
			Book Entey Date: <br>
			<input type="date" name="book_entry_date" value="<?php echo $book_entry_date ?>" ><br><br>
			
			Book Publisher Name: <br>
			<input type="text" name="Book_publisher_name" value="<?php echo $Book_publisher_name ?>"><br><br>
			
			Book Images: <br>
			<input type="file" name="book_images" value="<?php echo $book_images ?>" ><br><br>
			
			
			<input type="text" name="book_id" value="<?php echo $book_id ?>" hidden>
			
			<input type="submit" name="submit" value="Add Book">
		</form>
                </div> <!--Right side start-->
            </div>
        </div>
        <div class="container-fluid"> <!--footer part start-->
            <?php include('component/footer.php') ?>
        </div> <!--footer part end-->
</div>
	</body>
</html>