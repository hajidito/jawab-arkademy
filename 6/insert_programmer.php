<?php
	include 'config.php';
		$nama     = $_POST['nama'];
		mysql_query ("INSERT INTO users (name)
		VALUES ('".$nama."')");
		header("location:index.php");
?>		