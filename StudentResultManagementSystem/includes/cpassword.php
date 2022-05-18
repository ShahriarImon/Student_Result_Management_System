<?php
    session_start();
    if(isset($_POST['cpasswordbtn'])){
        
        include('admin/includes/config/dbconnect.php');
        $npass = mysqli_real_escape_string($conn, $_POST['npassword']);
        $cpass = mysqli_real_escape_string($conn, $_POST['cpassword']);
        $user_id = $_SESSION['auth_user_id'];

        if($npass == $cpass){
            $hash = password_hash($npass, PASSWORD_DEFAULT);
            $sql = "UPDATE `users` SET `password`='$hash', `status`= '1' WHERE id = '$user_id'";
        $result = mysqli_query($conn, $sql);
        $_SESSION['message'] = "Password successfully changed!";
        header('location: index.php');   
        }else{
            $_SESSION['message'] = "Password and confirm password must be same!";
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
        
    }else{
        header("location: login.php");
    }
?>