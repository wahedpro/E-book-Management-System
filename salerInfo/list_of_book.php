<?php
	include("connection.php");
	
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
?>

<!DOCTYPE html>
<html>
	<head>
		<title>List Of Book </title>
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
				<?php
			$sql="SELECT * FROM book_list";
			
			$query=mysqli_query($con,$sql);
			echo "<table border=1>
					<tr>
						<th>Book Images</th>
						<th>Book Name</th>
						<th>Book Description</th>
						<th>Book Price</th>
						<th>Book Author name</th>
						<th>Book Category</th>
						<th>Book Entry Date</th>
						<th>Book Publisher Name</th>
						<th>Update</th>
						<th>Delete</th>
					</tr>";
					
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
				
				echo "<tr>
						<td><img src='../images/book_images/$book_images'></td>
						<td>$book_name</td>
						<td>$book_description</td>
						<td>$book_price</td>
						<td>$list_of_author[$book_author_name]</td>
						<td>$list_of_category[$book_category]</td>
						<td>$book_entry_date</td>
						<td>$Book_publisher_name</td>
						<td><a href='edit_book.php?id=$book_id'>Edit</a></td>
						<td><a href='#'>Delete</a></td>
					 </tr>";
			}
			echo "</table>";
		?>
                </div> <!--Right side start-->
            </div>
        </div>
        <div class="container-fluid"> <!--footer part start-->
            <?php include('component/footer.php') ?>
        </div> <!--footer part end-->
    </div> 
	</body>
</html>