<?php include './includes/security_admin.php';?>

<?php include './includes/links.php';?>

<?php include './includes/header.php';?>

<!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content"style="border-radius: 15px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Good Bye admin <?php echo $_SESSION['admin']?></h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-primary btn-circle" type="button" data-dismiss="modal"><i>X</i></button>
          <form action="./includes/logout.php" method="POST"> 
          
            <button class="btn btn-danger btn-circle" type="submit" name="admin_logout_btn" class="btn btn-primary"><i class="fa fa-check"></i></button>

          </form>


        </div>
      </div>
    </div>
  </div>
<!-- Begin Page Content -->
                <div class="container-fluid" style="background-image: linear-gradient(120deg,purple,#03a9f4,red);background-attachment: fixed;">
<!-- Page Heading -->
                    <h1 class="h3 mb-2 text-white">Tables</h1>
                    <p class="mb-4 text-white">Only Administrator can modify this Datatable containt.</p>
 <?php
    if (isset($_SESSION['success2']) && $_SESSION['success2'] !='') 
    {
        // code...
        echo '<h2 class="bg-primary text-white">' .$_SESSION['success2'].'</h2>';
        unset($_SESSION['success2']);

    }
    if (isset($_SESSION['status2']) && $_SESSION['status2'] !='') 
    {
        // code...
        echo '<h2 class="bg-danger text-white">' .$_SESSION['status2'].'</h2>';
        unset($_SESSION['status2']);
    }
?>
 <?php
    if (isset($_SESSION['success']) && $_SESSION['success'] !='') 
    {
        // code...
        echo '<h2 class="bg-primary text-white">' .$_SESSION['success'].'</h2>';
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['status']) && $_SESSION['status'] !='') 
    {
        // code...
        echo '<h2 class="bg-danger text-white">' .$_SESSION['status'].'</h2>';
        unset($_SESSION['status']);
    }
?>
<!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Users of OnLearning 
                                <button  class="btn btn-primary btn-circle" type="submit" name="edit_btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"><i class="fa fa-plus"></i></button></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
<?php
$sql= "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="margin-bottom: 3%;">
                                    <thead>
                                        <tr>
                                            <th>Edit/Del</th>
                                            <th>ID & Names</th>
                                            <th>Birth Day</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Password</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Edit/Del</th>
                                            <th>First_&_Last_Name</th>
                                            <th>Birth__Day</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Password</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
<?php
if (mysqli_num_rows($result) > 0) 
{
while ($row = mysqli_fetch_assoc($result)) 
{
    ?>
                                        <tr>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic outlined example" style="font-size: 10px;">
                                                    <form action="edit.php" method="POST">
                                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                                        <button  class="btn btn-success btn-circle" type="submit" name="edit_btn"><i class="far fa-edit"></i></button>
                                                    </form>
                                                    <form action="./includes/back_end.php" method="POST">
                                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                        <button name="delete_btn" class="btn btn-danger btn-circle ml-2" type="submit"><i class="far fa-trash-alt"></i></button>
                                                    </form>
                                                </div>
                                          </td>
                                          <td>
<?php
    if ($row['image']==='0' OR $row['image']==='') 
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/undraw_profile.jpg" style="width: 90px;height: 90px;">';
    }
    else
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/' .$row['image'].' " alt="" style="width: 90px;height:90px;">';
    }
?>
                                            <?php echo $row['id'];?>   <?php echo $row['first_name'];?>    <?php echo $row['last_name']; ?>   

                                          </td>
                                          <td><?php echo $row['birth_day'] ?></td>
                                          <td><?php echo $row['email']; ?></td>
                                          <td><?php echo $row['role']; ?></td>
                                          <td><?php echo $row['password']; ?></td>
                                       </tr>
   <?php
}
}
else
{
echo '<h7 class="bg-danger text-white text-center pl-3 pr-3 mb-3" style="border-radius: 10px;">No users avalaibles into the database</h7>';
}
?>
                                    </tbody>
                                </table>
                                <h6 class="m-0 font-weight-bold text-primary">Users of OnLearning 
                                <button  class="btn btn-primary btn-circle" type="submit" name="edit_btn" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"><i class="fa fa-plus"></i></button></h6>
                            </div>
                        </div>
                    </div>
<!-- courses table -->
<!-- DataTales courses -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Courses of OnLearning
                            <button  class="btn btn-primary btn-circle" type="submit" name="edit_btn" data-bs-toggle="modal" data-bs-target="#addCourseModal"><i class="fa fa-plus"></i></button></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
<?php
$sql= "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);
?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="margin-bottom: 3%;">
                                    <thead>
                                        <tr>
                                            <th>Del</th>
                                            <th>ID</th>
                                            <th>Name of courses</th>
                                            <th>Images</th>
                                            <th>Library</th>
                                            <th>Introduction & Overview</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Del</th>
                                            <th>ID</th>
                                            <th>Name_of_courses</th>
                                            <th>Images</th>
                                            <th>Library</th>
                                            <th>Introduction_&_Overview</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
<?php
if (mysqli_num_rows($result) > 0) 
{
while ($row = mysqli_fetch_assoc($result)) 
{
    ?>
                                    <tr>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic outlined example" style="font-size: 10px;">
                                                <form action="./includes/back_end.php" method="POST">
                                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                                    <button name="delete_data" class="btn btn-danger btn-circle" type="submit"><i class="far fa-trash-alt"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                        <td><?php echo $row['id'];?></td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td><?php echo'<img src="upload/' .$row['image'].'" style="border-radius: 7px" width="120px;" height="70px;" alt="image">'?> </td>
                                        <td><?php echo $row['pdf']; ?></td>
                                        <td style="font-size: 11px"><?php echo $row['intro']; ?></td>
                                   </tr>
   <?php
}
}
else
{
echo '<h7 class="bg-danger text-white text-center pl-3 pr-3 mb-3" style="border-radius: 10px;">No courses avalaibles into the database</h7>';
}
?>
                                    </tbody>
                                </table>
                                <h6 class="m-0 font-weight-bold text-primary">Courses of OnLearning
                                    <button  class="btn btn-primary btn-circle" type="submit" name="" data-bs-toggle="modal" data-bs-target="#addCourseModal"><i class="fa fa-plus"></i>
                                    </button>
                                </h6>
                            </div>
                        </div>
                    </div>
<!-- DataTales courses -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Questions of Exam</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
<?php
$sql= "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);
?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="margin-bottom: 3%;">
                                    <thead>
                                        <tr>
                                            <th>Edit</th>
                                            <th>Name of courses</th>
                                            <th>Question 1</th>
                                            <th>Question 2</th>
                                            <th>Question 3</th>
                                            <th>Question 4</th>
                                            <th>Question 5</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Edit</th>
                                            <th>Name_of_courses</th>
                                            <th>Question_1</th>
                                            <th>Question_2</th>
                                            <th>Question_3</th>
                                            <th>Question_4</th>
                                            <th>Question_5</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
<?php
if (mysqli_num_rows($result) > 0) 
{
while ($row = mysqli_fetch_assoc($result)) 
{
    ?>
                                    <tr>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic outlined example" style="font-size: 10px;">
                                                <form action="edit_exam.php" method="POST">
                                                    <input type="hidden" name="edit_exam_id" value="<?php echo $row['id']; ?>">
                                                    <button  class="btn btn-success btn-circle" type="submit" name="exam_btn"><i class="far fa-edit"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                        <td><?php echo $row['name']; ?></td>
                                        <td style="font-size: 11px"><?php echo $row['q1']; ?><br/><br/><br/><br/><br/>
                                            <p class="text-success h7"><?php echo $row['ans1']; ?></p>
                                        </td>


                                        <td style="font-size: 11px"><?php echo $row['q2']; ?><br/><br/><br/><br/><br/>
                                            <p class="text-success h7"><?php echo $row['ans2']; ?></p>
                                        </td>


                                        <td style="font-size: 11px"><?php echo $row['q3']; ?><br/><br/><br/><br/><br/>
                                            <p class="text-success h7"><?php echo $row['ans3']; ?></p>
                                        </td>


                                        <td style="font-size: 11px"><?php echo $row['q4']; ?><br/><br/><br/><br/><br/>
                                            <p class="text-success h7"><?php echo $row['ans4']; ?></p>
                                        </td>


                                        <td style="font-size: 11px"><?php echo $row['q5']; ?><br/><br/><br/><br/><br/>
                                            <p class="text-success h7"><?php echo $row['ans5']; ?></p>
                                        </td>
                                   </tr>
   <?php
}
}
else
{
echo '<h7 class="bg-danger text-white text-center pl-3 pr-3 mb-3" style="border-radius: 10px;">No courses avalaibles into the database</h7>';
}
?>
                                    </tbody>
                                </table>
                                <h6 class="m-0 font-weight-bold text-primary">Questions of Exam</h6>
                            </div>
                        </div>
                    </div>
                </div>
<!-- /.container-fluid -->
            </div>
<!-- End of Main Content -->
<?php include './includes/scripts.php';?>