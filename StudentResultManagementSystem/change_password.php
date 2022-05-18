<?php 
  session_start();
  include('admin/includes/config/dbconnect.php');
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

</head>
<body>
<center>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center"></div>
            <div class="col-md-5">

            <?php include('message.php') ?>

                <div class="card">
                    <div class="card-header" style= "background-color: Yellow; color: white">
                        <h3 style= "color: Black;">Change Password</h3>
                    </div>
                    <div class="card-body">

                        <form action="cpassword.php" method = "POST">
                            <div class= "from-group mb-3">
                                <label for="npassword">New Password</label>
                                <input type="npassword" maxlength="30" class="form-control" name="npassword">
                            </div>
                            <div class= "from-group mb-3">
                                <label for="cpassword">Confirm Password</label>
                                <input type="cpassword" maxlength="30" class="form-control" name="cpassword">
                            </div>
                            
                            <div class= "from-group mb-3" >
                                <button type="submit" name = "cpasswordbtn" class="btn btn-primary">Change Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>