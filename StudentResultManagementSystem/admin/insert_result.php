<?php 

include('includes/config/dbconnect.php');
include('authenticaion.php');
include('includes/header.php');


?>

<div class="container-fluid px-4">
<h4 class="mt-4">Add marks</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Students</li>
        <li class="breadcrumb-item">Insert Marks</li>
    </ol>
    </ol>


    <div class="row">
    <div class="col-md-12">
        <div class="card" >
            <div class="card-header">
                <h4>Insert Marks
                <a href="selected_students.php" class="btn btn-danger float-end">BACK</a>
                </h4>
            </div>
            <div class="card-body">

            <?php 
                
                    $id = $_GET['user_id'];
                    $sno = $_GET['sno'];
                
                    $sql = "SELECT * FROM users where id = '$id' AND sno = $sno";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0){
                        foreach($result as $row){

                        
                    ?>

                    <form action="editcode.php" method ="POST">
                        <input type="hidden" name = "id" value = "<?=$row['id']; ?>">
                        <input type="hidden" name = "sno" value = "<?=$row['sno']; ?>">
                        <div class="row">
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
                                <label for="">quiz</label>
                                <input type="text" name = "quiz" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">classwork</label>
                                <input type="text" name = "classwork" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">mid</label>
                                <input type="text" name = "mid" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Final</label>
                                <input type="text" name = "final" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <button type = "submit" name = "add_marks" class="btn btn-primary">Add marks</button>
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
            
            ?>
            </div>              
            
            </div>
        </div>
    
        </div>
    </div>
    
    <?php 
    include('includes/footer.php'); 
    
    ?>