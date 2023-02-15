
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Sistem Informasi Akademik">
    <meta name="author" content="mr 149" >
    <meta name="keyword" content="siakad mts an-najwa babakan">
    <title>mendaftar sistem</title>   
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
                if(isset($_POST['register'])){
                    include("system/koneksi/koneksi.php");
                    
                    $username   = $_POST['username'];
                    $password   = $_POST['password'];

                    $query = mysqli_query($koneksi, "SELECT * FROM login WHERE UserName='$username' ");
                        if(mysqli_num_rows($query) == 1)
                            {
                                echo '<div class="alert alert-danger">Upss...!!! User Name Tersebut Telah Digunakan, Silahkan Gunakan User Name yang lain.</div>';
                        
                            }
                        else
                            {
                                $sql = "INSERT INTO `login`(`UserName`, `Password`, `Level`) VALUES('$username','$password','user')";    
                                $query = mysqli_query($koneksi, $sql);
                                if($query)
                                    {
                                         print "
                                                <script>
                                                    alert('Proses Berhasil Dijalankan'); 
                                                    window:location='login.php' ;
                                                </script>
                                                ";
                        
                                    }
                                else
                                    {
                                        print "
                                                <script>
                                                alert('Proses Gagal Dijalankan, Silahkan Ulangi Kembali'); 
                                                window:location='register.php' ;
                                                </script>
                                                ";
                                    }
                    
                    
                            }
                    
                }
                ?>
                
                <form role="form" action="" method="post">
                <h4>Selamat Datang</h4>
                <h3><b>Silahkan Mendaftar</b></h3>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="User Name :" required autofocus />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
                        
                    </div>
                    
                                        <div class="form-group">
                        <button name="register" class="btn btn-primary" >Mendaftrar</button> Atau
                        <a href="login.php" class="btn btn-primary" >Log'in</a>
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