<?php require_once("../includes/session.php");?>
<?php require_once("../includes/db_connection.php");?>
<?php require_once("../includes/functions.php");?>
<?php //confirm_logged_in(); ?>
<?php
	$admin_set = find_all_admins();
?>
<?php $layout_context = "admin"?>
<?php	include("../includes/layouts/header.php");?>
	<div id="main">
		<div id="navigation">
		 &nbsp;
		</div><!--navigator-->
		<div id="page">
				<?php echo message();?>
				<h2>Manage Admin</h2>
				<table>
					<tr>
						<th style="text-align:left; width:200px;">Username</th>
						<th colspan="2" style="text-align:left;">Actions</th>
					</tr>
					<?php while($admin = mysqli_fetch_assoc($admin_set)){?>
						<tr>
							<td><?php echo htmlentities($admin["username"]); ?></br>
							 <?php// echo htmlentities($admin["hashed_password"]); ?>
							</td>
							<td><a href="edit_admin.php?id=<?php echo urlencode($admin["id"]); ?>">Edit</a></td>
							<td><a href="delete_admin.php?id=<?php echo urlencode($admin["id"]); ?>" onclick="return confirm('Are you sure?');">Delete</a></td>
							
						</tr>
					<?php } ?>
				</table>
				</br>
				<a href="new_admin.php">Add new admin</a>
				<a href="admin.php">Back</a>
				<hr />

			</div><!--page-->	
		</div><!--main-->

<?php	include("../includes/layouts/footer.php");?>		
