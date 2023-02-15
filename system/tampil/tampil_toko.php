
       		<h3 class="title-1 m-b-25">** Data  <?= $paketnavbar ?></h3>
			<div class="table-responsive table--no-card m-b-40">
                <table class="table table-borderless table-striped table-earning">
                   <thead>
		   			<tr>
						<?php
							for ($s=0; $s<$jfieldtoko; $s++) {
						?>
					
						<td>
							<?= $fieldtoko[$s] ?>
						</td>
						<?php } ?>
						
					</tr>
					</thead>
					<tbody>
					
					
		<?php
			$sql="select * from $tabeltoko[0] ";
 			$query=mysqli_query($koneksi,$sql);
			while($data=mysqli_fetch_array($query)) { 
		?>	
					<tr>
						<?php
							for ($s=0; $s<$jfieldtoko; $s++) {
						?>
					
						<td>
							<?= $data [$fieldtoko[$s]] ?>
						</td>
						<?php } ?>
						

					</tr>
		 		<?php } ?>
					</tbody>
		   		</table>
		   	</div>
<br />