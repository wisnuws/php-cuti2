<?php
include("sess_check.php");

$id = $sess_admid;
$jml = $_POST['jml'];

$sql = "UPDATE employee SET jml_cuti =".$jml."";
$ress = mysqli_query($conn, $sql);
echo "<script>alert('Berhasil Update Semua Cuti Karyawan');location='./'</script>";
?>