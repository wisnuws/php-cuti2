<?php
include("sess_check.php");

$npp	= $_POST['npp'];
$ajuan = date('Y-m-d');
$mulai	= $_POST['mulai'];
$akhir	= $_POST['akhir'];
$ket	= $_POST['keterangan'];
// $leader	= $_POST['leader'];
$leader	= 'admin';

$start = new DateTime($mulai);
$finish = new DateTime($akhir);
$int = $start->diff($finish);
$dur = $int->days;
$durasi = $dur+1;

$stt = "Approved";


$pgw = "SELECT * FROM employee";
$qpgw = mysqli_query($conn,$pgw);
//$ress = mysqli_fetch_array($qpgw);

$jml =99999999;

if($durasi>$jml){
	echo "<script type='text/javascript'>
			alert('Durasi cuti lebih banyak dari jumlah cuti tersedia!.'); 
			document.location = 'cutibersama_tambah.php'; 
		</script>";	
}else{
	while($data = mysqli_fetch_array($qpgw)){
		$npp = $data['npp'];
		$id = date('dmYHis').$npp;
		$sql 	= "INSERT INTO cuti (no_cuti, npp, tgl_pengajuan, tgl_awal, tgl_akhir, durasi, keterangan, leader, stt_cuti) 
				VALUES ('$id','$npp','$ajuan','$mulai','$akhir','$durasi','$ket','$leader','$stt')";
		$query 	= mysqli_query($conn,$sql);
		$jmcuti = $data['jml_cuti'] - $durasi;
		$sql2 = "UPDATE employee SET jml_cuti = '$jmcuti' where npp = '$npp' ";
		$query 	= mysqli_query($conn,$sql2);

	}
	echo "<script type='text/javascript'>
				alert('Pengajuan cuti berhasil!'); 
				document.location = 'cutibersama.php'; 
			</script>";
}
?>