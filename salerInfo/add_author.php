<?php
	include("connection.php");
	
	if(isset($_POST['submit'])){
		$author_name=$_POST['author_name'];
		$author_bio=$_POST['author_bio'];
		
		//image upload code
		$author_images= $_FILES['author_images']['name'];
		$imagesType= $_FILES['author_images']['type'];
		
		$sql="INSERT INTO author_data(author_name,author_bio,author_images) 
				VALUES ('$author_name','$author_bio','$author_images')";
		
		if($imagesType == 'image/jpeg'){
			if(mysqli_query($con,$sql)){
				echo "Successfully inserted!";
				if($author_images != null){
					move_uploaded_file($_FILES['author_images']['tmp_name'],"../images/author_images/$author_images");
				}
			}
			else
			{
				echo "error!".mysqli_error($con);
			}
		}else{
			echo "Select Images file";
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
                    
		<form action="add_author.php" method="POST" enctype="multipart/form-data">
			Add Author: <br><br>
			Author Name: <br>
			<input type="text" name="author_name" placeholder="Enter Author name..."><br><br>
			
			Author Bio: <br>
			<input type="text" name="author_bio" placeholder="Enter Author bio..."><br><br>
			
			Author Images: <br>
			<input type="file" name="author_images" placeholder="Enter Author images..."><br><br>
			
			<input type="submit" name="submit" value="Add Author">
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