<?php session_start(); ?>

<?php include './includes/config.php';?>

<?php include './includes/back_end.php';?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
    	OnLearning connect
	</title>
    <link rel="shortcut icon"  href="./interface/img/logo.png">
	<link rel="stylesheet"  href="./interface/css/project_css.css">
    <link href="./interface/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="./interface/css/bootstrap.css">
	<script src="./interface/js/bootstrap.min2.js"></script>
</head>
<body class="body">
	<div class="container" style="border-radius: 15px; background-color: white;transition: 2s;margin-top: -0.5rem;">
		<div class="row mt-3">
			<div class="col-8">
				<div id="carouselExampleCaptions" class="carousel slide mt-4" data-bs-ride="carousel">
				  <div class="carousel-indicators">
				    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
				    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>

				  </div>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="./interface/img/ebook.png" style="height: 600px;" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h1 class="h1txt1">A reader lives a thousand lives</h1>
				        <h2 class="h2txt1">The man who never reads lives only one.<br/></h2>
				      </div>
				    </div>

				    <div class="carousel-item">
				      <img src="./interface/img/readingbook.png" style="height: 600px;" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h1 class="h1txt2">Featured Books</h1>
				        <h2 class="h2txt2">Available right at your fingerprints<br/></h2>
				      </div>
				    </div>

				    <div class="carousel-item">
				      <img src="./interface/img/manthumbs.png" style="height: 600px;padding-left: 10%;padding-right: 10%;" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h1 class="h1txt3">Simple UI</h1>
				        <h2 class="h2txt3">For enhanced reading experience<br/></h2>
				      </div>
				    </div>

				    <div class="carousel-item">
				      <img src="./interface/img/learn.png" style="height: 600px;padding-left: 10%;padding-right: 10%;" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h1 class="h1txt4">Today a reader, tomorrow a leader</h1>
				        <h2 class="h2txt4">Start your journey</h2>
				      </div>
				    </div>

				  </div>
				  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #03a9f4; border-radius: 50%;"></span>
				    <span class="visually-hidden">Previous</span>
				  </button>
				  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #03a9f4; border-radius: 50%;"></span>
				    <span class="visually-hidden">Next</span>
				  </button>
				</div>
			</div>

			<div class="col-4" style="margin-top: 1.5rem;">
				<h2 class="modal-title" style="color: #03a9f4;font-family: poppins bold;">Log In</h2>
				<hr class="dropdown-divider" style="background-color: #03a9f4;">
				<form class="login-form" action="" method="POST">

					<p>Log in with your Email address</p>


					<div class="txtbox1" style="position: relative;widows: 90%;height: 45px;border: 2px #03a9f4 solid;border-radius: 10px 10px 0px 0px;margin: 10px 0px;">
							<input type="email" placeholder="Email address :" name="email_user" value="" style="font-size: 15px;color: #03a9f4;border: none;width: 100%;outline: none;text-align-last: center;background: none;padding: 0 5px;height: 40px;" required>
					</div>


					<div class="txtbox2" style=" position: relative;widows: 100%;height: 45px;border: 2px #03a9f4 solid;border-radius: 0px 0px 10px 10px;margin: -5px 0;">
								<input type="password" placeholder="Password :" name="password_user" value="" style="font-size: 15px;color: #03a9f4;border: none;width: 100%;outline: none;text-align-last: center;background: none;padding: 0 5px;height: 40px;" required>
			        </div>


			        <button type="submit" id="btnShowToastt" name="user_log_in" class="logbtn" value="Log In" style=":hover font-size: 25px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);}{display: block;width: 100%;height: 50px;border: none;text-align: center;background-color: #03a9f4;background-size: 200%;color: #fff;outline: none;cursor: pointer;margin: 30px 0;transition: .5s;border-radius: 10px;font-size: 20px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);}"> Log in</button>
			        <br/>
			        <br/>
				</form>



					<div class="bottom-text" style="margin:0px 0px 20px 0px;text-align: center;font-size: 13px;">
								Forgot Password ?
						<a class="" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">Click here</a>
					</div>
					
<!-- offcanvas password recover -->
					<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" style="border-radius: 0px 15px 15px 0px;margin: 5px;">
						<div class="offcanvas-header">
							<h5 class="offcanvas-title" id="offcanvasExampleLabel" style="color: #03a9f4;font-family: poppins bold;">Password recover</h5>
							<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
<?php require_once("./includes/back_end.php") ;?>


							<form class="password-form" method="POST" action="includes/back_end.php" style="margin-top: 35%;">
								<h6 style="font-size: 15px;">Write your e-mail to get your password</h6><br/>
								<div class="txtbtn4" style="position: relative;widows: 90%;height: 45px;border: 2px #03a9f4 solid;border-radius: 10px 10px 10px 10px;margin: 10px 0px;margin-bottom: 5px;">
										<input type="email" style="font-size: 15px;color: #03a9f4;border: none;width: 100%;outline: none;text-align-last: center;background: none;padding: 0 5px;height: 40px;" placeholder="Email address :" name="email_recover" value="" required>
								</div>
								
								<a><input type="submit" name="recover" class="recover" value="Check" style="display: block;width: 100%;height: 50px;border: none;text-align: center;background-color: #03a9f4;background-size: 200%;color: #fff;outline: none;cursor: pointer;margin: 30px 0;transition: .5s;border-radius: 10px;font-size: 20px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);"></a>
	        				</form>
	        			</div>
	        		</div>
<!-- offcanvas add account -->
				<hr class="dropdown-divider" style="background-color: #03a9f4;">
	        		Want to be our student ?
	        		<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="border-radius: 10px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);">Add account</button>
	        		<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="border-radius: 15px 0px 0px 15px;">
	        			<div class="offcanvas-header">
	        				<h5 id="offcanvasRightLabel" style="color: #03a9f4;font-family: poppins bold;">Add account</h5>
	        				<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	        			</div>
	        			<div class="offcanvas-body">
	        				<form class="signin-form" method="POST">
	        					Sign in with your email address<br/><br/>
	        					<div class="txtbtn1" style="position: relative;
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
																  height: 40px;" placeholder="First name :" name="first_name" value="" required>
								</div>
								<div class="txtbtn2" style="position: relative;
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
																  height: 40px;" placeholder="Last name :" name="last_name" value="" required>
								</div>
								<div class="txtbtn3" style="position: relative;
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
																  height: 40px;" placeholder="Birth date :" name="birth_day" value="" required>
								</div>
								<div class="txtbtn4" style="position: relative;
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
																  height: 40px;" placeholder="Email address :" name="email" value="" required>
								</div>
								<div class="txtbtn5" style="position: relative;
																  widows: 90%;
																  height: 45px;
																  border: 2px #03a9f4 solid;
																  border-radius: 0px 0px 0px 0px;
																  margin: 10px 0px;">
										<input type="password" style="font-size: 15px;
																	  color: #03a9f4;
																	  border: none;
																	  width: 100%;
																	  outline: none;
																	  text-align-last: center;
																	  background: none;
																	  padding: 0 5px;
																	  height: 40px;" placeholder="Password :" name="password"value="" required>
								</div>
								<div class="txtbtn6" style="position: relative;
																  widows: 100%;
																  height: 45px;
																  border: 2px #03a9f4 solid;
																  border-radius: 0px 0px 10px 10px;
																  margin: -5px 0;">
										<input type="password" style="font-size: 15px;
																  color: #03a9f4;
																  border: none;
																  width: 100%;
																  outline: none;
																  text-align-last: center;
																  background: none;
																  padding: 0 5px;
																  height: 40px;" placeholder="Confirm Password :" name="cpassword" value="" required>
								</div>
								<input type="hidden" name="role" value="user">
								<input type="hidden" name="image" value="0">

								<a><input type="submit" name="user_sign_in" class="add_account" value="Sign in" style=":hover font-size: 25px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);}{display: block;width: 100%;height: 50px;border: none;text-align: center;background-color: #03a9f4;background-size: 200%;color: #fff;outline: none;cursor: pointer;margin: 30px 0;transition: .5s;border-radius: 10px;font-size: 20px;box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);}">
					      		</a>
					      	</form>
					      </div>
					  </div>

			</div>
		</div>
	</div> 
	
    <script src="./interface/event-handler.js"></script>
    <script src="./interface/manipulator.js"></script>
    <script src="./interface/data.js"></script>
    <script src="./interface/base-component.js"></script>
    <script src="./interface/toast.js"></script>
    <script>
      window.addEventListener('load', function () {
        Array.from(document.querySelectorAll('.toast'))
          .forEach(function (toastNode) {
            new Toast(toastNode)
          })

          document.getElementById('btnShowToast').addEventListener('click', function () {
            Array.from(document.querySelectorAll('.toast'))
              .forEach(function (toastNode) {
                var toast = Toast.getInstance(toastNode)
                toast.show()
              })
          })

          document.getElementById('btnHideToast').addEventListener('click', function () {
            Array.from(document.querySelectorAll('.toast'))
              .forEach(function (toastNode) {
                var toast = Toast.getInstance(toastNode)
                toast.hide()
              })
          })
      })
    </script>
	
</body>
</html>