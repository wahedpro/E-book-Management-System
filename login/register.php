<?php
  include("../connection.php");
   

if(isset($_POST['submit']))
{
    $firstName=$_POST['firstName'];	
    $lastName=$_POST['lastName'];
    $gender=$_POST['gender'];
	  $email=$_POST['email'];
	  $university_name =$_POST['university_name'];
	  $password=$_POST['password'];
	
    if(!empty($firstName) && !empty($lastName) && !empty($gender) && !empty($email) && !empty($university_name) && !empty($password)){
        $query="insert into userinfo (first_name, last_name, gender, email, university_name, password)
        values('$firstName','$lastName','$gender','$email','$university_name','$password')";
	    if(mysqli_query($con, $query))
	    {
		    echo "Successfully inserted!";
      }
	    else
	    {
		    echo "error!".mysqli_error($con);
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
 <link rel="stylesheet" href="registerPage.css">
  <script src="https://kit.fontawesome.com/d91d3f60a5.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
    </script>

</head>
<body>

	<div class="header">
  
		<a class="logo" href="../index.html">E-book Shop</a>
	
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	
		<div class="icons">
			<a href="login.php"><button class="btn"><i class="fa fa-user"></i></button></a>
			
        </div>
	</div>
    
	<div class="navBar">
		<a href="../index.html">Home</a>
		<a href="../pages/category.php">Category </a>
		<a href="../pages/author.php">Authors</a>
		<a href="../pages/shop.php">Shop</a>
		<a href="../pages/bolg.php">Blog</a>
		<a href="../pages/contactus.php">Contact Us</a>
		<a href="../pages/aboutus.php">About us</a>
	</div>
	
  <form class="form-login"style="max-width:480px; margin: auto" action="register.php" method="post">
      <h1 class="text-center mb-4">Create Your Account</h1>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
        <input type="text" name="firstName" class="form-control" placeholder="Enter Your First name" />
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
        <input type="text" name="lastName" class="form-control" placeholder="Enter Your Last name" />
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-building-columns"></i></span>
        <input type="text" name="university_name" class="form-control" placeholder="Enter Your School/Collage/University Name" />
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text mr-3" id="basic-addon1"><i class="fa-solid fa-venus-mars"></i></span>
        <input type="radio" class="btn-check mr-2" name="gender" value="Male" id="option1" autocomplete="off" />
        <label class="btn btn-secondary" for="option1">Male</label>

        <input type="radio" class="btn-check mr-2 ml-3" name="gender" value="Female" id="option2" autocomplete="off" />
        <label class="btn btn-secondary" for="option2">Female</label>
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
        <input type="email" name="email" class="form-control" placeholder="Enter Your Email" />
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
        <input type="password" name="password" name="password" class="form-control" placeholder="Enter Your Password" />
      </div>
      
      <div class="text-center mt-3">
        <button class="btn btn-primary" name="submit">Create Now</button>
        <a href="login.php" class="nav-link mb-3">Already have an account?</a>
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