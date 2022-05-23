<?php include './includes/security.php';?>

<?php include './includes/config.php';?>

<?php include './includes/back_end.php';?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
    	OnLearning <?php echo $_SESSION['email']; ?>
	</title>
    <link rel="shortcut icon"  href="./interface/img/logo.png">
	<link rel="stylesheet"  href="./interface/css/project_css.css">
    <link href="./interface/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="./interface/css/bootstrap.css">
    <script src="./interface/popover.js"></script>
    <script src="./interface/js/bootstrap.min2.js"></script>
	
</head>
<body class="body">
	<div class="container-fluid">
        

        <div><h5 style="background-image: linear-gradient(100deg,black,#03a9f4);border-radius: 15px 15px 0px 0px;text-align: center;margin-bottom: -.5%;margin-top: 5px; color: white;font-family: poppins bold;padding: 8px 0px;">Official Website</h5></div>
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-image: linear-gradient(120deg,black,#03a9f4);border-radius: 0px 0px 15px 15px;">
            <div class="container-fluid p-2">
                <a class="navbar-brand" href="#" style="font-size: 36px;">
                    <img src="./interface/img/logo.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
                OnLearning</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedCont" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="margin-left: 57%;">
                        <li class="nav-item">
							<a class="nav-link active" style="font-family: poppins bold" aria-current="page" href="#">My Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="courses.php" >My Courses</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle active" style="font-family: poppins bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<?php
$email_user = $_SESSION['email'];

$sql= "SELECT * FROM users WHERE email='$email_user'" ;
$result = mysqli_query($conn, $sql);
?>
<?php
	if(isset($_SESSION['email'])) 
	{
		$row=mysqli_fetch_array($result);
		echo $row['first_name'];?>	<?php echo $row['last_name'];
	}
?>
<?php
    if ($row['image']==='0' OR $row['image']==='') 
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/undraw_profile.jpg" style="width: 30px;height: 30px;border: 2px white solid;margin-left: 5px">';
    }
    else
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/' .$row['image'].' " alt="" style="width: 30px;height:30px;border: 2px white solid;margin-left: 5px">';
    }
?>
							</a>
<!-- dropdown -->
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size: 16px;background-color: black;border-radius: 15px; text-align: center;opacity: .8;border: 1px #03a9f4 solid;">
								<li>
<?php
    if ($row['image']==='0' OR $row['image']==='') 
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/undraw_profile.jpg" style="width: 140px;height: 140px;border: 5px #03a9f4 solid;">';
    }
    else
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/' .$row['image'].' " alt="" style="width: 140px;height:140px;border: 5px #03a9f4 solid;">';
    }
?>								<li>
<?php echo'<button type="button" class="btn btn-outline-primary" style="border-radius:8px;margin-top: 10px;" data-bs-toggle="modal" data-bs-target="#staticBackdropMarksheet'.$row['id'].'">'?>My Marksheet</button>
                                <li>
								<li>
									<form action="update.php" method="POST">
                                        <input type="hidden" name="edit_user_id" value="<?php echo $row['id']; ?>">
                                        <button  class="btn btn-outline-primary" type="submit" name="edit_user" style="border-radius:8px;margin-top: 10px;">Edit my profil</button>
                                    </form>
                                <li>
								<li><hr class="dropdown-divider" style="background-color: #03a9f4;"></li>
<!-- Button trigger modal -->
								<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 80%;border-radius: 8px;">Log out</button>
							</ul>
						</li>
					</ul>
					<form class="d-flex">

					</form>
				</div>
			</div>
			</nav>
<!-- Logout Modal -->
	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" style="border-radius: 15px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel" style="color: #03a9f4;font-family: poppins bold;">Good Bye <?php echo $_SESSION['email']; ?></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					Visit us anytime you want<br/>
					Do you want to log out ??
				</div>
				<div class="modal-footer">
                    <button class="btn btn-primary btn-circle" data-bs-dismiss="modal" style="border-radius: 100%;height: 2.5rem;width: 2.5rem;display: inline-flex;align-items: center;justify-content: center;"><i class="fa fa-close">X</i></button>
                    <form action="./includes/logout.php" method="POST">
                        
                        <button type="submit" name="logout_btn" class="btn btn-danger btn-circle" style="border-radius: 100%;height: 2.5rem;width: 2.5rem;display: inline-flex;align-items: center;justify-content: center;"><i class="fa fa-check"></i></button>
                    </form>
                </div>
			</div>
		</div>
	</div>
    <div class="container">


<?php include './includes/carouselle.php'?>
			
			<div class=content>
				<img src="./interface/img/logo.png"/>
				<div class="text">
					<h1 style="font-size: 18px;">Become Future-Proof</h1><br/>
					<p style="font-size: 15px;">
						Get the skills of tomorrow.
						Learn to learn efficiently.<br/>
						Take control of your life from now.<br/>
					</p>
				</div>
				<br/>
				<h2 style="font-size: 15px;">Are you more interested?</h2><br/>
				<div class="end">
					<img src="./interface/img/logo2.png" id="img2">
					<a href="welcome.php">
						<input class= "Discover" value="Skip"></a>
				</div>
				</div>
        </div>
<!-- Marksheet Modal -->
<?php
$email_user=$_SESSION['email'];

$sql= "SELECT * FROM users WHERE email='$email_user'" ;
$result = mysqli_query($conn, $sql);
?>
<?php
    if(isset($_SESSION['email'])) 
    {
        $row=mysqli_fetch_array($result);
    }
?>
<?php echo'<div class="modal fade" id="staticBackdropMarksheet'.$row['id'].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">'?>
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content" style="border-radius: 15px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" style="color: #03a9f4;font-family: poppins bold;">My Marksheet</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="margin-bottom: 3%;">
                        <thead>
                            <tr>
                                <th>Name of the course</th>
                                <th>Marks</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name_of_the_course</th>
                                <th>Marks</th>
                            </tr>
                        </tfoot>
                        <tbody>
<?php
if (mysqli_num_rows($result) > 0) 
{
    $sql= "SELECT * FROM marksheet WHERE id_users=$row[id]";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) 
    {

    	$id_to_use = $row['id_courses'];
        ?>
                                <tr>
                                  <td>
     <?php

    $sql1= "SELECT * FROM courses WHERE id=$id_to_use";		
    $result1 = mysqli_query($conn, $sql1);
    while ($row2 = mysqli_fetch_assoc($result1)) 
    {
        	echo $row2['name'];
    };

        ?></td>

                                  <td><?php echo $row['result']; ?>/100</td>
                               </tr>
       <?php
    }
}
else
{
echo '<h7 class="bg-danger text-white text-center pl-3 pr-3 mb-3" style="border-radius: 10px;">No Exam already Submitted</h7>';
}

?>

                                    </tbody>
                                </table>
                            </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-circle" data-bs-dismiss="modal" style="border-radius: 100%;height: 2.5rem;width: 2.5rem;display: inline-flex;align-items: center;justify-content: center;"><i class="fa fa-check"></i></button>
                </div>
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
  <button class="btn btn-primary" type="button" disabled>Disabled button</button>
</span>


<?php include './includes/footer.php'?>

</div>
<script src="../../dist/popover.js"></script>
    <script>
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
  return new bootstrap.Popover(popoverTriggerEl)
})
    </script>
</body>
</html>
