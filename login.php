<?php 
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resource/icon.png">
    <title>Masuk | Lembah Indah </title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .container {
            max-width: 400px;
            text-align: center;
        }
        .logo {
            width: 250px;
        }
        .form-user {
            width: 100%;
            margin-bottom: 10px;
        }
        .tombol-login {
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body style="width: 100%">
    <div class="container-fluid py-1" style="background-color: #000000;">
        <div class="container">
            <div class="row">
                <div class="col-xs-11 text-center">
                    <img src="resource/logo.png" alt="" style="width: 250px">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- <img src="resource/logo.png" alt="Logo" class="logo"> -->
        <h2>Masuk</h2>
        <form method="post">
            <input type="text" name="email" class="form-user" placeholder="E-mail">
            <br>
            <input type="password" name="password" class="form-user" placeholder="Password" id="myPassword" required="required">
            <br>
            <input type="submit" name="proseslog" class="tombol-login" value="LOGIN">
        </form>
        <p>Belum Punya Akun? <a href="form_register.php">DAFTAR</a></p>
        <?php
            if(isset($_POST['proseslog'])){
                $sql = mysqli_query($koneksi, "select * from user where email = '$_POST[email]' and password = '$_POST[password]'");

                $cek = mysqli_num_rows($sql);
                if ($cek > 0) {
                    $data = mysqli_fetch_assoc($sql);
                    $_SESSION["email"] = $_POST['email'];
                    $_SESSION["id"] = $data["id"];
                    $_SESSION["nama"] = $data["nama"];
                    echo "<meta http-equiv=refresh content=0;URL='index.php'>";
                }else{
                    echo "<p>Login Gagal!</p>";
                    echo "<meta http-equiv=refresh content=2;URL='login.php'>";
                }
            }
        ?>
    </div>
</body>
</html>
