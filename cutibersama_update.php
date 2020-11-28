<?php
include("sess_check.php");

$ajuan = date('Y-m-d');
$mulai	= $_POST['mulai'];
$akhir	= $_POST['akhir'];
$ket	= $_POST['keterangan'];
$ketOld	= $_POST['keteranganold'];
// $leader	= $_POST['leader'];
$leader	= 'admin';

$start = new DateTime($mulai);
$finish = new DateTime($akhir);
$int = $start->diff($finish);
$dur = $int->days;
$durasi = $dur+1;
$durasiold = $_POST['durasiold'];
echo $durasiold;

$stt = "Approved";


$pgw = "SELECT * FROM employee";
$qpgw = mysqli_query($conn,$pgw);
// $ress = mysqli_fetch_array($qpgw);

$jml =9999999999999999;


if($durasi>$jml){
	echo "<script type='text/javascript'>
	alert('Durasi cuti lebih banyak dari jumlah cuti tersedia!.'); 
	document.location = 'cuti_create.php'; 
	</script>";	
}else{
	while($data = mysqli_fetch_array($qpgw)){
		// kembalikan total durasi ke pegawai
		if ($durasi > $durasiold) {
			$jmcutiadd = $durasiold + ($durasi- $durasiold);
		} else {
			$jmcutiadd = $durasi - $durasiold;
		}

		$jmcuti = $data['jml_cuti'] - $jmcutiadd;
		$sql2 = "UPDATE employee SET jml_cuti = '$jmcuti' where npp = '".$data['npp']."' ";
		$query 	= mysqli_query($conn,$sql2);

	}
	$sql 	= "UPDATE cuti SET tgl_awal = '$mulai', tgl_akhir = '$akhir', keterangan ='$ket', durasi = '$durasi' where keterangan = '$ketOld' ";
	$query 	= mysqli_query($conn,$sql);
	echo "<script type='text/javascript'>
				alert('Pengajuan cuti berhasil!'); 
				document.location = 'cutibersama.php'; 
			</script>";
}
?>