<?php
    include 'koneksi.php';

    //memanggil data calon siswa dari database db_pendaftaran sesuai dengan id
    $data_peserta = mysqli_query($conn, "SELECT * FROM tbl_pendaftaran
        WHERE id_pendaftaran = '".$_GET['id']."'");
    $simpan_peserta = mysqli_fetch_object($data_peserta);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PPDB Online</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
        <script>
            window.print()
        </script>
    </head>
    <body>
        <h2>Bukti Pendaftaran</h2>

        <!-- menampilkan data diri dari calon siswa baru -->
        <h3>Data Diri Calon Siswa</h3>
        <table class="table-data" border="0">
            <tr>
                <td>Kode Pendaftaran</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->id_pendaftaran ?></td>
            </tr>
            <tr>
                <td>Tanggal Pendaftaran</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->tgl_pendaftaran ?></td>
            </tr>
            <tr>
                <td>Nama Calon Siswa Baru</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->nm_peserta ?></td>
            </tr>
            <tr>
                <td>Tempat, Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->tmp_lahir .', '.$simpan_peserta->tgl_lahir ?></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->umur .' Tahun'?></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->nik ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->j_kelamin ?></td>
            </tr>
                <td>Agama</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->agama ?></td>
            </tr>
            <tr>
                <td>Nomor HP Peserta</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->nohp_peserta ?></td>
            </tr>
            <tr>
                <td>Alamat Rumah Peserta</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->alamat_rumah ?></td>
            </tr>
            <tr>
                <td>RT</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->rt ?></td>
            </tr>
            <tr>
                <td>RW</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->rw ?></td>
            </tr>
            <tr>
                <td>Jarak Dari Rumah Ke Sekolah</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->jarak_kesekolah .' Meter' ?></td>
            </tr>
            <tr>
                <td>Kebutuhan Khusus</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->keb_khusus ?></td>
            </tr>
        </table>

        <!-- menampilkan data diri dari orang tua calon siswa baru -->
        <h3>Data Diri Orang Tua</h3>
        <table class="table-data" border="0">
            <tr>
                <td>Nama Bapak</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->nm_bapak ?></td>
            </tr>
            <tr>
                <td>Pekerjaan Bapak</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->pk_bapak ?></td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->nm_ibu ?></td>
            </tr>
            <tr>
                <td>Pekerjaan Ibu</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->pk_ibu ?></td>
            </tr>
            <tr>
                <td>Nomor HP Orang Tua</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->nohp_ortu ?></td>
            </tr>
            <tr>
                <td>Alamat Rumah Orang Tua</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->alamat_ortu ?></td>
            </tr>
        </table>

        <!-- menampilkan data diri dari wali calon siswa baru -->
        <h3>Data Diri Wali</h3>
        <table class="table-data" border="0">
            <tr>
                <td>Nama Wali</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->nm_wali ?></td>
            </tr>
            <tr>
                <td>Pekerjaan Wali</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->pk_wali ?></td>
            </tr>
            <tr>
                <td>Nomor HP Wali</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->nohp_wali ?></td>
            </tr>
            <tr>
                <td>Alamat Rumah Wali</td>
                <td>:</td>
                <td><?php echo $simpan_peserta->alamat_wali ?></td>
            </tr>
        </table>

    </body>
</html>