<?php
 	if ($query)
		{
		 print "
		 <script>
			alert('Proses Berhasil Dijalankan'); 
			window:location='../../menu.php?Toko=' ;
		</script>
		 ";
        }
  	else 	
		{
  		print "
		 <script>
			alert('Upzz,,, Terjadi masalah, silahkan ulangi kembali'); 
			window:location='../../menu.php?Toko=' ;
		</script>
		 ";
	  	}
?>