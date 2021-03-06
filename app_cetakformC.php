<?php
	$haries = array("Sunday" => "Minggu", "Monday" => "Senin", "Tuesday" => "Selasa", "Wednesday" => "Rabu", "Thursday" => "Kamis", "Friday" => "Jum'at", "Saturday" => "Sabtu");
	$bulans = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
	$bulans_count = count($bulans);

	$hari_ini = $haries[date("l")];
	$bulan_ini = $bulans[date("n")];
	$tanggal = date("d");
	$bulan = date("m");
	$tahun = date("Y");

	include("sess_check.php");

	include("dist/function/format_tanggal.php");
	include("dist/function/format_rupiah.php");
	$no 	 = $_GET['no'];
	$sql = "SELECT cuti.*, employee.* FROM cuti, employee WHERE cuti.npp=employee.npp
			AND cuti.no_cuti ='$no'";
	$query = mysqli_query($conn,$sql);
	$result = mysqli_fetch_array($query);
	// deskripsi halaman
	$pagedesc = "Cetak Form Cuti";
	$pagetitle = str_replace(" ", "_", $pagedesc)
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="universitas pamulang">

	<title><?php echo $pagetitle ?></title>

	<link href="libs/images/jm.png" rel="icon" type="images/x-icon">

	<!-- Bootstrap Core CSS -->
	<link href="libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="dist/css/offline-font.css" rel="stylesheet">
	<link href="dist/css/custom-report.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="libs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- jQuery -->
	<script src="libs/jquery/dist/jquery.min.js"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<section id="header-kop">
		<div class="container-fluid">
			<table class="table table-borderless">
				<tbody>
					<tr>
						<td class="text-left" width="20%">
							<img src="libs/images/jm.png" alt="logo-dkm" width="70" />
						</td>
						<td class="text-center" width="60%">
						<b>PT. Jasamarga TransJawa Tol</b> <br>
						PT. Jasamarga Transjawa Tol Area 2 Ruas Semarang, Plaza Tol Manyaran Semarang<br>
						Telp: (021) 89115030<br>
						<td class="text-right" width="20%">

						</td>
					</tr>
				</tbody>
			</table>
			<hr class="line-top" />
		</div>
	</section>
<br/>
<br/>
	<section id="body-of-report">
		<div class="container-fluid">
			<h4 class="text-center">PERMOHONAN PELAKSANAAN JADWAL CUTI TAHUNAN</h4>
			<br />
			<br />
			<p>Yth.<br>
            Area 2 Head <br>
            Yang selanjutnya diteruskan <i> Human Capital </i>Capital and General Affair Departement Head <br>
            PT Jasamarga Transjawa Tol <br>
            Di Tempat
        </p>

		<p>Sesuai dengan jadwal cuti yang sudah disepakati, bersama ini kami mengajukan permohonan cuti tahunan, sebagai berikut:
            <ol type="a">
                <li>Nama / NPP: <?php echo $result['nama_emp'] ?> / <?php echo $result['npp'] ?></li>
                <li>Jabatan / Grade	: <?php echo $result['jabatan'];?> </li>
                <li>Unit Kerja		: <?php echo $result['divisi'];?></li>
                <li>Periode Hak Cuti Tahunan	: Tahun 2020</li>
            </ol>
			Dengan usulan Sesuai Jadwal Cuti Tahunan, sebagai berikut:<br>
            
            Tanggal pelaksanaan cuti 	: <?php echo IndonesiaTgl($result['tgl_awal']);?> s.d <td><?php echo IndonesiaTgl($result['tgl_akhir']);?><br>
            Alasan cuti			: pelaksanaan cuti tahunan<br>
        
            Demikian permohonan ini saya buat, untuk mendapatkan pertimbangan seperlunya.<br>
			<table border="1px" width="1000px" align=center>
                <tr>
                    <td><center>Putusan Pemimpin yang Berwenang<br>
                            (Setuju / Tidak Setuju)*<br>
                            Dengan jadwal Cuti Tahunan sesuai<br>
                            (Usulan / Berubah)*<br>
                            Menjadi tanggal …… s.d tanggal ……<br>
                            <br><br><br><br><br>
                        Zakaria<br>
                        Area 2 Head</center>
                    </td>
                    <td><center>Semarang, &nbsp;<?php echo $hari_ini.", ".$tanggal." ".$bulan_ini." ".$tahun ?><br><br><br><br><br><br><br><br>
                        <?php echo $result['nama_emp'] ?><br>
                        NPP : <?php echo $result['npp'] ?></center>
                    </td>
                </tr>
            </table>
			<br> <br> <br> <br> 
            Keterangan :<br>
            *) Coret yang tidak perlu<br>
            
            
            <table border="1px" width="400px" align=right >
                <tr>
                    
                    <td colspan="2"><center>
                            Tanda Terima<br>
                            Unit Kerja Human Capital yang<br>
                            Mengelola Cuti Karyawan<br>
                    </td></center>
                </tr>
                <tr>
                    <td>
                            •	Tanggal<br>
                            •	Nama<br>
                            •	NPP<br> 
                            
                    </td>
                    <td>
                            : ………..<br>
                            : ………..<br>
                            : ………..<br>                       
                    </td>
                </tr>
            </table>
		</p>

			<br>
			<div>
			<label>*Form ini dicetak oleh sistem dan tidak memerlukan tanda tangan atau pengesahan lain.</label>
			</div>
			
		</div><!-- /.container -->
	</section>

	<script type="text/javascript">
		$(document).ready(function() {
			window.print();
		});
	</script>

	<!-- Bootstrap Core JavaScript -->
	<script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
	<!-- jTebilang JavaScript -->
	<script src="libs/jTerbilang/jTerbilang.js"></script>

</body>
</html>