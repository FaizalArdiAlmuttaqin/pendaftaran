<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cetak Daftar Peserta PPDB Online</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <script>
            window.print()
        </script>
    </head>
    <body>
        <h2>Laporan Daftar Calon Siswa</h2>
        <table class="table" border="1" >
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pendaftaran</th>
                            <th>Nama</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>Umur</th>
                            <th>NIK</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Nomor HP</th>
                            <th>Alamat</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Jarak Dari Rumah Ke Sekolah</th>
                            <th>Kebutuhan Khusus</th>
                            <th>Nama Bapak</th>
                            <th>Pekerjaan Bapak</th>
                            <th>Nama Ibu</th>
                            <th>Pekerjaan Ibu</th>
                            <th>Nomor HP Orang Tua</th>
                            <th>Alamat Orang Tua</th>
                            <th>Nama Wali</th>
                            <th>Pekerjaan wali</th>
                            <th>Nomor HP Wali</th>
                            <th>Alamat Wali</th>
                            <th></th>
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
                            <td><?php echo $row['tmp_lahir'],", ", $row['tgl_lahir']?></td>
                            <td><?php echo $row['umur']?> tahun</td>
                            <td><?php echo $row['nik']?></td>
                            <td><?php echo $row['j_kelamin']?></td>
                            <td><?php echo $row['agama']?></td>
                            <td><?php echo $row['nohp_peserta']?></td>
                            <td><?php echo $row['alamat_rumah']?></td>
                            <td><?php echo $row['rt']?></td>
                            <td><?php echo $row['rw']?></td>
                            <td><?php echo $row['jarak_kesekolah']?> meter</td>
                            <td><?php echo $row['keb_khusus']?></td>
                            <td><?php echo $row['nm_bapak']?></td>
                            <td><?php echo $row['pk_bapak']?></td>
                            <td><?php echo $row['nm_ibu']?></td>
                            <td><?php echo $row['pk_ibu']?></td>
                            <td><?php echo $row['nohp_ortu']?></td>
                            <td><?php echo $row['alamat_ortu']?></td>
                            <td><?php echo $row['nm_wali']?></td>
                            <td><?php echo $row['pk_wali']?></td>
                            <td><?php echo $row['nohp_wali']?></td>
                            <td><?php echo $row['alamat_wali']?></td>

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
    </body>
</html>