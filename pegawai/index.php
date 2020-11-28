<?php
	include("sess_check.php");

	$id=$sess_pegawaiid;
	
	$sql_g = "SELECT * FROM employee WHERE npp='$id'";
	$ress_g = mysqli_query($conn, $sql_g);
	$res = mysqli_fetch_array($ress_g);
//memanggil database cuti	
	$sqlb = "SELECT * FROM cuti WHERE npp='$id' AND stt_cuti!='Rejected' AND stt_cuti != 'Approved'";
	$ressb = mysqli_query($conn, $sqlb);
	$b = mysqli_num_rows($ressb);

	$sqlc = "SELECT * FROM cuti WHERE npp='$id' AND stt_cuti='Rejected'";
	$ressc = mysqli_query($conn, $sqlc);
	$c = mysqli_num_rows($ressc);

	$sqla = "SELECT * FROM cuti WHERE npp='$id' AND hrd_app=1";
	$ressa = mysqli_query($conn, $sqla);
	$a = mysqli_num_rows($ressa);
//memanggil database cuti_luar
	$sqlb1 = "SELECT * FROM cuti_luar WHERE npp='$id' AND stt_cuti!='Rejected' AND stt_cuti != 'Approved'";
	$ressb1 = mysqli_query($conn, $sqlb1);
	$b1 = mysqli_num_rows($ressb1);

	$sqlc1 = "SELECT * FROM cuti_luar WHERE npp='$id' AND stt_cuti='Rejected'";
	$ressc1 = mysqli_query($conn, $sqlc1);
	$c1 = mysqli_num_rows($ressc1);

	$sqla1 = "SELECT * FROM cuti_luar WHERE npp='$id' AND hrd_app=1";
	$ressa1 = mysqli_query($conn, $sqla1);
	$a1 = mysqli_num_rows($ressa1);

	$sql2 = "SELECT * FROM `cuti` WHERE hrd_app = 1 and npp = ".$id."";
	$query2 = mysqli_query($conn,$sql2);
	//$resultCuti = mysqli_fetch_array($query2);
	$cutiDurasi = 0;

	// deskripsi halaman
	$pagedesc = "Beranda";
	include("layout_top.php");
	include("dist/function/format_rupiah.php");
?>
<?php
	while($data = mysqli_fetch_array($query2)){
		$cutiDurasi += $data['durasi'];
	}
	?>
<!-- top of file -->
		<!-- Page Content -->
		<div id="page-wrapper">
            <div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<form class="form-horizontal">
							<div class="panel panel-default">
								<div class="panel-body">
								<h2 align="center">Selamat Datang, <?php echo $res['nama_emp']; ?> Sisa Cuti Anda <?php echo $res['jml_cuti'] ?> hari </h2>
								<hr/>
								<center><img src="../foto/<?php echo $res['foto_emp']?>" width="120px"></center>
								<hr/>
								</div>
							</div><!-- /.panel -->
						</form>
					</div><!-- /.col-lg-12 -->
				</div><!-- /.row -->
				
			<div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="page-header">Cuti Tahunan</h2>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->

				<!-- <h2 align="center">Cuti Tahunan </h2> -->

				<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-check-circle fa-3x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"><?php echo $a; ?></div>
										<div><h4>Approved</h4></div>
									</div>
								</div>
							</div>
							<a href="cuti_app.php">
								<div class="panel-footer">
									<span class="pull-left">Lihat Rincian</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div><!-- /.panel-green -->
					
					<div class="col-lg-4 col-md-4">
						<div class="panel panel-yellow">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-plus-circle fa-3x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"><?php echo $b; ?></div>
										<div><h4>Menunggu Approval</h4></div>
									</div>
								</div>
							</div>
							<a href="cuti_waitapp.php">
								<div class="panel-footer">
									<span class="pull-left">Lihat Rincian</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div><!-- /.panel-green -->

					<div class="col-lg-4 col-md-4">
						<div class="panel panel-red">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-minus-circle fa-3x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"><?php echo $c; ?></div>
										<div><h4>Rejected</h4></div>
									</div>
								</div>
							</div>
							<a href="cuti_reject.php">
								<div class="panel-footer">
									<span class="pull-left">Lihat Rincian</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div><!-- /.panel-green -->
				</div>

				<!-- /.row -->
				
			</div><!-- /.container-fluid -->
			<div class="container-fluid">
                	<div class="row">
                    	<div class="col-lg-12">
                        	<h2 class="page-header">Cuti Luar Tahunan</h2>
                    	</div><!-- /.col-lg-12 -->
                	</div><!-- /.row -->

					<!-- <h2 align="center">Cuti Luar Tahunan </h2> -->

					<div class="row">
					<div class="col-lg-4 col-md-4">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-check-circle fa-3x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"><?php echo $a1; ?></div>
										<div><h4>Approved</h4></div>
									</div>
								</div>
							</div>
							<a href="cuti_appnew.php">
								<div class="panel-footer">
									<span class="pull-left">Lihat Rincian</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div><!-- /.panel-green -->
					
					<div class="col-lg-4 col-md-4">
						<div class="panel panel-yellow">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-plus-circle fa-3x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"><?php echo $b1; ?></div>
										<div><h4>Menunggu Approval</h4></div>
									</div>
								</div>
							</div>
							<a href="cuti-waitappnew.php">
								<div class="panel-footer">
									<span class="pull-left">Lihat Rincian</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div><!-- /.panel-green -->

					<div class="col-lg-4 col-md-4">
						<div class="panel panel-red">
							<div class="panel-heading">
								<div class="row">
									<div class="col-xs-3">
										<i class="fa fa-minus-circle fa-3x"></i>
									</div>
									<div class="col-xs-9 text-right">
										<div class="huge"><?php echo $c1; ?></div>
										<div><h4>Rejected</h4></div>
									</div>
								</div>
							</div>
							<a href="cuti_rejectnew.php">
								<div class="panel-footer">
									<span class="pull-left">Lihat Rincian</span>
									<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
									<div class="clearfix"></div>
								</div>
							</a>
						</div>
					</div><!-- /.panel-green -->
				</div>
				</div>
        </div><!-- /#page-wrapper -->
<!-- bottom of file -->
<?php
	include("layout_bottom.php");
?>