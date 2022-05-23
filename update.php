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
							<a class="nav-link" aria-current="page" href="welcome.php">My Home</a>
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
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="font-size: 16px;background-color: black;border-radius: 15px; text-align: center;opacity: .8;">
								
<?php
    if ($row['image']==='0' OR $row['image']==='') 
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/undraw_profile.jpg" style="width: 140px;height: 140px;">';
    }
    else
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/' .$row['image'].' " alt="" style="width: 140px;height:140px;">';
    }
?>
								
								<li><hr class="dropdown-divider" style="background-color: #03a9f4;"></li>
<!-- Button trigger modal -->
								<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="width: 80%;border-radius: 8px;">Log out</button>
							</ul>
						</li>
					</ul>
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

<?php
$server="localhost";
$user = "root";
$pass = "";
$database = "project_onlearning";
$conn = mysqli_connect($server,$user,$pass,$database);?>
<?php

if (isset($_POST['edit_user'])) 
	{
	    $id = $_POST['edit_user_id'];
	    $sql= "SELECT * FROM users WHERE id= '$id' ";
	    $result = mysqli_query($conn, $sql);
	    $row = mysqli_fetch_assoc($result);

	    foreach ($result as $row)
	    	{
	    		require_once './includes/back_end.php';
	    		?>
	    		<form class="exam-form" method="POST" action="welcome.php" style="margin: 2% 10% 0% 10%;background-color: white; padding: 3% 12% .5% 12%;border-radius: 10px;" enctype="multipart/form-data">
				
					<p class="h5 text-center text-primary">Edit your informations</p><br/><br/>


					<input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
					<input type="hidden" name="edit_role" value="<?php echo $row['role']; ?>">
			<div class="row">
				<div class="col-6">
					<div class="tex" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
													  border-radius: 10px 10px 0px 0px;
													  margin: -5px 0px;">
							<input type="text" style="font-size: 15px;
													  color: #03a9f4;
													  border: none;
													  width: 100%;
													  outline: none;
													  text-align-last: center;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="First name :" name="edit_first_name" value="<?php echo $row['first_name'];?>" required>
					</div>
					<div class="tex" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
														border-radius: 0px 0px 0px 0px;
													  margin: 10px 0px;
													  margin-bottom: -5px;">
							<input type="text" style="font-size: 15px;
													  color: #03a9f4;
													  border: none;
													  width: 100%;
													  outline: none;
													  text-align-last: center;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Last name :" name="edit_last_name" value="<?php echo $row['last_name']; ?>" required>
					</div>
					<div class="tex" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
													  border-radius: 0px 0px 0px 0px;
													  margin: 10px 0px;
													  margin-bottom: -5px;">
							<input type="date" style="font-size: 15px;
													  color: #03a9f4;
													  border: none;
													  width: 100%;
													  outline: none;
													  text-align-last: center;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Birth date :" name="edit_birth_day" value="<?php echo $row['birth_day']; ?>" required>
					</div>
					<div class="tex" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
													  border-radius: 0px 0px 0px 0px;
													  margin: 10px 0px;
													  margin-bottom: -5px;">
							<input type="email" style="font-size: 15px;
													  color: #03a9f4;
													  border: none;
													  width: 100%;
													  outline: none;
													  text-align-last: center;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Email address :" name="edit_email"     value="<?php echo $row['email']; ?>" required>
					</div>
					
					<div class="tex" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
													  border-radius: 0px 0px 10px 10px;
													  margin: 10px 0px;">
							<input type="text" style="font-size: 15px;
														  color: #03a9f4;
														  border: none;
														  width: 100%;
														  outline: none;
														  text-align-last: center;
														  background: none;
														  padding: 0 5px;
														  height: 40px;" 
														  placeholder="Password :" name="edit_password"value="<?php echo $row['password']; ?>" required>
					</div>
				</div>
				<div class="col-6">
					<div class="txt" style="position: relative;
													  widows: 90%;
													  height: 245px;
													  border: 2px #03a9f4 solid;
													  border-radius: 10px 10px 10px 10px;
													  margin: -5px 0px;">
							<input type="file" style="font-size: 15px;
													  color: #03a9f4;
													  border: none;
													  width: 100%;
													  outline: none;
													  text-align-last: center;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Image :" name="edit_img" value="<?php echo $row['image']; ?>">
<?php
if ($row['image']==='0' OR $row['image']==='') 
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/undraw_profile.jpg" style="width: 200px;height: 200px;margin: 0px 8px">';
    }
else
    {
        echo'<img class="img-profile rounded-circle" src="upload/user_image/' .$row['image'].' " alt="" style="width: 200px;height:200px;margin: -1% 15%">';
    }
?>
					</div>
				</div>
			</div>
					
					<a><input type="submit" name="update_user_btn" class="add_account" value="Update" style="
		      																			display: block;
		      																			width: 100%;
		      																			height: 50px;
		      																			border: none;
		      																			text-align: center;
		      																			background-color: #03a9f4;
		      																			background-size: 200%;
		      																			color: #fff;
		      																			outline: none;
		      																			cursor: pointer;
		      																			margin: 30px 0;
		      																			transition: .5s;
		      																			border-radius: 10px;
		      																			font-size: 20px;
		      																			box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">
		      		</a>
		      	</form>
		      	<?php
		    }
		}
	?>			
<?php include './includes/footer.php'?>
</div>



</body>
</html>