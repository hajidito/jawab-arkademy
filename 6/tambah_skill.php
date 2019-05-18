<?php
	include 'config.php';
		$skill     = $_POST['skill'];
		mysql_query ("INSERT INTO skills (name,user_id)
		VALUES ('".$skill."',".$_GET['id_user'].")");
		header("location:index.php");
?>		