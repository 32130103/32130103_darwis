		<div id="footer">Copyright <?php echo date("Y")?>, Widget Corp and ME</div>
	</body>
</html>
<?php 
	if(isset($connection)){
		mysqli_close($connection);
	}
?>