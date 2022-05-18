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

</head>
<body>
<div class="py-5">
    <div class="container" >
        <div class="row2"></div>
        <div class="col-md-12">

        <h1>Grade Report</h1><br><br><br><br>
           <?php if(isset($_POST['gradebtn'])){ ?>
           
                <header>
                    <div class="content">
                    <?php 
                        $semester = $_POST['semester'];
                        $user_id = $_SESSION['auth_user_id'];
                        $sql = mysqli_query($conn, "SELECT * FROM users LEFT JOIN marks ON users.id = marks.id WHERE marks.id = '$user_id'");
                        if(mysqli_num_rows($sql) > 0){
                        $row = mysqli_fetch_assoc($sql);
                        }
                    ?>
                    <div class="details">
                        <p>date &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<?php echo '('.$row['marking_date'].')';?></p>
                        <p>Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<?php echo $row['fname'].' '.$row['lname'];?></p>
                        <p>ID &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<?php echo $row['id'];?></p>
                    </div>
                    </div>  
                </header>

                <table class= "table table-bordered">
                    <thead>
                        <tr>
                            <th>Course</th>
                            <th>Grade</th>
                            <th>Point</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?Php
                        $sql2 = "SELECT * FROM marks  WHERE id = '$user_id' AND semester = '$semester'";
                        $result2 = mysqli_query($conn, $sql2);
                        if(mysqli_num_rows($result2) > 0){
                            foreach($result2 as $row2){
                                if($row2['total'] <= 100 && $row2['total'] >= 97){
                                    $grade = "A+";
                                    $point = 4.00;
                                }
                                if($row2['total'] <= 96 && $row2['total'] >= 90){
                                    $grade = "A";
                                    $point = 4.00;
                                }
                                if($row2['total'] <= 89 && $row2['total'] >= 87){
                                    $grade = "A-";
                                    $point = 3.70;
                                }
                                if($row2['total'] <= 86 && $row2['total'] >= 83){
                                    $grade = "B+";
                                    $point = 3.30;
                                }
                                if($row2['total'] <= 82 && $row2['total'] >= 80){
                                    $grade = "B";
                                    $point = 3.00;
                                }
                                if($row2['total'] <= 79 && $row2['total'] >= 77){
                                    $grade = "B-";
                                    $point = 2.70;
                                }
                                if($row2['total'] <= 76 && $row2['total'] >= 73){
                                    $grade = "C+";
                                    $point = 2.30;
                                }
                                if($row2['total'] <= 72 && $row2['total'] >= 70){
                                    $grade = "C";
                                    $point = 2.00;
                                }
                                if($row2['total'] <= 69 && $row2['total'] >= 67){
                                    $grade = "C-";
                                    $point = 1.70;
                                }
                                if($row2['total'] <= 66 && $row2['total'] >= 63){
                                    $grade = "D+";
                                    $point = 1.30;
                                }
                                if($row2['total'] <= 62 && $row2['total'] >= 60){
                                    $grade = "D";
                                    $point = 1.00;
                                }
                                if($row2['total'] < 60){
                                    $grade = "F";
                                    $point = 0.00;
                                }
                                ?>
                                    <tr>
                                        <td><?php echo $row2['course']; ?></td>
                                        <td><?php echo $grade; ?></td>
                                        <td><?php echo number_format($point,2); ?></td>
                                    </tr>
                                <?php
                            }

                        }else{
                        ?>
                        <tr>
                            <td colspan='6'>No record found</td>
                        </tr> 
                        <?php 
                        }
                        ?>  
        
                  
                    </tbody>
                </table>  
            
        </div>
    </div>

</div>
           
               
<?php }; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>