<?php
if (isset($_POST['submit'])) {
	
	require 'dbh.inc.php';
	
	$url = $_POST['url'];
	
	if (empty($url)){
		header("Location: index.php");
		exit();
	} else {
			$sql = "INSERT INTO urls (url) VALUES (?)";
			$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: index.php?error=sqlerror");
					exit();
				} else {
					mysqli_stmt_bind_param($stmt, "s", $url);
					mysqli_stmt_execute($stmt);
					header("Location: index.php");
					exit();
				}
			}
} else {
	header("Location: index.php");
	exit();
}
