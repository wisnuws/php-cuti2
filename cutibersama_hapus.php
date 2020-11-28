<?php
include("sess_check.php");
$id = $_GET['no_cuti'];	
$sql = "SELECT * FROM cuti WHERE keterangan = '".$id."' ";
$ress = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($ress);
	$sql2 = "SELECT * FROM employee";
	$ress2 = mysqli_query($conn, $sql2);
	
	while($data2 = mysqli_fetch_array($ress2)){
		$jml = $data2['jml_cuti'] + $data['durasi'];
		$sqlupdate = "UPDATE employee SET jml_cuti = '".$jml."' ";
		mysqli_query($conn, $sqlupdate);
	}
		$sql = "DELETE FROM cuti WHERE keterangan='". $id ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: cutibersama.php?act=delete&msg=success");
?>