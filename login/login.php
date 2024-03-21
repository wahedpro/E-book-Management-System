<?php
    include("../connection.php");
session_start();
if(empty($_SESSION['email'])){
 if(isset($_POST['submit']))
 {
     $email    = $_POST['email'];
     $password = $_POST['password'];
     
     if(!empty($email) && !empty($password)){
        $sql="select email,password from userinfo where email='$email' and password='$password'";
        $r=mysqli_query($con,$sql);

        if(mysqli_num_rows($r)>0)
        {   
          $data=mysqli_fetch_array($r);
				  $email=$data['email'];
          $_SESSION['email']=$email;
          header("Location:../pages/user.php");
        }
        else
        {
             echo "Create Account";
        }
     }
     else{
         echo "<p style='color: red;'>Fil Up All Field</p>";
     }
 }
 
?>

<!DOCTYPE html>
<html>
<head>
  <title>E-book shop </title>
  <!-- Add Bootstrap CSS link -->
  <link rel="stylesheet" href="login.css">
  <script src="https://kit.fontawesome.com/d91d3f60a5.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<div class="header">
  
		<a class="logo" href="../index.php">E-book Shop</a>
	
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	
		<div class="icons">
			<a href="#"><button class="btn"><i class="fa fa-user"></i></button></a>
			
        </div>
	</div>
    
	<div class="navBar">
		<a href="../index.php">Home</a>
		<a href="../pages/category.php">Category </a>
		<a href="../pages/author.php">Authors</a>
		<a href="../pages/shop.php">Shop</a>
		<a href="../pages/bolg.php">Blog</a>
		<a href="../pages/contactus.php">Contact Us</a>
		<a href="../pages/aboutus.php">About us</a>
	</div>


    <form class="form-login"style="max-width:480px; margin: auto" action="login.php" method="post">
      <h1 class="text-center mb-4">User Login</h1>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
        <input type="email" name="email" class="form-control" placeholder="Enter Your Email..." />
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
        <input type="password" name="password" name="password" class="form-control" placeholder="Enter Your Password.." />
      </div>
      
      <div class="text-center mt-3">
          <button class="btn btn-primary" name="submit">Login</button>
            <a href="register.php" class="nav-link">Create new account</a>
            <p class="text-muted">
                You are a seller? <a href="../salerInfo/login.php" class="text-reset">Login here</a>.
            </p>
      </div>
    </form>


    

	<div class="footer">
		<h3>Design By: Wahidul Islam</h3>
	</div>
	

<!-- Add Bootstrap JS scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php } 
	else{
		header("Location:user.php");
	}
	?>