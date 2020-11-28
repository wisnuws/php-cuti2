<?php
include("sess_check.php");

	// deskripsi halaman
$pagedesc = "Data Karyawan";
$menuparent = "cuti";
//memanggil fungsi jumlah cuti
$pgw = "SELECT * FROM employee";
$qpgw = mysqli_query($conn,$pgw);
$ress = mysqli_fetch_array($qpgw);
$jml_cuti = $ress['jml_cuti'];
include("layout_top.php");
?>
<script type="text/javascript">
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
</script>
<!-- top of file -->
<!-- Page Content -->
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Update Semua Cuti Karyawan</h1>
			</div><!-- /.col-lg-12 -->
		</div><!-- /.row -->

		<div class="row">
			<div class="col-lg-12"><?php include("layout_alert.php"); ?></div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<form class="form-horizontal" action="cutiall_update.php" method="POST" enctype="multipart/form-data">
					<div class="panel panel-default">
						<div class="panel-heading"><h3>Update Cuti</h3></div>
						<!-- menampilkan jumlah cuti -->
						<div class="alert alert-warning">
							<p class="text-center">Total cuti karyawan saat ini <?php echo $jml_cuti;  ?> hari</p>
						</div>
						<div class="panel-body">
							<div class="form-group">
								<label for="" class="control-label col-sm-3">Jumlah Cuti</label>
								<div class="col-sm-4">
									<input type="text" name="jml" class="form-control">
								</div>
							</div>										
						</div>
						<div class="panel-footer">
							<button type="submit" name="Update" class="btn btn-success">Update</button>
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