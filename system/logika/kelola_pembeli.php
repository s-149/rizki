<?php
 	if ($query)
		{
		 print "
		 <script>
			alert('Proses Berhasil Dijalankan'); 
			window:location='../../menu.php?paketbaru=pembeli&tampil_kelola_pembeli=' ;
		</script>
		 ";
        }
  	else 	
		{
  		print "
		 <script>
			alert('Upzz,,, Terjadi masalah, silahkan ulangi kembali'); 
			window:location='../../menu.php?paketbaru=pembeli&tampil_kelola_pembeli=' ;
		</script>
		 ";
	  	}
?>