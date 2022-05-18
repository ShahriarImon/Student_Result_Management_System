<?php
include('includes/config/dbconnect.php');
include('authenticaion.php');


// if(isset($_POST['update_status'])){
//     $id = $_POST['id'];
//     $status = $_POST['status'];
//     $sql = "UPDATE users SET `status` = '$status' WHERE unique_id = '$id' ";

//     $result = mysqli_query($conn, $sql);

//     if($result){
//         $_SESSION['message'] = "User's status changed sucessfully";
//         header('location: view_students.php');
//         exit;
//     }else{
//         $_SESSION['message'] = "Something went wrong.!";
//         header('location: view_students.php');
//         exit;
//     }
// }

if(isset($_POST['question_status_update'])){
    $id = $_POST['id'];
    $sno_id = $_POST['sno_id'];
    $status = $_POST['qstatus'];
    $sql = "UPDATE questions SET `qstatus` = '$status' WHERE question_id = '$id' AND questionno = '$sno_id'";

    $result = mysqli_query($conn, $sql);

    if($result){
        $_SESSION['message'] = "Question's status changed sucessfully";
        header('location: viewquestions.php');
        exit;
    }else{
        $_SESSION['message'] = "Something went wrong.!";
        header('location: viewquestions.php');
        exit;
    }
}

if(isset($_POST['answer_status_update'])){
    $id = $_POST['id'];
    $sno_id = $_POST['sno_id'];
    $status = $_POST['astatus'];
    $sql = "UPDATE answers SET `astatus` = '$status' WHERE questioner_id = '$id' AND answerno = '$sno_id' ";

    $result = mysqli_query($conn, $sql);

    if($result){
        $_SESSION['message'] = "Answer's status changed sucessfully";
        header('location: viewanswers.php');
        exit;
    }else{
        $_SESSION['message'] = "Something went wrong.!";
        header('location: viewanswers.php');
        exit;
    }
}

if(isset($_POST['student_no'])){
    $sno = $_POST['student_no'];
    $sql = "DELETE FROM users WHERE sno = '$sno' ";
    $result = mysqli_query($conn, $sql);

    if($result){
        $_SESSION['message'] = "Student deleted sucessfully";
        header('location: view_students.php');
        exit;
    }else{
        $_SESSION['message'] = "Something went wrong.!";
        header('location: view_students.php');
        exit;
    }
}


if(isset($_GET['id']) && isset($_GET['sno_id'])){
    $id = $_GET['id'];
    $sno = $_GET['sno_id'];
    $sql = "DELETE FROM questions WHERE question_id = '$id' AND questionno = $sno ";
    $result = mysqli_query($conn, $sql);

    if($result){
        $_SESSION['message'] = "Question deleted sucessfully";
        header('location: viewquestions.php');
        exit;
    }else{
        $_SESSION['message'] = "Something went wrong.!";
        header('location: viewquestions.php');
        exit;
    }
}



if(isset($_POST['add_student'])){
    // $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $semester = $_POST['semester'];
    $course = $_POST['course'];
    $section = $_POST['section'];
    $random_id = rand(time(), 10000000);
    $sql = "INSERT INTO users (fname,lname,id,email,password,semester,course,section) VALUES ('$fname','$lname','$id','$email','$password','$semester','$course','$section')";
    $result = mysqli_query($conn, $sql);
    if($result){
        $_SESSION['message'] = "Student added sucessfully";
        header('location: view_students.php');
        exit;
    }else{
        $_SESSION['message'] = "Something went wrong.!";
        header('location: view_students.php');
        exit;
    }
}

if(isset($_POST['update_student'])){

    $sno = $_POST['sno'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $section = $_POST['section'];
    $semester = $_POST['semester'];
    
    $sql = "UPDATE users SET fname = '$fname', lname = '$lname', id = '$id', email = '$email', course = '$course', section = '$section', semester = '$semester' WHERE sno = '$sno' ";
    $result = mysqli_query($conn, $sql);

    if($result){
        $_SESSION['message'] = "Updated sucessfully";
        header('location: view_students.php');
        exit;
    }
}

if(isset($_POST['add_marks'])){

    $id = $_POST['id'];
    $course = $_POST['course'];
    $section = $_POST['section'];
    $semester = $_POST['semester'];
    $quiz = $_POST['quiz'];
    $classwork = $_POST['classwork'];
    $mid = $_POST['mid'];
    $final = $_POST['final'];
    $total = $quiz + $classwork + $mid + $final;
    
    $sql = "INSERT INTO marks (id,semester,course,section,quiz,classwork,mid,final,total) VALUES ('$id','$semester','$course','$section','$quiz','$classwork','$mid','$final','$total')";
    $result = mysqli_query($conn, $sql);

    if($result){
        $_SESSION['message'] = "Marks added sucessfully";
        header('location: selected_students.php');
        
        exit;
    }
}
?>