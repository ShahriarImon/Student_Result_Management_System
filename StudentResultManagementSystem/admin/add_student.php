<?php 

include('includes/config/dbconnect.php');
include('authenticaion.php');
include('includes/header.php');


?>

<div class="container-fluid px-4">
    <h4 class="mt-4">Add Student</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">students</li>
        <li class="breadcrumb-item">Add student</li>
    </ol>
    </ol>


    <div class="row">
        <div class="col-md-12">
            <div class="card" >
                <div class="card-header">
                    <h4>Add Students
                        <a href="view_students.php" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">
                <form action="editcode.php" method ="POST">
                        
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label for="">first Name</label>
                                <input type="text" name = "fname" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">last Name</label>
                                <input type="text" name = "lname" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">ID</label>
                                <input type="text" name = "id" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Email</label>
                                <input type="email" name = "email" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">password</label>
                                <input type="password" name = "password" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">course</label>
                                <input type="text" name = "course" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">section</label>
                                <input type="number" name = "section" class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">semester</label>
                                <input type="text" name = "semester" class="form-control">
                            </div>
                            <!-- <div class="col-md-12 mb-3">
                                <label for="">Role as</label>
                                <select name="role_as" class="form-control">
                                    <option value="">--Select Role--</option>
                                    <option value="1" <?= $row['role_as'] == '1' ? 'selected':'' ?>>Admin</option>
                                    <option value="0" <?= $row['role_as'] == '0' ? 'selected':'' ?>>User</option>
                                </select>
                            </div> -->
                            <div class="col-md-12 mb-3">
                                <button type = "submit" name = "add_student" class="btn btn-primary">Add student</button>
                            </div>
                            
                        </div>
                    </form>      
                
                </div>              
            </div>
        </div>
    </div>
</div>
    <?php 
    include('includes/footer.php'); 
    
    
 ?>