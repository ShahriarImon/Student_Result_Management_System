<?php
session_start();
//if 1 user logged in then he will not be able to go to login page again without logout
if(isset($_SESSION['auth'])){
  header("location: index.php");
  exit;
}

$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include('admin/includes/config/dbconnect.php');
  $id = mysqli_real_escape_string($conn, $_POST["id"]);
  $password = mysqli_real_escape_string($conn, $_POST["password"]);
  
  
  
 
 $sql= "select * from users where id= '$id'";

  $result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);

  if($num > 0){
    $row = mysqli_fetch_assoc($result);
    $status = $row['status'];
    
    if($status == 1){
      if(password_verify($password, $row['password'])){
          
        foreach($result as $data){
            $user_fname = $data['fname'];
            $user_lname = $data['lname'];
            $user_id = $data['id'];
            
            $role_as = $data['role_as'];
        }
        
        $_SESSION['auth'] = true;
        $_SESSION['user_fname'] = $user_fname;
        $_SESSION['user_lname'] = $user_lname;
        $_SESSION['auth_user_id'] = $user_id;
        $_SESSION['auth_role'] = $role_as; // '0' for user and '1' for admin

        // $_SESSION['auth_user'] = [
        //     'fname' => $user_fname,
        //     'lname' => $user_lname,
        //     'id' => $id,
        //     'email' => $user_email,
        //     'unique_id' => $unique_id,
        // ];

        if($_SESSION['auth_role'] == '1'){
          header('location: admin/index.php');
          
        }
        else if($_SESSION['auth_role'] == '0'){ 
          header("location: index.php");
          //header("location: users.php");
            
        }
        

        }else{
          
          $_SESSION['message'] = "Invalid inputs";
          header('location: login.php');
          exit(0);
         }
    }else if(status == 0){
      if($password == $row['password']){
          
        foreach($result as $data){
            $user_fname = $data['fname'];
            $user_lname = $data['lname'];
            $user_id = $data['id'];
            $semester = 
            $role_as = $data['role_as'];
        }
        
        $_SESSION['auth'] = true;
        $_SESSION['user_fname'] = $user_fname;
        $_SESSION['user_lname'] = $user_lname;
        $_SESSION['auth_user_id'] = $user_id;
        $_SESSION['auth_role'] = $role_as; // '0' for user and '1' for admin

        // $_SESSION['auth_user'] = [
        //     'fname' => $user_fname,
        //     'lname' => $user_lname,
        //     'id' => $id,
        //     'email' => $user_email,
        //     'unique_id' => $unique_id,
        // ];

        if($_SESSION['auth_role'] == '1'){
          header('location: admin/index.php');
          
        }
        else if($_SESSION['auth_role'] == '0'){ 
          header("location: index.php");
          //header("location: users.php");
            
        }
        

        }else{
          
          $_SESSION['message'] = "Invalid inputs";
          header('location: login.php');
          exit(0);
         }
    }
    
        
       }
       else{
        
        $_SESSION['message'] = "Invalid inputs";
          header('location: login.php');
          exit(0);
       }
     }   
  

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
  </head>
  <body>
  <?php include('includes/navbar.php'); ?>

<center>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center"></div>
            <div class="col-md-5">

            <?php include('message.php') ?>

                <div class="card">
                    <div class="card-header" style= "background-color: green; color: white">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">

                        <form action="login.php" method = "POST">
                            <div class= "from-group mb-3" >
                                <label for="id">Student ID</label>
                                <input type="id" maxlength="30" class="form-control" name="id">
                            </div>
                            <div class= "from-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" maxlength="30" class="form-control" name="password">
                            </div>
                            
                            <div class= "from-group mb-3" >
                                <button type="submit" class="btn btn-primary">Login now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</center>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
