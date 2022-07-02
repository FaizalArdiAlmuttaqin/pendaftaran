<?php
    session_start();
    include 'koneksi.php';

    if(isset($_POST['login'])){

        //pengecekan akun
        $cek = mysqli_query($conn, "SELECT * FROM tbl_admin 
            WHERE username = '".htmlspecialchars($_POST['user'])."' AND password ='".MD5(htmlspecialchars($_POST['pass']))."'");

        if(mysqli_num_rows($cek) > 0){
            $admin = mysqli_fetch_object($cek);

            $_SESSION['stat_login'] = true;
            $_SESSION['id'] = $admin->id_admin;
            $_SESSION['nama'] = $admin->nm_admin;
            echo '<script>window.location="beranda.php"</script>';
        }else{
            echo '<script>alert("Gagal, username atau password salah")</script>';
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
            <h1>PPDB Online</h1>
            <ul>
                <li><a href="index.php">Pendaftaran</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </header>

        <!-- bagian login utama-->
        <section class="login-utama">

            <div class="kotak-login">
                <h2>Login Admin</h2>

                <!-- bagian form login -->
                <form action="" method="post">
                    <div class="box">
                        <table>
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td>
                                    <input type="text" name="user" class="input-control">
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td>
                                    <input type="password" name="pass" class="input-control">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <input type="submit" name="login" value="LOGIN" class="btn-login">
                                </td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>

        </section>

    </body>
</html>