<?php
    include 'koneksi.php';
    session_start();
    error_reporting(0);

    if($_SESSION['stat_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

    $id                 =$_GET['id'];
    $nm_peserta         =$_POST['nm_peserta'];
    $tmp_lahir          =$_POST['tmp_lahir'];
    $tgl_lahir          =$_POST['tgl_lahir'];
    $umur               =$_POST['umur'];
    $nik                =$_POST['nik'];
    $j_kelamin          =$_POST['j_kelamin'];
    $agama              =$_POST['agama'];
    $nohp_peserta       =$_POST['nohp_peserta'];
    $alamat_rumah       =$_POST['alamat_rumah'];
    $rt                 =$_POST['rt'];
    $rw                 =$_POST['rw'];
    $jarak_kesekolah    =$_POST['jarak_kesekolah'];
    $keb_khusus         =$_POST['keb_khusus'];
    $nm_bapak           =$_POST['nm_bapak'];
    $pk_bapak           =$_POST['pk_bapak'];
    $nm_ibu             =$_POST['nm_ibu'];
    $pk_ibu             =$_POST['pk_ibu'];
    $nohp_ortu          =$_POST['nohp_ortu'];
    $alamat_ortu        =$_POST['alamat_ortu'];
    $nm_wali            =$_POST['nm_wali'];
    $pk_wali            =$_POST['pk_wali'];
    $nohp_wali          =$_POST['nohp_wali'];
    $alamat_wali        =$_POST['alamat_wali'];

    if(isset($_POST['submit'])){
        $update = mysqli_query($conn,"UPDATE tbl_pendaftaran SET nm_peserta='$nm_peserta', tmp_lahir ='$tmp_lahir',
            tgl_lahir ='$tgl_lahir', umur ='$umur', nik  ='$nik', j_kelamin  ='$j_kelamin', agama ='$agama',
            nohp_peserta ='$nohp_peserta', alamat_rumah ='$alamat_rumah', rt ='$rt ', rw ='$rw',
            jarak_kesekolah ='$jarak_kesekolah', keb_khusus ='$keb_khusus', nm_bapak ='$nm_bapak', 
            pk_bapak ='$pk_bapak', nm_ibu ='$nm_ibu', pk_ibu ='$pk_ibu', nohp_ortu ='$nohp_ortu',
            alamat_ortu ='$alamat_ortu', nm_wali ='$nm_wali', pk_wali ='$pk_wali', nohp_wali ='$nohp_wali',
            alamat_wali  ='$alamat_wali' WHERE id_pendaftaran='$id'");

        //tidakan jika update data berhasil (pindah halaman) atau gagal dilakukan (menampilkan error)
        if($update){
            echo '<script>window.location="data peserta.php"</script>';
        }else{
            echo 'data gagal ditambahkan'.mysqli_error($conn);
        }

    }
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

        <!-- header -->
        <header>
            <h1>Admin PPDB Online</h1>
            <ul>
                <li><a href="beranda.php">Beranda</a></li>
                <li><a href="data-peserta.php">Data Peserta</a></li>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
        </header>
        

        <!-- bagian formulir pendaftaran -->
        <section class="box-formulir">
            <h2>Formulir Pendaftaran Peserta Didik Baru </h2>

            <!-- form data diri calon siswa -->
            <h3>Data Diri Calon Siswa</h3>
            <form action="" method="post">
                
                <div class="box">
                    <table border="1" class="table-form">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nm_peserta"  class="input-control" required>
                                <!-- required membuat kolom jawaban tidak boleh kosong dan harus diisi agar bisa di submit -->
                            </td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="tmp_lahir" class="input-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>
                                <input type="date" name="tgl_lahir" class="input-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td>:</td>
                            <td>
                                <input type="number" name="umur" class="input-control" required>
                            </td>
                            <td>Tahun</td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nik" class="input-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td>
                                <input type="radio" name="j_kelamin" class="input-control" value="laki-laki" required>laki-laki &nbsp;&nbsp;&nbsp; 
                                <!--nbsp buat ngasih jarak-->
                                <input type="radio" name="j_kelamin" class="input-control" value="perempuan" required>perempuan
                            </td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td>
                                <select   class="input-control" name="agama" required>
                                    <option value="">--Pilih--</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Khonghucu">Khonghucu</option>
                            </td>
                        </tr>
                        <tr>
                            <td>Nomor HP Peserta</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nohp_peserta"  class="input-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat Rumah</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="alamat_rumah"  class="input-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>RT</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="rt"  class="input-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>RW</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="rw" class="input-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Jarak Dari Rumah Ke Sekolah</td>
                            <td>:</td>
                            <td>
                                <input type="number" name="jarak_kesekolah" class="input-control" required>
                            </td>
                            <td>Meter</td>
                        </tr>
                        <tr>
                            <td>Kebutuhan Khusus</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="keb_khusus" class="input-control" required>
                            </td>
                        </tr>
                    </table>

                </div>

                <!-- form data diri orang tua -->
                <h3>Data Diri Orang Tua</h3>       
                <div class="box">

                    <table border="1" class="table-form">
                        <tr>
                            <td>Nama Bapak</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nm_bapak" class="input-control" required>
                            </td>
                        </tr> 
                        <tr>
                            <td>Pekerjaan Bapak</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="pk_bapak" class="input-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nm_ibu" class="input-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Ibu</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="pk_ibu" class="input-control" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Nomor HP Orang Tua</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nohp_ortu" class="input-control" required>
                            </td>
                            <td>(Nomor HP yang aktif)</td>
                        </tr>
                        <tr>
                            <td>Alamat Orang Tua</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="alamat_ortu" class="input-control" required>
                            </td>
                        </tr>  
                    </table>

                </div>

                <!-- form data diri wali -->
                <h3>Data Diri Wali</h3>       
                <div class="box">

                    <table border="1" class="table-form">
                        <tr>
                            <td>Nama Wali</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nm_wali" class="input-control">
                            </td>
                        </tr> 
                        <tr>
                            <td>Pekerjaan Wali</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="pk_wali" class="input-control">
                            </td>
                        </tr>
                            <td>Nomor HP Wali</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="nohp_wali" class="input-control">
                            </td>
                            <td>(Nomor HP yang aktif)</td>
                        </tr>
                        <tr>
                            <td>Alamat Wali</td>
                            <td>:</td>
                            <td>
                                <input type="text" name="alamat_wali" class="input-control">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" class="btn-daftar" value="Simpan">
                            </td>
                            <td>
                                <input type="reset" name="hapus" class="btn-hapus" value="Hapus" /></p>
                            </td>
                        </tr>  
                    </table>

                </div>

            </form>

        </section>

    </body>
</html>

