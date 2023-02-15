<!-- Sidebar ================================================== -->
	<div id="sidebar" class="span3">
	<div class="well well-small">
		
		
		<label>Item :</label>
		<ul id="sideManu" class="nav nav-tabs nav-stacked">
			<?php

				$sql="select * from databarang ";
 				$query=mysqli_query($koneksi,$sql);
				while($data=mysqli_fetch_array($query)) 
					{ 
				?>	
			<li class="subMenu open"><a> <?=$data['NamaBarang']?></a></li>
			<?php } ?>
		</ul>
		<br/>
		  
			<div class="thumbnail">
				<img src="themes/images/payment_methods.png" title="Bootshop Payment Methods" alt="Payments Methods">
				<div class="caption">
				  <h5>Jalur Pembayaran</h5>
				</div>
			  </div>
	</div>
	</div>
<!-- Sidebar end=============================================== -->