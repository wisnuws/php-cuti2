<?php
	include("sess_check.php");
		$id = $_GET['no'];	
		$sql = "DELETE FROM cuti_luar WHERE no_cuti ='".$id."' ";
		$ress = mysqli_query($conn, $sql);
		header("location: cuti-waitappnew.php?act=delete&msg=success");
?>