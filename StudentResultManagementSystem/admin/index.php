<?php 
include('includes/config/dbconnect.php');
include('authenticaion.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>Homepage</title>
    <style>
        body{
            background-image: url("includes/pics/wp2249261-grey-color-wallpapers.png");
        }
        .card-container{
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
        }
        .card{
        width: 300px;
        margin: 100px 50px 50px 10px;
        box-sizing: border-box;
        box-shadow: 1px 2px 4px black;

        }
        .img-style{
        width: 100%;
        }
        .card-body{
        padding: 5px;
        background-color: black;
        }
        .card-title{
        font-size: 2rem;
        text-align: center; 
        color: white;
        }
        .card-desc{
            text-align: center;
            color : white;
        }
        .card:hover{
        box-shadow: 6px 12px 10px white;
        }
    </style>
    
</head>
<body>
    
<?php include('includes/navbar.php'); 
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
?>
    <h1 style = "color: yellow; text-align: center;"; >Welcome to Result management Website</h1>
    <div class="card-container">
        <div class="card">
            <a href="view_students.php"><img class= "img-style" style="width:300px; height:180px;;" src="https://www.cicnews.com/wp-content/uploads/2020/02/20200220_InternationalStudentsRecordNumbers.jpg" alt=""></a>
                <div class="card-body">
                    <div class="card-title">
                        view student
                    </div>
                    <div class="card-desc">
                        No of Students : <?php echo $num; ?>
                    </div>
                </div>
        </div>
<?php
    $sql2 = "SELECT * FROM marks";
    $result2 = mysqli_query($conn, $sql2);
    $num2 = mysqli_num_rows($result2);
?>

        <div class="card">
            <a href="select.php"><img class= "img-style" style="width:300px;height:180px;" src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/201809/results_1_1_0.jpeg?aAl9USkktwWfEldLt_3gj862b4sOrncj" alt=""></a>
                <div class="card-body">
                    <div class="card-title">
                        Add result
                    </div>
                    <div class="card-desc">
                         Result added : <?php echo $num2; ?>
                    </div>
                </div>
        </div>
<?php include('includes/footer.php'); ?>