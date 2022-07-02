<?php
    session_start();
    include 'koneksi.php';
    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin PPDB Online</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>

        <!-- header -->
        <header>
            <h1>Admin PPDB Online</h1>
            <ul>
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="data-peserta.php">Data Peserta</a></li>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
        </header>

        <!-- isi tengah -->
        <section class="content">
            <h2>Beranda</h2>
            <div class="box">
                <h3><?php echo $_SESSION['nama'] ?>, Selamat Datang di PPDB Online </h3>
            </div>
        </section>
    </body>
</html>

