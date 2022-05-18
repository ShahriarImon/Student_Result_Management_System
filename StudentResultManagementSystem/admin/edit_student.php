<?php 

include('includes/config/dbconnect.php');
include('authenticaion.php');
include('includes/header.php');


?>

<div class="container-fluid px-4">
<h4 class="mt-4">Edit Student Account</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">students</li>
        <li class="breadcrumb-item">edit student</li>
    </ol>
    </ol>


    <div class="row">
    <div class="col-md-12">
        <div class="card" >
            <div class="card-header">
                <h4>Edit Student
                <a href="view_students.php" class="btn btn-danger float-end">BACK</a>
                </h4>
            </div>
            <div class="card-body">

            <?php 
                if(isset($_GET['user_id'])){
                    $sno = $_GET['user_id'];
                
                    $sql = "SELECT * FROM users where sno = '$sno'";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        foreach($result as $row){

                        
                    ?>

                    <form action="editcode.php" method ="POST">
                        <input type="hidden" name = "sno" value = "<?=$row['sno']; ?>">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="">first Name</label>
                                <input type="text" name = "fname" value = "<?= $row['fname'] ?>" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">last Name</label>
                                <input type="text" name = "lname" value = "<?= $row['lname'] ?>" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">id</label>
                                <input type="text" name = "id" value = "<?= $row['id'] ?>"  class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Email</label>
                                <input type="email" name = "email" value = "<?= $row['email'] ?>" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">course</label>
                                <input type="text" name = "course" value = "<?= $row['course'] ?>"  class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">section</label>
                                <input type="number" name = "section" value = "<?= $row['section'] ?>"  class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">semester</label>
                                <input type="text" name = "semester" value = "<?= $row['semester'] ?>"  class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type = "submit" name = "update_student" class="btn btn-primary">Update student information</button>
                            </div>
                            
                        </div>
                    </form>
                    <?php
                    }
                }else{

                    ?> 
                    <h4>No data found</h4>
                    <?php
                }
            }
            ?>
            </div>              
            
            </div>
        </div>
    
        </div>
    </div>
    
    <?php 
    include('includes/footer.php');  
    
    ?>