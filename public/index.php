<?php require_once("../includes/session.php");?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php $layout_context = "public";?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(true); ?>
		<div id="main">
			<div id="navigation">
				<?php echo public_navigation($current_subject, $current_page); ?> <br>
			</div>
			<div id="page">
				<?php if ($current_page) {?>
				  <div class="view-content">
				  <h2><?php echo htmlentities($current_page["menu_name"]); ?></h2><br />
				   <?php echo nl2br(htmlentities($current_page["content"])); ?><br />
				  </div><br><br>
				<?php } else {?>
				 <p>Welcome!</p>
				<?php }?>	
			</div>
		</div>
<?php include("../includes/layouts/footer.php"); ?>