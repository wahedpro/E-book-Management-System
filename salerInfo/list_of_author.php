<?php
	include("connection.php");
?>

<!DOCTYPE html>
<html>
	<head>
		<title>List Of Author </title>
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
			$sql="SELECT * FROM author_data";
			
			$query=mysqli_query($con,$sql);
			echo "<table border=1>
					<tr>
						<th>Author Images</th>
						<th>Author Name</th>
						<th>Author Bio</th>
						<th>Update</th>
						<th>Delete</th>
					</tr>";
					
			while($data=mysqli_fetch_assoc($query)){
				$author_id= $data['author_id'];
				$author_name= $data['author_name'];
				$author_bio= $data['author_bio'];
				$author_images= $data['author_images'];
				
				echo "<tr>
						<td><img src='../images/author_images/$author_images'></td>
						<td>$author_name</td>
						<td>$author_bio</td>
						<td><a href='#'>Edit</a></td>
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