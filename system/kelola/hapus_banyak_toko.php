			<div class="table-responsive ">
			<h3 class="title-1 m-b-25">** Hapus Lebih Banyak</h3>
                <table class="table ">
                   <thead>
		   			<tr>
						<td><div align="center">No</div></td>
						<td><div align="center">Pilih</div></td>
						<?php
							for ($s=0; $s<$jfieldtoko; $s++) {
						?>
					
						<td>
							<?= $fieldtoko[$s] ?>						</td>
						<?php } ?>
					</tr>
					</thead>
					<tbody>
					<form action="system/proses/proses_toko.php" method="post" enctype="multipart/form-data" >
		<?php
			$sql="select * from $tabeltoko[0] ";
 			$query=mysqli_query($koneksi,$sql);
			$no=1;
			while($data=mysqli_fetch_array($query)) { 
		?>	
					<tr>
					<td><div align="center"><?= $no++ ?></div></td>
					<td>
					<input type="checkbox" name="id[]" class="form-control" value="<?= $data ['id'] ?>" title="pilih data yg ingin dihapus" />					</td>
						<?php
							for ($s=0; $s<$jfieldtoko; $s++) {
						?>
					
						<td><?= $data [$fieldtoko[$s]] ?></td>
													
						<?php } ?>
					</tr>
		 		<?php } ?>
				<tr>
				<td colspan="<?=$jfieldtoko+1?>">
				  <div align="center">
				    <button type="submit" name="hapus" class="btn btn-danger">Hapus Sekarang</button>
			      </div></td>
				</tr>
					</form>
					</tbody>
		   		</table>
		   	</div>
<br />