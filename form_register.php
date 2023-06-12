<?php 
    include 'register.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resource/icon-lembahindah.png">
    <link rel="stylesheet" href="style/styleformregister.css">
    <title>Daftar | Lembah Indah</title>
</head>
<body onload=display_ct();>
    <div class="nav">
        <ul>
            <li><a href="login.php">Kembali ke Login</a></li>
        </ul>
    </div>
    <h1 style="text-align: center;">Daftar Akun Lembah Indah</h1><br>
    <div class="formUpdate">
        <h1 style='text-align: center;'>Masukkan Data Anda</h1>
        <form action="register.php" method="POST">
            <h2>Nama</h2>
            <input type="text" class="form-control" placeholder="Nama" name="nama"  required="required" ><br><br>
            <h2>Alamat</h2>
            <input type="text" class="form-control" placeholder="Alamat" name="alamat"  required="required"><br><br>
            <h2>Nomor Handphone</h2>
            <input type="text" class="form-control" placeholder="No Handphone" name="nohp"  required="required"><br><br>
            <h2>E-Mail</h2>
            <input type="text" class="form-control" placeholder="E-Mail" name="email"  required="required"><br><br>
            <h2>Password</h2>
            <input type="password" class="form-control" placeholder="Password" name="password"  required="required"><br><br>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>