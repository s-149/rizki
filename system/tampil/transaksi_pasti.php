<form action="system/proses/proses_transaksi.php" method="post" enctype="multipart/form-data" >
       		<h3 class="title-1 m-b-25"> Transaksi Selesai</h3>
			<div class="table-responsive">
			<p>** Data Pembeli</p>
                <table class="table">
                   <thead>
		   			<tr>
						
						<?php
							for ($s=0; $s<$jfieldpembeli; $s++) {
						?>
					
						<td>
							<?= $fieldpembeli[$s] ?>
						</td> 
						<?php } ?>
						
					</tr>
				  </thead> 
					<tbody>
					
					
		<?php
			$sql="select * from $tabelpembeli[0] where `id`='$IdPembeli' ";
 			$query=mysqli_query($koneksi,$sql);
			
			while($data=mysqli_fetch_array($query)) { 
		?>	
					<tr>
					
					
						<?php
							for ($s=0; $s<$jfieldpembeli-1; $s++) {
						?>
					
						<td>
						<textarea name="Pembeli[]" class="form-control">
							<?= $data [$fieldpembeli[$s]] ?>
						</textarea>
						</td>
						<?php } ?>
						<td>
						<input type="text" hidden="true" name="IdPembeli" class="form-control" value="<?= $data ['id'] ?>"  />
						
						
							<?= $data ['Subtotal'] ?>
												
						</td>
					

					</tr>
		 		<?php } ?>
					</tbody>
		   		</table>
		   	</div>
<br />
			<div class="table-responsive table--no-card m-b-40">
			<p>** Pilih Barang</p>
                <table class="table table-borderless table-striped table-earning" >
                   <thead>
		   			<tr>
						<td colspan="2"><div align="center">No</div></td>
						<td><div align="center">Satuan</div></td>
						<td><div align="center">Nama Barang</div></td>
						<td><div align="center">Jumlah Beli</div></td>
						<td><div align="center">Harga Jual</div></td>
						<td><div align="center">Total Harga</div></td>
						
						<td><div align="center">Stok Awal</div></td>
						<td><div align="center">Stok Akhir</div></td>
					</tr>
					</thead>
					<tbody>
		<?php
		$no=1; 
		$Subtotal=0;
			for($n=0; $n<$input; $n++) { 
		?>	
					<tr>
					<td><div align="center"><?=  $no++ ?></div></td>
					<td>
					<input type="checkbox" checked="checked" name="IdBarang[]"  value="<?= $IdBarang[$n] ?>"  />	
					</td>
					<td>
					<?= $Satuan[$n] ?>
					<input type="text" hidden="true" name="Satuan[]"  value="<?= $Satuan[$n] ?>" />	
					</td>
					<td>
					<?= $NamaBarang[$n] ?>
					
					</td>
					<td>
					<?= $JumlahBeli[$n] ?>
					<input type="text" hidden="true" name="JumlahBeli[]"  value="<?= $JumlahBeli[$n] ?>"  /></td>
					<td>
					<?= buatRp($HargaJual[$n]) ?>
					
					</td>
					<td>
					<?= buatRp($JumlahBeli[$n]*$HargaJual[$n]) ?>
					<input type="text" hidden="true" name="Total[]"  value="<?= $JumlahBeli[$n]*$HargaJual[$n] ?>"  />
					</td>
					<td>
					<?= $Stok[$n] ?>
					
					</td>
					<td>
					<?= $Stok[$n]-$JumlahBeli[$n] ?>
					<input type="text" hidden="true"  name="Stok[]"  value="<?= $Stok[$n]-$JumlahBeli[$n] ?>" />	
						</td>
						
					<?php $Subtotal += $JumlahBeli[$n]*$HargaJual[$n]; ?>								
						<?php } ?>
						
					</tr>
		 		<tr>
				<td colspan="9">
				  <div align="center">
				    <label>Subtotal : </label><?= buatRp($Subtotal); ?>
					<input type="text" hidden="true"  name="Subtotal"  value="<?= $Subtotal ?>" />	
			      </div></td>
				</tr>
				<tr>
				<td colspan="9">
				  <div align="center">
				    <button type="submit" name="tambahtransaksi" class="form-control btn btn-primary"><marquee behavior="alternate">Kirim Sekarang</marquee></button>
			      </div></td>
				</tr>
					
					</tbody>
		   		</table>
		   	</div>
<br />
</form>
