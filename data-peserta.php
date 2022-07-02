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
            <h2>Data Peserta</h2>
            <div class="box">
                <a href="cetak-peserta.php" target="_blank" class="btn-cetak">Print</a>
                <table class="table" border="1" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pendaftaran</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Jenis Kelamin</th>
                            <th>Jarak Dari Rumah Ke Sekolah</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            $list_peserta = mysqli_query($conn, "SELECT * FROM tbl_pendaftaran");
                            while($row = mysqli_fetch_array($list_peserta)){

                            
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['id_pendaftaran']?></td>
                            <td><?php echo $row['nm_peserta']?></td>
                            <td><?php echo $row['umur']?> tahun</td>
                            <td><?php echo $row['j_kelamin']?></td>
                            <td><?php echo $row['jarak_kesekolah']?> meter</td>
                            <td>
                                <a href="detail-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>" >Detail</a> ||
                                <a href="edit.php?id=<?php echo $row['id_pendaftaran'] ?>">Edit</a> ||
                                <a href="hapus-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>" 
                                    onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </body>
</html>

