<?php
	include("connection.php");
	
	if(isset($_POST['submit'])){
		$book_name=$_POST['book_name'];
		$book_description=$_POST['book_description'];
		$book_price=$_POST['book_price'];
		$book_author_name=$_POST['book_author_name'];
		$book_category=$_POST['book_category'];
		$book_entry_date=$_POST['book_entry_date'];
		$Book_publisher_name=$_POST['Book_publisher_name'];
		
		//image upload code
		$book_images= $_FILES['book_images']['name'];
		$imagesType= $_FILES['book_images']['type'];
		
		
		$sql="INSERT INTO book_list(book_name, book_description, book_price, book_images, book_author_name, book_category, book_entry_date, Book_publisher_name)
		VALUES ('$book_name','$book_description',$book_price,'$book_images','$book_author_name','$book_category','$book_entry_date','$Book_publisher_name')";
				
		
		if($imagesType == 'image/jpeg'){
			if(mysqli_query($con,$sql)){
				echo "Successfully inserted!";
				if($book_images != null){
					move_uploaded_file($_FILES['book_images']['tmp_name'],"../images/book_images/$book_images");
				}
			}
			else
			{
				echo "error!".mysqli_error($con);
			}
		}else{
			echo "Select jpeg file";
		}
		
		
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Add Category </title>
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
				<form action="add_book.php" method="POST" enctype="multipart/form-data">
			Book Name: <br>
			<input type="text" name="book_name" placeholder="Enter Book name..."><br><br>
			
			Book Description: <br>
			<input type="text" name="book_description" placeholder="Enter Book Description.."><br><br>
			
			Book Price: <br>
			<input type="text" name="book_price" placeholder="Enter Book Price"><br><br>
			
			Book Author Name: <br>
			<select name="book_author_name">
				<?php
					//list of Author
					$sqlauthor="SELECT * FROM author_data";
					$queryauthor=mysqli_query($con,$sqlauthor);
				
					while($data=mysqli_fetch_assoc($queryauthor)){
						$author_id= $data['author_id'];
						$author_name= $data['author_name'];
				
						echo "<option value='$author_id'>$author_name</option>";
					}
				?>
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
				
						echo "<option value='$category_id'>$category_name</option>";
					}
				?>
			</select>
			<br><br>
			
			Book Entey Date: <br>
			<input type="date" name="book_entry_date" placeholder="Select Entey Date"><br><br>
			
			Book Publisher Name: <br>
			<input type="text" name="Book_publisher_name" placeholder="Enter Book publisher name"><br><br>
			
			Book Images: <br>
			<input type="file" name="book_images" placeholder="Enter Book images..."><br><br>
			
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