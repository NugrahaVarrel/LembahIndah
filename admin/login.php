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
    <link rel="icon" href="resource/icon.png">
    <title>Document</title>
</head>
<body>
    <nav>
        <h1>ADMIN</h1>
    </nav>
    <div class="kotak">
        <div>
        <img src="resource/user.png" alt="orang" class="icon">
        <p style="color:white; text-align: center;">Login Into Your Account</p>
        </div>
        

        <form method="POST">
            <div class="col-lg-12 text-center">
                <input type="text" name="username" class="form_user" placeholder="Username">
            </div><br>
            <div class="col-lg-12 text-center">
                <input type="password" class="form_user" name="password" placeholder="Password" id="myPassword" required="required"><br/>
            </div><br>
            <div class="col-lg-12 text-center">
                <input type="submit" class="tombol_login" value="LOGIN" name="proseslog">
                <br><br/>
            </div>
        </form>
        <?php
        if (isset($_POST['proseslog'])) {
            $sql = mysqli_query($koneksi, "select * from admin where username = '$_POST[username]' and password = '$_POST[password]'");

            $cek = mysqli_num_rows($sql);
            if ($cek > 0) {
                $data = mysqli_fetch_assoc($sql);
                $_SESSION["username"] = $_POST['username'];
                $_SESSION["id"] = $data["id"];
                echo "<meta http-equiv=refresh content=0;URL='dashboard1.php'>";
            } else {
                echo "<p>Login Gagal!</p>";
                echo "<meta http-equiv=refresh content=2;URL='login.php'>";
            }
        }
        ?>
    </div>
</body>
</html>
