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
    <link rel="stylesheet" href="style/stylelogin.css">
    <link rel="icon" href="resource/icon-lembahindah.png">
    <title>Masuk | Lembah Indah</title>
</head>
<body>
    <nav>
        <h1>USER</h1>
    </nav>
    <div class="container">
        <div>
            <img src="admin/resource/user.png" alt="orang" class="icon">
            <p style="color:white; text-align: center;">Login Into Your Account</p>
        </div>
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
