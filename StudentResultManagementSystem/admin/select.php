<?php 
include('includes/config/dbconnect.php');
include('authenticaion.php');
include('includes/header.php');
?>


<div >
    <div class="row">
        <div class="col-md-12">
            <?php include('message.php') ?>
            <div class="card" style="background-color: gray;" >
                <div class="card-header">
                    <h4 style="text-align: center; color: yellow">Select items to search</h4>
                    </div>
                    <div class="card-body">
                        <table class= "table table-bordered">
                            <thead>
                                <tr>
                                <form action="selected_students.php" method ="POST">
                                    <th style="text-align: center; color: yellow">
                                    <label  for="">Course</label>
                                        <input type="text" name= course class="form-control" placeholder = "Input course code">
                                    </th>

                                    <th style="text-align: center; color: yellow">
                                    <label for="">Section</label>
                                        <select name="section" class="form-control">
                                            <option value="">--Select section--</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </th>

                                    <th style="text-align: center; color: yellow">
                                    <label for="">Semester</label>
                                    <input type="text" name= "semester" class="form-control" placeholder = "Input semester">
                                    </th>

                                    <th> <button class= "btn btn-primary" name = "search">search</button></th>

                                    </form>
                                </tr>
                            </thead>
                        
                        </table>

                    </div>              
                
            </div>
        </div>

    </div>
</div>

<?php 
include('includes/footer.php'); 


?>