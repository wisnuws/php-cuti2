<?php
	include("sess_check.php");
	
	if(isset($_GET['no_cuti'])) {
		$sql = "SELECT * FROM cuti WHERE keterangan='". $_GET['no_cuti'] ."'";
		$ress = mysqli_query($conn, $sql);
		$data = mysqli_fetch_array($ress);
	}
	// deskripsi halaman
	$pagedesc = "cutibersama";
	$menuparent = "buatcuti";
	include("layout_top.php");
?>

<!-- <script type="text/javascript">
	function checkNppAvailability() {
	$("#loaderIcon").show();
	jQuery.ajax({
		url: "check_nppavailability.php",
		data:'npp='+$("#npp").val(),
		type: "POST",
		success:function(data){
			$("#user-availability-status").html(data);
			$("#loaderIcon").hide();
		},
		error:function (){}
	});
	}
</script> -->
<!-- top of file -->
		<!-- Page Content -->
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Data Cuti Bersama</h1>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->

				<div class="row">
					<div class="col-lg-12"><?php include("layout_alert.php"); ?></div>
				</div>
				
				<div class="row">
					<div class="col-lg-12">
						<form class="form-horizontal" action="cutibersama_update.php" method="POST" enctype="multipart/form-data">
							<div class="panel panel-default">
								<div class="panel-heading"><h3>Edit Cuti Bersama</h3></div>
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-sm-3">Mulai Cuti</label>
										<div class="col-sm-4">
											<input type="date" name="mulai" value="<?php echo $data['tgl_awal'] ?>" class="form-control" required>
											<input type="hidden" name="now" class="form-control" value="<?php echo $now;?>" required>
											<input type="hidden" name="npp" class="form-control" value="<?php echo $npp;?>" required>
											<input type="hidden" name="keteranganold" class="form-control" value="<?php echo $data['keterangan'];?>" required>
											<input type="hidden" name="durasiold" class="form-control" value="<?php echo $data['durasi'];?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Akhir Cuti</label>
										<div class="col-sm-4">
											<input type="date" name="akhir" class="form-control" value="<?php echo $data['tgl_akhir'] ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Keterangan</label>
										<div class="col-sm-4">
											<textarea name="keterangan" class="form-control" placeholder="Keterangan" rows="3" required><?php echo $data['keterangan'] ?></textarea>
										</div>
									</div>
								</div>
								<div class="panel-footer">
									<button type="submit" name="perbarui" class="btn btn-success">Update</button>
								</div>
							</div><!-- /.panel -->
						</form>
					</div><!-- /.col-lg-12 -->
				</div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div><!-- /#page-wrapper -->
<!-- bottom of file -->
<?php
	include("layout_bottom.php");
?>