<?php
    session_start();
    $publisher_name = $_SESSION['publisher_name'];
    if(!empty($publisher_name)){
?>
<div class="row">
    <div class="col-sm-7">
        <h2>Saler Dashboard</h2>
    </div>
    <div class="col-sm-5">
        <div class="d-flex">
            <h3 ><?php echo $publisher_name ?></h3>
            <h3 class="ml-2"><a href="logout.php">Logout</a></h3>
        </div>
        
    </div>
</div>

<?php
    }
    else{
        header("Location:login.php");
    }
?>