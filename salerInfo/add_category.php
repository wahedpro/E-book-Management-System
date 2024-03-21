<?php
	include("connection.php");
	
	if(isset($_GET['category_name'])){
		$category_name=$_GET['category_name'];
		
		$sql="INSERT INTO category(category_name) VALUES ('$category_name')";
		if(mysqli_query($con,$sql))
		{
			echo "Successfully inserted!";
		}
		else
		{
			echo "error!".mysqli_error($con);
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
				<form action="add_category.php" method="GET">
			Add Category: <br>
			<input type="text" name="category_name" placeholder="category name here"><br><br>
			<input type="submit" value="Add">
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