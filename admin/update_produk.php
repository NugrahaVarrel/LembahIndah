<?php
    session_start();
    if(!isset($_SESSION["id"])){
        echo '<script>window.location="login.php"</script>';
    }

    include 'koneksi.php';
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id_produk'])) {
            $id_produk_upd = $_GET['id_produk'];
            $query = "SELECT * FROM produk WHERE id_produk = '$id_produk_upd'";
            $result = mysqli_query($koneksi,$query);
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_produk=$_POST['id_produk'];
    $kategori=$_POST['kategori'];
    $nama=$_POST['nama'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];
    $deskripsi1=$_POST['deskripsi1'];
    $deskripsi2=$_POST['deskripsi2'];
    $deskripsi3=$_POST['deskripsi3'];
    $deskripsi4=$_POST['deskripsi4'];
      $sql = "UPDATE produk SET kategori='$kategori', nama='$nama', harga='$harga', stok='$stok', deskripsi1='$deskripsi1' WHERE id_produk='$id_produk'";

      $result = mysqli_query($koneksi,$sql);
      if ($result) {
        $status = 'ok';
      }
      else{
        $status = 'err';
      }

      header('Location: data_produk.php?status='.$status);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleupdate_produk.css">
    <title>Document</title>
</head>
<body>
<?php include ('header_adm.php'); ?>
  <div class="main_wrapper">
    <div class="form_wrapper">
        <h1>Update Data Produk</h1>
        <form action="update_produk.php" method="post" enctype="multipart/form-data">
            <?php while($data = mysqli_fetch_array($result)): ?>
                <input type="hidden" value="<?php echo $data['id_produk']; ?>" name="id_produk"/>
                <p>Pilih Kategori Produk:</p>
                <select name="kategori" id="kategori" placeholder="Kategori Produk">
                    <option value="stroller">Stroller</option>
                    <option value="babybox">Baby Box</option>
                    <option value="babybathub">Baby Bathub</option>
                    <option value="toys">Toys</option>
                    <option value="carseat">Car Seat</option>
                    <option value="hipseat">Hip Seat</option>
                </select><br><br>
                <input type="text" name="nama" value="<?php echo $data['nama'];  ?>" placeholder="Masukkan Nama Produk"><br><br>
                <input type="number" name="harga" value="<?php echo $data['harga'];  ?>" placeholder="Harga"><br><br>
                <p>Foto Produk:</p><br>
                <img src="produk/<?php echo $data['foto']; ?>" style="width: 200px;" alt=""><br>
                <input type="number" name="stok" value="<?php echo $data['stok'];  ?>" placeholder="Stok"><br><br>
                <textarea name="deskripsi1" id="deskripsi1" placeholder="Deskripsi 1" value="<?php echo $data['deskripsi1'];  ?>" cols="30" rows="7"><?php echo htmlspecialchars($data['deskripsi1']); ?></textarea>
            <?php endwhile; ?><br>
            <input id="submit" type="submit" name="simpan" value="Simpan Produk"><br>
        </form>
    </div>
  </div>
</body>
</html>