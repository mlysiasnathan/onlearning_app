<?php session_start(); ?>

<?php include './includes/config.php';?>

<?php include './includes/back_end.php';?>




<!DOCTYPE html>
<html>
<head>
	<title>OnLearning Home</title>
	<!----owlcarousel css file for our team section -->
	<link rel="stylesheet" type="text/css" href="./interface/css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="./interface/css/owl.theme.default.min.css">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="./interface/css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">


	<!----font-awsome ends-->

	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="./interface/css/style.css">

	<!----favicon setting-->
  <link rel="shortcut icon"  href="./interface/img/logo.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="./interface/css/bootstrap.min-home.css">

	<!-- jQuery library -->
	<script src="./interface/js/jquery.min-home.js"></script>

	<!----magnific popup js file for work section -->
	<script type="text/javascript" src="./interface/js/jquery.magnific-popup.min.js"></script>

	<!----owlcarousel js file for our team section -->
	<script type="text/javascript" src="./interface/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="./interface/js/owl.carousel.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="./interface/js/bootstrap.min.js"></script>
	<script src="./interface/js/bootstrap.min.js"></script>

	<!----------email notification-------->

<!-- <link rel="stylesheet" href="assets/tether/tether.min.css">
 
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css"> -->

	<style type="text/css">
	
	.servicebody
	{
		

	}


	html
	{
		scroll-behavior: smooth;
	}
	</style>

</head>
<body onload="myfunction()" style="background-image: linear-gradient(120deg,purple,#03a9f4,red);background-attachment: fixed;">
		   <!---preloader starts	----->

		   <div id="loading"></div>

		   <!---preloader Ends	----->


			<!---Navigation Starts	----->

	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------interface Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1 style="color: white;margin-top: 10px;font-family: poppins bold" id="myhead">OnLearning</h1>
			</div>
			<div class="collapse navbar-collapse" id="navi">
<!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="#">Home</a></li>
					<li> <a href="#myservice_section">Our Service</a></li>
					<li> <a href="#work">our courses</a></li>
					<li> <a href="#our-members">Team</a></li>
					<li> <a href="log_in.php">Log in</a></li>
				</ul>
<!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->
<?php
	if(isset($_SESSION['status']) && $_SESSION['status'] !='') 
	{
		echo '<h7 class="bg-danger text-white"> '.$_SESSION['status'].' </h7>';
		unset($_SESSION['status']);
	}
?>




			<!---Slider Section starts	------->
			<section class="slider text-center" id="slider">
				<div class="slider-overlay">
					<div class="slider-content">
						<div class="icons">

							<i class="fa fa-apple"></i>
							<i class="fa fa-android"></i>
							<i class="fa fa-windows"></i>
						</div>
						<br>
						<div class="text">      <!-- jquery typed effect -->
							
						</div>
							
							<br><br>
							
					</div>
				</div>
			</section>

			<!---Slider Section ends------->

			<!---Login Start------->


      <!---Login Ends------->

         <!---Our Services Section Start------->

         <br><br>
         <div class="container-fluid servicebody" id="myservice_section">
         <div class="service-are" id="service">
         	<div class="row">
         		<div class="col-xs-12">
         			<div class="section-title text-center">
         				<h2><b class="text-white">SERVICES</b></h2>
         				<p class="text-white" style="color: white;">
         					Theses are the services provided by us <br>
         				</p>
         			</div>
         		</div>
         	</div>
         	<div class="row">
         		

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center" style="background-color: white;border-radius: 15px;">
         				<div class="service-icon">
         					<i class="fa fa-book"></i>
         				</div>
         				<h3><a href="#">BOOKS TO READ</a></h3>
         				<p>
         					Here you will find all the BOOKS related to Biology studies 
         					like Dynamics of biological systems,Nutrition & Health,Neurotransmission etc
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center" style="background-color: white;border-radius: 15px;">
         				<div class="service-icon">
         					<i class="fa fa-leaf"></i>
         				</div>
         				<h3><a href="#">PROGRAM OF STUDY</a></h3>
         				<p>
         					We are avalaible every day;but make sure that your are still reading your courses
         					you can get exam anytime
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center" style="background-color: white;border-radius: 15px;">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="#">EXAMINATION PROGRAM</a></h3>   <!--  exercise/exercise.php -->
         				<p>
         					Check if an exam have been planed where you did not yet submit every time you are visiting us
         					Keep connected everyday
         				</p>
         			</div>
         		</div>

         		
         	</div>
         </div>
     </div>


			<section class="work" id="work"><br>
				<h2 id="work-heading" class="text-center" style="font-weight: bold;">COURSES</h2>
				<p class="text-center" style="color: white;">join us to improve your SKILL</p>
				<div class="container-fluid" style="border-radius: 15px;">
					<!---first row start-->
					<div class="row no-gutters">
					<div class="col-md-4 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="./interface/img/1.jpg" title="Introduction:				The defense system consists of a wide variety of cells and molecules
                                                that have evolved to protect animals from invading pathogenic
                                                microorganisms and cancer. Recognition and response are two
                                                major activities of immune system. Immune recognition is quite specific.
                                                Moreover, it is able to discriminate between foreign molecules
                                                and the body’s own cells and proteins. After the recognition of a
                                                foreign organism, it mounts an effector response through recruiting
                                                a variety of cells and molecules to eliminate the invader organism.">
								<img src="./interface/img/1.jpg" class="img-interface">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-4 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="./interface/img/2.jpg" title="Introduction:			Generally, nutrients are classified as either macro- or micronutrients, based on the
                                                amounts we require from the diet (Gibney et al.,2009).
                                                Some nutrients can be stored (e.g., glucose as glycogen in the liver, fat-soluble vitamins in fact 
                                                reserves) while others areequired more or less continuously. There are, however,
                                                also differences between individuals, meaning some may require specific
                                                nutrients more frequently.">
								<img src="./interface/img/2.jpg" class="img-interface">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-4 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="./interface/img/3.jpg" title="Introduction:

                                                Recent advances in molecular biology, neurobiology, genetics, and imaging have 
                                                demonstrated important insights about the nature of neurological diseases.
                                                However, a comprehensive understanding of their pathogenesis is still lacking.
                                                Although reductionism has been successful in enumerating and 
                                                characterizing the components of most living organisms
                                                organisms, it has failed to generate
                                                knowledge on how these components interact in complex arrangements 
                                                to allow and sustain two of the most fundamental
                                                properties of the organism as a whole: its fitness, also termed its robustness,
                                                and its capacity to evolve.">
								<img src="./interface/img/3.jpg" class="img-interface">
							</a>
							
						</div>
						
					</div>

					</div>


					
					<!---first row ends-->


					<!-------second row starts  --->
					<div class="row no-gutters">
					<div class="col-md-4 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="./interface/img/4.jpg" title="Introduction:

                                                Interactions of Chemicals in Biologic Systems Chemicals can interact in a number of ways.
                                                If we consider two chemicals, they may act at a common site such as a receptor or an enzyme.
                                                In this case their actions may be additive if both activate the target, or occlusive
                                                if one activates and the other binds without activating or binds with a slow
                                                dissociation constant. However, many effects are more complex than simply binding to a
                                                receptor or enzyme and act through some combination of altering gene expression,
                                                changing levels of intracellular concentrations of ions, altering cellular metabolism or production
                                                of cellular regulators.">
								<img src="./interface/img/4.jpg" class="img-interface">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-4 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="./interface/img/5.jpg" title="Introduction:

                                                A system is a set of inter-related and interacting objects. In biology, systems appear on all levels
                                                of organization: subcellular, cellular, tissue,organ, individual and population. Systems analysis
                                                studies the properties of dynamic processes,which suggests the definition of systems biology
                                                as a merger of (dynamic) systems theory and biology (for a more detailed discussion of the
                                                term’s definition, see ).Therefore, systems biology signals a shift of focus from the identification,
                                                characterization and classification of components of cells or organisms towards the
                                                understanding of their dynamic interactions and the resulting functional activity.">
								<img src="./interface/img/5.jpg" class="img-interface">
							</a>
							
						</div>
						
					</div>

					<div class="col-md-4 col-sm-3 col-xs-3">
						<div class="img-wrapper">
							<a href="./interface/img/6.jpg" title="Introduction:

                                                Purines, pyrimidines, and ATP are those fateful molecules, which shaped the life on
                                                the Earth, as they occurred in the prebiotic period and became essential for biological
                                                evolution. Indeed, without purines and pyrimidines, construction of RNA and
                                                DNA would be impossible and hence the genetic code that sustains life familiar to
                                                us would never appear.
                                                This was a critical evolutionary
                                                choice because it shaped enzymatic systems to utilize ATP in energydependent
                                                reactions and preordained an appearance of the universal intracellular
                                                signaling system based on calcium ions as keeping cytosolic Ca 2+ extremely low
                                                became vitally important, since otherwise insoluble Ca 2+ phosphates would preclude
                                                the cell energetics.">
								<img src="./interface/img/6.jpg" class="img-interface">
							</a>
							
						</div>
						
					</div>

					
					<!---second row ends-->
				</div>
			</section>
			<!---Our Team Section Start------->
			<br><br><br>
			<div class="container text-center" id="our-members">
				<h2><b>MEMBERS</b></h2>
				<p style="color: white;">
					These are our excellent member you can contact anyone anytime <br> and all are experts and well experience
				</p>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="team-memebers" class="owl-carousel owl-theme">
							<div class="team-member text-center">
								<img src="./interface/img/33.jpeg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Lysias Nathan</h4>
									<h4 class="team-member-designation">CEO & DEV</h4>
									<ul class="social-list">
										<li><a href="tel:+250780870676" class="social-icon icon-white"><i class="fas fa-phone fa-2x"></i></a></li>
										<li><a href="tel:+243976742676" class="social-icon icon-white"><i class="fab fa-whatsapp fa-2x"></i></a></li>
										<li><a href="https://www.facebook.com/lysias.nathan" class="social-icon icon-white"><i class="fab fa-facebook-f fa-2x"></i></a></li>
										<li><a href="mailto:mlysiasnathan@gmail.com" class="social-icon icon-white"><i class="fab fa-google fa-2x"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team-member text-center">
								<img src="./interface/img/33.jpeg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Lysias Nathan</h4>
									<h4 class="team-member-designation">CEO & DEV</h4>
									<ul class="social-list">
										<li><a href="tel:+250780870676" class="social-icon icon-white"><i class="fas fa-phone fa-2x"></i></a></li>
										<li><a href="tel:+243976742676" class="social-icon icon-white"><i class="fab fa-whatsapp fa-2x"></i></a></li>
										<li><a href="https://www.facebook.com/lysias.nathan" class="social-icon icon-white"><i class="fab fa-facebook-f fa-2x"></i></a></li>
										<li><a href="mailto:mlysiasnathan@gmail.com" class="social-icon icon-white"><i class="fab fa-google fa-2x"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="team-member text-center">
								<img src="./interface/img/33.jpeg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Lysias Nathan</h4>
									<h4 class="team-member-designation">CEO & DEV</h4>
									<ul class="social-list">
										<li><a href="tel:+250780870676" class="social-icon icon-white"><i class="fas fa-phone fa-2x"></i></a></li>
										<li><a href="tel:+243976742676" class="social-icon icon-white"><i class="fab fa-whatsapp fa-2x"></i></a></li>
										<li><a href="https://www.facebook.com/lysias.nathan" class="social-icon icon-white"><i class="fab fa-facebook-f fa-2x"></i></a></li>
										<li><a href="mailto:mlysiasnathan@gmail.com" class="social-icon icon-white"><i class="fab fa-google fa-2x"></i></a></li>
									</ul>
								</div>
							</div>
					</div>
				</div>
			</div>
			<!---Our Team Section Ends------->
<!-- =============================================================================================================================== -->


			<!---Contact us Section Start------->


<!------ Include the above in your HEAD tag ---------->

<div class="row text-center">
	<h2><b>CONTACT US</b></h2><br><br>
</div>
			<!---Contact us Section Ends------->

 			<!---footer Section Start	----->

 			<!---footer Section Ends	----->

  		<!---This is script section------->

<script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	}


	function addButton() {
		var body=document.getElementsByTagName('body')[0];
		var myfaq1=document.getElementById('myfaq');
		var btn=document.createElement('button');
		btn.innerHTML='sunil';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}

</script>
<script src="./interface/js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="./interface/js/typed.min.js" type="text/javascript"></script>
<script src="./interface/js/main.js" type="text/javascript"></script>
<!--   <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script> -->

</body>
</html>