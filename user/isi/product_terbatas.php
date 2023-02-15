<div class="span9">		
	<?php

				$sql="select * from keranjang where `UserName`='$kode' and `Aksi`='user' ";
 				$query=mysqli_query($koneksi,$sql);
 				$Items=0;
 				$Total=0;
				while($data=mysqli_fetch_array($query)) 
					{ 
					$Items += $data['Jumlah'];	
					$Total += $data['Total'];
				?>	
				<?php } ?>
		<div class="well well-small">
			<a id="myCart" href="?id=1&lihatkeranjang="><img src="themes/images/ico-cart.png" alt="cart"><?= $Items ?> Items di keranjang  <span class="badge badge-warning pull-right"><?= BuatRp($Total) ?></span></a></div>

			<div class="well well-small">
			<h4>Product Terbatas </h4>
			<div class="row-fluid">
			<div id="featured" class="carousel slide">
			<div class="carousel-inner">
			  <div class="item active">
			  <ul class="thumbnails">
			  	<?php

				$sql="select * from databarang where `Stok`<10 ";
 				$query=mysqli_query($koneksi,$sql);
				while($data=mysqli_fetch_array($query)) 
					{ 
				?>	
				<li class="span3">
				  <div class="thumbnail">
				  
					<img src="../paket/gambar/barang/<?=$data['Gambar']?>" alt="">
					<h5><?=$data['NamaBarang']?></h5>
				  </div>
				</li>
			<?php } ?>
				
			  </ul>
			  </div>
			  </div>
			  <a class="left carousel-control" href="#featured" data-slide="prev">‹</a>
			  <a class="right carousel-control" href="#featured" data-slide="next">›</a>
			  </div>
			  </div>
		</div>
	</div>