<?php require_once("../includes/session.php");?>
<?php require_once("../includes/db_connection.php");?>
<?php require_once("../includes/functions.php");?>
<?php require_once("../includes/validation_functions.php");?>
<?php
	if(isset($_POST["submit"])){
		$username = mysql_prep($_POST["username"]);
		$hashed_password = password_encrypt($_POST["password"]);
		
		//validations
		$required_fields = array("username","password");		
		validate_presences($required_fields);
		
		$fields_with_max_lengths = array("username" => 30);
		validate_max_lengths($fields_with_max_lengths);
		
		if(!empty($errors)){
			$_SESSION["errors"] = $errors;
			redirect_to("new_admin.php");
		} 
		
		$sql = "INSERT INTO admins (username, hashed_password)
					VALUES ('{$username}','{$hashed_password}')";
		$result = mysqli_query($connection, $sql);
		
		if($result){
		//SUCCESS
			$_SESSION["message"] = "Admin created.";
			redirect_to("manage_admin.php");
		} else{
		//FAILURE
			$_SESSION["message"]  = "Admin creation failed.";
		}
	
	} else{
		
	}
?>
<?php $layout_context = "admin"?>
<?php include("../includes/layouts/header.php");?>
		<div id="main">
			<div id="navigation">
			</div><!--navigator-->
			<div id="page">
					<?php echo message(); ?>
					<?php $errors = errors(); ?>
					<?php echo form_errors($errors); ?>
					<h2>Create Admin</h2>
					<form action="new_admin.php" method= "POST">
						<p>Username :
							<input type="text" name="username"/>
						</p>
						<p>Password :
							<input type="password" name="password"/>
						</p>
						<input type="submit" name="submit" value="Create Admin"/>
					</form>
					</br>
					<a href="manage_admin.php">Cancel</a>
			</div><!--page-->	
		</div><!--main-->
		
<?php	include("../include/layouts/footer.php");?>		