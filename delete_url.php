<?php
if (isset($_GET['id'])) {
	
	require 'dbh.inc.php';
	
	$urlid = $_GET['id'];

			$sql = "DELETE FROM urls WHERE id=?";
			$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt, $sql)) {
					header("Location: index.php?error=sqlerror");
					exit();
				} else {
					mysqli_stmt_bind_param($stmt, "s", $urlid);
					mysqli_stmt_execute($stmt);
					header("Location: index.php");
					exit();
				}
} else {
	header("Location: index.php");
	exit();
}
