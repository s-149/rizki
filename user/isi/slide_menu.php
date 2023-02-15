<div id="carouselBlk">
	<div id="myCarousel" class="carousel slide">
		<div class="carousel-inner">
		 <div class="item active">
		  <div class="container">
			<img style="width:100%" src="../paket/gambar/barang/1.jpeg" alt=""/>
			
		  </div>
		  </div>
		  	<?php

			$sql="select * from databarang where `Product`='unggulan' ";
 			$query=mysqli_query($koneksi,$sql);
			while($data=mysqli_fetch_array($query)) 
				{ 
			?>	
			<div class="item">
		  		<div class="container">
				<img style="width:100%" src="../paket/gambar/barang/<?=$data['Gambar']?>"/>			
				</div>
		 	 </div>
			<?php	} ?>
			
		  
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
	  </div> 
</div>