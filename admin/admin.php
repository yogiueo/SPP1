<?php   
session_start();
if($_SESSION['level']!='admin'){
    echo"<script>
    alert('Maaf Anda Bukan Sesi Admin');
    window.location.assign('../index2.php');
    </script>";
}
if(empty ($_SESSION['id_petugas'])){
    echo"<script>
    alert('Maaf Anda Belum Login');
    window.location.assign('../index2.php');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Aplikasi Pembayaran SPP</title>
    <link href="../logo_smk_merdeka.jpg" rel="icon">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: white;">
    <div class="container mt-5">
        <h3 style="color: black;">Aplikasi Pembayaran SPP</h3>
        <div class="alert alert-danger">
            ANDA LOGIN SEBAGAI <B>ADMINISTATOR</B> Aplikasi Pembayaran SPP.     
        </div>
        <a href="admin.php" class="btn btn-secondary" >Administator</a>
        <a href="admin.php?url=spp" class="btn btn-secondary" >SPP</a>      
        <a href="admin.php?url=kelas" class="btn btn-secondary" >Kelas</a>      
        <a href="admin.php?url=siswa" class="btn btn-secondary" >Siswa</a>      
        <a href="admin.php?url=petugas" class="btn btn-secondary" >Petugas</a>      
        <a href="admin.php?url=pembayaran" class="btn btn-secondary" >Pembayaran</a>            
        <a href="admin.php?url=laporan" class="btn btn-secondary" >Laporan</a>      
        <a href="admin.php?url=logout" class="btn btn-danger" >Logout</a>
        <div class="card mt-2 alert alert-info">
            <div class="card-body" style="background-color: white;">
                <!-- ini isi web kita -->
                <?php 
                $file = @$_GET['url'];
                if(empty($file)){
                    echo"<h4>Hello Administator.</h4>";
                    echo"Aplikasi Pembayaran SPP digunakan untuk mempermudah dalam mencatat pembayaran siswa / siswi disekolah.";
                }else{
                    include $file.'.php';
                }
                ?>
            </div>
        </div>
    </div>
        <br>
    <h4 class="text-center "><b>SMK MERDEKA BANDUNG</b>  </h4>
                <br>
    
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>