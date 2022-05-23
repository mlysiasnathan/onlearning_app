<?php include './includes/security_admin.php';?>

<?php include './includes/back_end.php';?>

<?php include './includes/links.php';?>

<?php include './includes/header.php';?>

<?php

  
	if (isset($_POST['exam_btn'])) 
	{
	    $id = $_POST['edit_exam_id'];
	    $sql= "SELECT * FROM courses WHERE id= '$id' ";
	    $result = mysqli_query($conn, $sql);
	    

	    foreach ($result as $row)
	    	{
	    		?>
				<form class="exam-form" method="POST" action="./includes/back_end.php" style="margin: 2% 10% 0% 10%;background-color: white; padding: 5% 5% .5% 5%;border-radius: 10px;" enctype="multipart/form-data">
					<p class="text-center text-primary">Edit the examination paper of <?php echo $row['name']; ?></p>

					<input type="hidden" name="edit_exam_id" value="<?php echo $row['id']; ?>">
					<input type="hidden" name="edit_name" value="<?php echo $row['name']; ?>">
					<input type="hidden" name="edit_intro" value="<?php echo $row['intro']; ?>">
					<input type="hidden" name="edit_pdf" value="<?php echo $row['pdf']; ?>">
					<input type="hidden" name="edit_image" value="<?php echo $row['image']; ?>">
			<div class="row mt-3">
				<div class="col-6">1
					<div class="bg-primary" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
													  border-radius: 10px 10px 0px 0px;
													  margin: -5px 0px;">
							<input type="text" class="text-white " style="font-size: 15px;
													  border: none;
													  width: 100%;
													  outline: none;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Question 1 :" name="edit_q1" value="<?php echo $row['q1'];?>" >
					</div>
					<div class="txtbtn2" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
														border-radius: 0px 0px 0px 0px;
													  margin: 10px 0px;
													  margin-bottom: -5px;">
							<input type="text" class="text-success" style="font-size: 15px;
													  border: none;
													  width: 100%;
													  outline: none;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Answer 1 :" name="edit_ans1" value="<?php echo $row['ans1']; ?>" >
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
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Opinion 1 :" name="edit_q1opinion1" value="<?php echo $row['q1opinion1']; ?>" >
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
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Opinion 2 :" name="edit_q1opinion2" value="<?php echo $row['q1opinion2']; ?>" >
					</div>
					<div class="txtbtn2" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
														border-radius: 0px 0px 10px 10px;
													  margin: 10px 0px;
													  margin-bottom: -5px;">
							<input type="text" style="font-size: 15px;
													  color: #03a9f4;
													  border: none;
													  width: 100%;
													  outline: none;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Opinion 3 :" name="edit_q1opinion3" value="<?php echo $row['q1opinion3']; ?>" >
					</div>
				</div>
<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------
 -->			<div class="col-6">2
					<div class="bg-primary" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
													  border-radius: 10px 10px 0px 0px;
													  margin: -5px 0px;">
							<input type="text" class="text-white " style="font-size: 15px;
													  color: #03a9f4;
													  border: none;
													  width: 100%;
													  outline: none;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Question 2 :" name="edit_q2" value="<?php echo $row['q2'];?>" >
					</div>
					<div class="txtbtn2" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
														border-radius: 0px 0px 0px 0px;
													  margin: 10px 0px;
													  margin-bottom: -5px;">
							<input type="text" class="text-success" style="font-size: 15px;
													  border: none;
													  width: 100%;
													  outline: none;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Answer 2 :" name="edit_ans2" value="<?php echo $row['ans2']; ?>" >
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
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Opinion 1 :" name="edit_q2opinion1" value="<?php echo $row['q2opinion1']; ?>" >
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
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Opinion 2 :" name="edit_q2opinion2" value="<?php echo $row['q2opinion2']; ?>" >
					</div>
					<div class="txtbtn2" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
														border-radius: 0px 0px 10px 10px;
													  margin: 10px 0px;
													  margin-bottom: -5px;">
							<input type="text" style="font-size: 15px;
													  color: #03a9f4;
													  border: none;
													  width: 100%;
													  outline: none;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Opinion 3 :" name="edit_q2opinion3" value="<?php echo $row['q2opinion3']; ?>" >
					</div>
				</div>
			</div>
<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------
 -->		<div class="row mt-3">
				<div class="col-6 mt-3">3
					<div class="bg-primary" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
													  border-radius: 10px 10px 0px 0px;
													  margin: -5px 0px;">
							<input type="text" class="text-white " style="font-size: 15px;
													  color: #03a9f4;
													  border: none;
													  width: 100%;
													  outline: none;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Question 3 :" name="edit_q3" value="<?php echo $row['q3'];?>" >
					</div>
					<div class="txtbtn2" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
														border-radius: 0px 0px 0px 0px;
													  margin: 10px 0px;
													  margin-bottom: -5px;">
							<input type="text" class="text-success" style="font-size: 15px;
													  border: none;
													  width: 100%;
													  outline: none;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Answer 3 :" name="edit_ans3" value="<?php echo $row['ans3']; ?>" >
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
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Opinion 1 :" name="edit_q3opinion1" value="<?php echo $row['q3opinion1']; ?>" >
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
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Opinion 2 :" name="edit_q3opinion2" value="<?php echo $row['q3opinion2']; ?>" >
					</div>
					<div class="txtbtn2" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
														border-radius: 0px 0px 10px 10px;
													  margin: 10px 0px;
													  margin-bottom: -5px;">
							<input type="text" style="font-size: 15px;
													  color: #03a9f4;
													  border: none;
													  width: 100%;
													  outline: none;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Opinion 3 :" name="edit_q3opinion3" value="<?php echo $row['q3opinion3']; ?>" >
					</div>
				</div>
<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------
 -->			<div class="col-6 mt-3">4
					<div class="bg-primary" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
													  border-radius: 10px 10px 0px 0px;
													  margin: -5px 0px;">
							<input type="text" class="text-white " style="font-size: 15px;
													  color: #03a9f4;
													  border: none;
													  width: 100%;
													  outline: none;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Question 4 :" name="edit_q4" value="<?php echo $row['q4'];?>" >
					</div>
					<div class="txtbtn2" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
														border-radius: 0px 0px 0px 0px;
													  margin: 10px 0px;
													  margin-bottom: -5px;">
							<input type="text" class="text-success" style="font-size: 15px;
													  border: none;
													  width: 100%;
													  outline: none;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Answer 4 :" name="edit_ans4" value="<?php echo $row['ans4']; ?>" >
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
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Opinion 1 :" name="edit_q4opinion1" value="<?php echo $row['q4opinion1']; ?>" >
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
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Opinion 2 :" name="edit_q4opinion2" value="<?php echo $row['q4opinion2']; ?>" >
					</div>
					<div class="txtbtn2" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
														border-radius: 0px 0px 10px 10px;
													  margin: 10px 0px;
													  margin-bottom: -5px;">
							<input type="text" style="font-size: 15px;
													  color: #03a9f4;
													  border: none;
													  width: 100%;
													  outline: none;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Opinion 3 :" name="edit_q4opinion3" value="<?php echo $row['q4opinion3']; ?>" >
					</div>
				</div>
			</div>
<!-- ---------------------------------------------------------------------------------------------------------------------------------------------------------------
 -->		<div class="row mt-3">
				<div class="col mt-3">5
					<div class="bg-primary" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
													  border-radius: 10px 10px 0px 0px;
													  margin: -5px 0px;">
							<input type="text" class="text-white " style="font-size: 15px;
													  color: #03a9f4;
													  border: none;
													  width: 100%;
													  outline: none;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Question 5 :" name="edit_q5" value="<?php echo $row['q5'];?>" >
					</div>
					<div class="txtbtn2" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
														border-radius: 0px 0px 0px 0px;
													  margin: 10px 0px;
													  margin-bottom: -5px;">
							<input type="text" class="text-success" style="font-size: 15px;
													  border: none;
													  width: 100%;
													  outline: none;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Answer 5 :" name="edit_ans5" value="<?php echo $row['ans5']; ?>" >
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
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Opinion 1 :" name="edit_q5opinion1" value="<?php echo $row['q5opinion1']; ?>" >
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
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Opinion 2 :" name="edit_q5opinion2" value="<?php echo $row['q5opinion2']; ?>" >
					</div>
					<div class="txtbtn2" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
														border-radius: 0px 0px 10px 10px;
													  margin: 10px 0px;
													  margin-bottom: -5px;">
							<input type="text" style="font-size: 15px;
													  color: #03a9f4;
													  border: none;
													  width: 100%;
													  outline: none;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" 
													  placeholder="Opinion 3 :" name="edit_q5opinion3" value="<?php echo $row['q5opinion3']; ?>" >
					</div>
				</div>
			</div>
			<a><input type="submit" name="edit_exam_btn" class="add_account" value="Update Questionnaire" style="
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
<?php include './includes/scripts.php';?>