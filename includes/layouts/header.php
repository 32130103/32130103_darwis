<?php require_once("../includes/db_connection.php"); ?>
<?php
 if(!isset($layout_context)){
 $layout_context = "public";
 }
 $sql = "SELECT *
		FROM logo
		ORDER BY id DESC
		LIMIT 1";
$hasil = mysqli_query($connection, $sql);
$baris = mysqli_fetch_assoc($hasil);
?>
<html>
	<head>
		<title>Widget Corp <?php if ($layout_context == "admin") {
			echo "Admin"; }?> </title>
		<link href="css/public.css" media="all" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div id="header">
			<div id="logo">
			<img src="<?php echo $baris["gambar"]; ?>"/>
			</div>
			<div id="judul">
				<h1>Widget Corp <?php if ($layout_context == "admin") {
				echo "Admin"; }?> </h1>
			</div>
		</div>