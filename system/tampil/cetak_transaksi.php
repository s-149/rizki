		<div class="table-responsive table--no-card m-b-40">
			<table border="1" class="table table-borderless table-striped table-earning" >
                   
		   			<tr >
						<td ><div align="center">
							<span><h4>Toko <?= $NamaToko ?></h4></span><br>
							<span><h4>Alamat : <?= $AlamatToko ?> Telp.<?= $TelpToko ?></h4></span>
							</div>
						</td>
						
					</tr>
					
		   		</table>
		   	</div>
		<div class="table-responsive table--no-card m-b-40">
			<p>** Data Pelanggan.</p>
                <table class="table table-borderless table-striped table-earning" >
                   <thead>
		   			<tr>
						<td>Nama</td>
						<td>Alamat</td>
						<td>No.Telephone</td>
												
					</tr>
					</thead>
					<tbody>
		<?php
            $sql="select * from `datapembeli` where `UserName`='$user' and `Aksi`!='Diterima' ";
            $query=mysqli_query($koneksi,$sql);
            $idpembeli=0;
            while($data=mysqli_fetch_array($query)) { 
            	$idpembeli=$data['id'];
        ?>  
					<tr>
					<td><?= $data['Nama'] ?></td>
					<td><?= $data['Alamat'] ?></td>
					<td><?= $data['Telephone'] ?></td>
					
					</tr>
		<?php } ?>

					</tbody>
		   		</table>
		   	</div>

		   	<div class="table-responsive table--no-card m-b-40">
			<p>** Rincian Pesanan.</p>
                <table border="1" class="table table-borderless table-striped table-earning" >
                   <thead>
		   			<tr bgcolor="silver">
						<td>No</td>
						<td>Gambar_Product</td>
						<td>Nama Barang</td>
						<td>Jumlah</td>
						<td>Harga Satuan</td>
						<td>Total</td>
						
						
					</tr>
					</thead>
					<tbody>
		<?php
            $sql="select * from `transaksi` where `UserName`='$user' and `Aksi2`='0' ";
            $query=mysqli_query($koneksi,$sql);
            $no=1;
            $Jumlah=0;
            $Subtotal=0;
            while($data=mysqli_fetch_array($query)) { 
            	$Jumlah+=$data['JumlahBeli'];
            	$Subtotal+=$data['Total'];
        ?>  
					<tr >
					<td ><?=$no++ ?></td>
					<td><img height="60px" width="60px" src="paket/gambar/barang/<?= $data['Gambar'] ?>"></td>
					<td><?= $data['NamaBarang'] ?></td>
					<td><?= $data['JumlahBeli'] ?></td>
					<td><?= BuatRp($data['Total']/$data['JumlahBeli']) ?></td>
					<td><?= BuatRp($data['Total']) ?></td>
					
					</tr>
		<?php } ?>

					<tr bgcolor="silver">
						<td colspan="3">Subtotal :</td>
						<td><?=$Jumlah?></td>
						<td colspan="2"><div align="center"><b><u><?=BuatRp($Subtotal)?></u></b></div></td>
					</tr>
				
					</tbody>
		   		</table>
		   	</div>
