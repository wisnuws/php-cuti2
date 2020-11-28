<?php
include("sess_check.php");

$no=$_POST['no'];
$aksi=$_POST['aksi'];
if (isset($_POST['reject'])) {
	$reject=$_POST['reject'];
}
$stt = "";
$null = 0;



if($aksi=="2"){
	$stt="Rejected";
	$sql = "UPDATE cuti SET
			stt_cuti='". $stt ."',
			lead_app='". $null ."',
			spv_app='". $null ."',
			mng_app='". $null ."',
			ket_reject='". $reject ."'
			WHERE no_cuti='". $no ."'";
		$ress = mysqli_query($conn, $sql);
		header("location: app_wait.php?act=update&msg=success");
	
}else{
	$stt="Approved";
	$num	=1;
	// terima cuti
	$sql = "UPDATE cuti SET
			stt_cuti='". $stt ."',
			hrd_app='". $num ."'
			WHERE no_cuti='". $no ."'";
		$ress = mysqli_query($conn, $sql);
		// ambil data cuti
		$sql2  = "SELECT * FROM cuti where no_cuti ='".$no."' ";
		$ress2 = mysqli_query($conn, $sql2);
			$data = mysqli_fetch_array($ress2);
		$npp = $data['npp'];

		// ambil data pegawai 
		$em = "SELECT * FROM employee where npp  = '$npp'";
		$reem = mysqli_query($conn,$em);
		$dem = mysqli_fetch_array($reem);
		$durasi = ($dem['jml_cuti'] - $data['durasi']);
		// update durasi
		$sql3 = "UPDATE employee set jml_cuti = '$durasi' where npp = '$npp' ";
		$ress3 = mysqli_query($conn, $sql3);

		header("location: app_wait.php?act=update&msg=success");
	
}
?>