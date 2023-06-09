<?php
    session_start();
    if(!isset($_SESSION["id"])){
        echo '<script>window.location="login.php"</script>';
    }
    include('koneksi.php');
    $result = '';
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['kategori'])) {
            $kategori_brg = $_GET['kategori'];
            $query = "SELECT * FROM produk WHERE kategori = '$kategori_brg'";
            $result = mysqli_query($koneksi,$query);
        }
    }
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['kategori'], $_GET['umur'])) {
            $kategori_brg = $_GET['kategori'];
            $brg_umur = $_GET['umur'];
            $query = "SELECT * FROM produk WHERE kategori = '$kategori_brg' AND umur = '$brg_umur'";
            $result = mysqli_query($koneksi,$query);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resource/icon.png">
    <link rel="stylesheet" href="style/stylekategori.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php include('header.php');?>
        <div id="cdm" class="boxcdr">
            <section class="cdr">
                <img src="resource/icon_tenda.png" alt="" class="icon">
                <span class="kategori">Kategori Barang</span>
            </section>
        </div>
        <br>
        <?php while($data = mysqli_fetch_array($result)){
            ?>
            <div class="flexbox1">
                <div class="nama"><?php echo $data['nama']; ?></div>
                <img src="admin/produk/<?php echo $data['foto']; ?>">
                <br><br>
                <div class="lain3">
                    <?php echo $data['harga']; ?>/minggu
                </div>
                <br>
                <a href="<?php echo "detail_barang.php?id_produk=".$data['id_produk']; ?>"><button class="tbl-biru">Sewa</button></a>                 
            </div>
        <?php } ?>
    <br><br><br><br><br><br><br><br><br>
    </div>
    <a href="pesanan.php" class="keranjang-link">
        <img src="resource/keranjang.png" alt="Keranjang" class="keranjang-img">
    </a>
    
<section id="footer">
    <?php include('footer.php');?>
</section> 
</body>
</html>