<?php include './includes/security_admin.php';?>

<?php include './includes/config.php';?>

<?php include './includes/back_end.php';?>

<?php include './includes/links.php';?>

<?php include './includes/header.php';?>

<?php

  
	if (isset($_POST['edit_btn'])) 
	{
	    $id = $_POST['edit_id'];
	    $sql= "SELECT * FROM users WHERE id= '$id' ";
	    $result = mysqli_query($conn, $sql);
	    

	    foreach ($result as $row)
	    	{
	    		?>
				<form class="signin-form" method="POST" action="./includes/back_end.php" style="margin: 0% 30% 0% 30%;background-color: white; padding: 5% 5% .5% 5%;border-radius: 10px;">
					Edit your data containt<br/><br/>

					<input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
					<input type="hidden" name="edit_image" value="<?php echo $row['image']; ?>">
					<input type="hidden" name="edit_email" value="<?php echo $row['email']; ?>">
					<input type="hidden" name="edit_password" value="<?php echo $row['password']; ?>">
					
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
													  height: 40px;" 
													  placeholder="First name :" name="edit_first_name" value="<?php echo $row['first_name'];?>" required>
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
													  height: 40px;" 
													  placeholder="Last name :" name="edit_last_name" value="<?php echo $row['last_name']; ?>" required>
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
													  height: 40px;" 
													  placeholder="Birth date :" name="edit_birth_day" value="<?php echo $row['birth_day']; ?>" required>
					</div>
					
					<div class="txtbtn4" style="position: relative;
													  widows: 90%;
													  height: 45px;
													  border: 2px #03a9f4 solid;
													  border-radius: 0px 0px 10px 10px;
													  margin: 10px 0px;
													  margin-bottom: -5px;">
				        <select name="update_role" class="" style="font-size: 15px;
													  color: #03a9f4;
													  border: none;
													  width: 100%;
													  outline: none;
													  text-align-last: center;
													  background: none;
													  padding: 0 5px;
													  height: 40px;" >
				        	<option value="user">User</option>
				        	<option value="admin">Admin</option>
				        </select>
		    		</div>
					<a><input type="submit" name="updatebtn" class="add_account" value="Update" style="
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