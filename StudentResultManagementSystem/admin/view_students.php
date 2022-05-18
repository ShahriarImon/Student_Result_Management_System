<?php 
include('includes/config/dbconnect.php');
include('authenticaion.php');
include('includes/header.php');
?>


<div class="container-fluid px-4">
    <h4 class="mt-4">Students</h4>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">Students</li>
    </ol>
    </ol>


    <div class="row">
    <div class="col-md-12">
        <?php include('message.php') ?>
        <div class="card">
            <div class="card-header">
                <h4>Resistered students
                    <a href="add_student.php" class= "btn btn-primary float-end">Add student</a>
                </h4>
                
            </div>
            <div class="card-body">
                <table class= "table table-bordered">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>ID</th>
                            <th>Email</th>
                            <th>Semester</th>
                            <th>Course</th>
                            <th>Section</th>
                            <th>Edit</th>
                            <th>delete</th>
                            <!-- <th>View Questions</th>
                            <th>View Answers</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?Php
                        $sql = "SELECT * FROM users";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0){
                            foreach($result as $row){
                                ?>
                                    <tr>
                                        <td><?php echo $row['fname']; ?></td>
                                        <td><?php echo $row['lname']; ?></td>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['semester']; ?></td>
                                        <td><?php echo $row['course']; ?></td>
                                        <td><?php echo $row['section']; ?></td>
                                        <td><a href="edit_student.php?user_id=<?php echo $row['sno'];?>" class ="btn btn-success">Edit</a></td>
                                        <td>
                                            <form action="editcode.php" method = "POST">
                                        <button type = "submit" value = "<?php echo $row['sno']; ?>" name = "student_no"  class ="btn btn-danger">Delete</button></td>
                                        
                                        </form>
                                        <!-- <td><a href="viewquestions.php?user_id=<?php echo $row['unique_id'];?>" class ="btn btn-success">view</a></td>
                                        <td><a href="viewanswers.php?user_id=<?php echo $row['unique_id'];?>" class ="btn btn-success">view</a></td> -->


                                        
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

    </div>
</div>

<?php 
include('includes/footer.php'); 
 

?>