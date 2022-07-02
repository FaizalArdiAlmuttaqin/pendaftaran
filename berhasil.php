<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PPDB Online</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    </head>
    <body>

        <!-- bagian formulir pendaftaran -->
        <section class="box-formulir">
            <h2>Pendaftaran berhasil </h2>
            
            <div class="box">
                <h4>ID Pendaftaran Anda Adalah <?php echo $_GET['id'] ?></h4>
                <h4>Harap Dicatat dan Diingat Baik Baik ID Pendaftaran Anda!!! </h4>
                <h4>Jika Terjadi Kesalahan Dalam Memasukkan Data Silahkan Hubungi Admin </h4>
                <a href="cetak-pendaftaran.php?id=<?php echo $_GET['id'] ?>" target="_blank" class="btn-cetak">Cetak Bukti Pendaftaran</a>
            </div>

        </section>

    </body>
</html>

