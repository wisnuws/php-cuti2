<?php
	include("sess_check.php");
	
	// deskripsi halaman
	$pagedesc = "Buat Pengajuan";
	$menuparent = "buatcuti";
	include("layout_top.php");
	$now = date('Y-m-d');
	$npp = $sess_pegawaiid;
?>
<script type="text/javascript">
function valid()
{
	if(document.cuti.akhir.value < document.cuti.mulai.value){
		alert("Tanggal akhir harus lebih besar dari tanggal mulai cuti!");
		return false;
	}

	/*if(document.cuti.mulai.value < document.cuti.now.value){
		alert("Tanggal mulai cuti tidak valid!");
		return false;
	}*/
	
	return true;
}
</script>
<!-- top of file -->
		<!-- Page Content -->
		<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Pengajuan Cuti Diluar Tahunan</h1>
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->

				<div class="row">
					<div class="col-lg-12"><?php include("layout_alert.php"); ?></div>
				</div>
				
				<div class="row">
					<div class="col-lg-12">
						<form class="form-horizontal" name="cuti" action="cuti_insertnew.php" method="POST" enctype="multipart/form-data" onSubmit="return valid();">
							<div class="panel panel-default">
								<div class="panel-heading"><h3>Form Pengajuan Cuti Diluar Tahunan</h3></div>
								<div class="panel-body">
									<div class="form-group">
										<label class="control-label col-sm-3">Mulai Cuti</label>
										<div class="col-sm-4">
											<input type="date" name="mulai" class="form-control" required>
											<input type="hidden" name="now" class="form-control" value="<?php echo $now;?>" required>
											<input type="hidden" name="npp" class="form-control" value="<?php echo $npp;?>" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Akhir Cuti</label>
										<div class="col-sm-4">
											<input type="date" name="akhir" class="form-control" required>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-sm-3">Keterangan</label>
										<div class="col-sm-4">
											<textarea name="keterangan" class="form-control" placeholder="Keterangan" rows="3" required>Cuti Diluar Tahunan</textarea>
										</div>
									</div>
									<!-- <div class="form-group">
										<label class="control-label col-sm-3">Administrator</label>
										<div class="col-sm-4">
											<select name="leader" id="leader" class="form-control" required>
											<option value="" selected>======== Pilih Admin ========</option>
												<?php
													$mySql = "SELECT * FROM admin WHERE hak_akses='Admin' AND active='Aktif' ORDER BY nama_adm";
													$myQry = mysqli_query($conn, $mySql);
													$dataAdmin = $result['id_adm'];
													while ($adminData = mysqli_fetch_array($myQry)) {
														if ($adminData['npp']== $dataAdmin) {
														$cek = " selected";
														} else { $cek=""; }
														echo "<option value='$adminData[id_adm]' $cek>".$adminData[nama_adm]."</option>";
													}
												?>
											</select>
										</div>
									</div> -->
								</div>
								<div class="panel-footer">
									<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
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