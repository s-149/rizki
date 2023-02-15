<div class="span9">	
	<div class="well well-small">
		<h4>Product Tersedia </h4>
			  <ul class="thumbnails">
			  	<?php

				$sql="select * from databarang ";
 				$query=mysqli_query($koneksi,$sql);
				while($data=mysqli_fetch_array($query)) 
					{ 
				?>	
				<li class="span3">
				  <div class="thumbnail" style="background-image: src="../paket/gambar/barang/<?=$data['Gambar']?>"; ">
					<a  href="#"><img src="../paket/gambar/barang/<?=$data['Gambar']?>" alt=""/>
					<div class="caption">
					  <h5><?=$data['NamaBarang']?></h5>
					  <h4 style="text-align:center"><a class="btn btn-primary" href="#"><?=BuatRp($data['HargaJual'])?></a>
					  <form action="" method="get">
					  	<input type="hidden" name="id" value="<?=$data['id']?>">
					  	<button class="btn btn-primary" name="lihatbarang">Lihat</button>
					  </form>
					  </h4>
					</div>
				  </div>
				</li>
			<?php } ?>
				
			  </ul>	

	</div>
</div>
