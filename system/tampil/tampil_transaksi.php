
       		<h3 class="title-1 m-b-25">** Tampil Semua Data  <?= $paketnavbar ?></h3>
			<div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                   <thead>
		   			<tr>
		   				<td>Gambar_Product</td>
						<?php
							for ($s=0; $s<$jfieldtransaksi; $s++) {
						?>
					
						<td>
							<?= $fieldtransaksi[$s] ?>
						</td>
						<?php } ?>
						
					</tr>
					</thead>
					<tbody>
					
					
		<?php
			$sql="select * from $tabeltransaksi[0] ";
 			$query=mysqli_query($koneksi,$sql);
			while($data=mysqli_fetch_array($query)) { 
		?>	
					<tr>
						<td><img src="paket/gambar/barang/<?= $data ['Gambar'] ?>"></td>
						<?php
							for ($s=0; $s<$jfieldtransaksi; $s++) {
						?>
					
						<td>
							<?= $data [$fieldtransaksi[$s]] ?>
						</td>
						<?php } ?>
						

					</tr>
		 		<?php } ?>
					</tbody>
		   		</table>
		   	</div>
<br />