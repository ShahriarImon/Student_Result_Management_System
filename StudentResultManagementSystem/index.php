<?php
session_start();
include('includes/navbar.php');
include("admin/includes/config/dbconnect.php");
if(!isset($_SESSION['auth_user_id'])){
    header("location: login.php");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        body{
            background-image: url("admin/includes/pics/kym-mackinnon-Hfo98iqJ8jA-unsplash.jpg");
            background-size: 1920px 1080px;
        }
</style>
</head>
<body>

<div class="container">
    <div class="container" >
        <div class="row"></div>
        <div class="col-md-12">

        <h1 style = "color: yellow; text-align: center;"; >Welcome to show the result</h1>
           <?php if(isset($_SESSION['auth'])){ ?>
           
                <header>
                    <div class="content">
                    <?php 
                    $user_id = $_SESSION['auth_user_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM users WHERE id = '$user_id'");
                        if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                        }
                    ?>
                    <div class="details">
                        <span><h3><b style = "color: yellow"><?php echo $row['fname']. " " . $row['lname'] ?></b></h3></span>
                    </div>
                    </div>
                   
                </header>
                <?php include('admin/message.php') ?>
                
                <form action="show_grade.php" method="POST">
                <label for="semester" style = "color: yellow; text-align: center;">semester</label>
                    <input type="text" name ="semester" class="form-control" placeholder="Input the Semester result you want">
                
                <div class="d-grid gap-2">
                 <button class="btn btn-outline-info" name ="gradebtn" type="submit">Grade Report</button>
                </div>

                </form>
                
                
            
        </div>
    </div>

</div>
<?php }; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>