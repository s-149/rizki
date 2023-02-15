
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Informasi Akademik">
    <meta name="author" content="mr 149" >
    <meta name="keyword" content="siakad mts an-najwa babakan">
    <title>login sistem</title>   
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<style>
		body {
			background-color:#eee;
			
		}
		.row {
			margin:100px auto;
			width:300px;
			text-align:center;
		}
		.login {
			background-color:#fff;
			padding:20px;
			margin-top:20px;
		}
	</style>
	
	<!-- favicons -->
    <link rel="shortcut icon" href="paket/gambar/background/favicon.ico" type="image/x-icon">
    <link rel="icon" href="paket/gambar/background/favicon.ico" type="image/x-icon">
</head>
<body>
	<section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="gambar/background/bg2.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=top>
	<div class="container">
		<div class="row">
			<div class="login">
				
				<?php
				if(isset($_POST['login'])){
					include("system/koneksi/koneksi.php");
					
					$username	= $_POST['username'];
					$password	= $_POST['password'];
					
						
					$query = mysqli_query($koneksi, "SELECT * FROM user WHERE UserName='$username' AND Password='$password'");
					if(mysqli_num_rows($query) == 0){
						echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
						
					}else{
					
					$row = mysqli_fetch_assoc($query);
						session_start();
						if($row['Level'] == user ){
							$_SESSION['user']=$username;
							$_SESSION['level'] = user ;
							header("Location: user/?id=1&menu=");
							
						}
						else if($row['Level'] == 'admin' ){
							$_SESSION['user']=$username;
							$_SESSION['level'] = 'admin' ;
							header("Location: menu.php?Rumah=");
							
						}
						
						else{
							echo '<div class="alert alert-danger">Upss...!!! Login gagal.</div>';
						}
						}
					
				}
				?>
				
				<form role="form" action="" method="post">
				<h4>Selamat Datang</h4>
				<h3><b>Silahkan Login</b></h3>
					<div class="form-group">
						 <input type="text" name="username" class="form-control" placeholder="User Name :" required autofocus />
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
						
					</div>
					
										<div class="form-group">
						<button name="login" class="btn btn-primary" >Log'in</button> Atau
						<a href="register.php" class="btn btn-primary" >Mendaftrar</a>
					</div>
				</form>
			</div>
			
		</div>
	</div>
	</section>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>