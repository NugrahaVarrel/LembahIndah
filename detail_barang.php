<?php
    session_start();
    if(!isset($_SESSION["id"])){
        echo '<script>window.location="login.php"</script>';
    }
    include ('koneksi.php');

    $result = '';
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['id_produk'])) {
            $id_produk_brg = $_GET['id_produk'];
            $query = "SELECT * FROM produk WHERE id_produk = '$id_produk_brg'";
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
    <link rel="stylesheet" href="style/styledetail.css">
    <link rel="icon" href="resource/icon-lembahindah.png">
    <title>Document</title>
</head>
<body>
    <?php 
        include ('header.php');
    ?>

    <div class="main">
        <?php while($data = mysqli_fetch_array($result)): ?>
        
        <div class="upper_wrapper">
            <div class="left_wrapper">
            <h1 id="product_name"><?php echo $data['nama']."<br>"; ?></h1>
                <img src="admin/produk/<?php echo $data['foto']; ?>" alt="Photo" id="product_photo">
            </div>
            <div class="right_wrapper">
                <div class="choice_wrapper">
                    <p id="text">Nikmati kenyamanan produk ini dengan harga sewa:</p>
                    <table class="price_list">
                        <thead>
                            <th>Lama Sewa</th>
                            <th>Harga Sewa</th>
                        </thead>
                        <?php 
                            $duaminggu = 1.5; 
                            $tigaminggu = 2;
                            $empatminggu = 2.5;
                        ?>
                        <tbody>
                            <tr>
                                <td>1 Minggu</td>
                                <td>Rp. <?php echo $data['harga']; ?>,-</td>
                            </tr>
                            <tr>
                                <td>2 Minggu</td>
                                <td>Rp. <?php echo $data['harga'] * $duaminggu; ?>,-</td>
                            </tr>
                            <tr>
                                <td>3 Minggu</td>
                                <td>Rp. <?php echo $data['harga'] * $tigaminggu; ?>,-</td>
                            </tr>
                            <tr>
                                <td>4 Minggu</td>
                                <td>Rp. <?php echo $data['harga'] * $empatminggu; ?>,-</td>
                            </tr>
                        </tbody>
                    </table>
                    <p style="margin-top:10px;">Tersedia: <?php echo $data['stok']; ?> Unit</p>
                    <p id="text">Pilih Durasi Sewa:</p>
                    <div class="dropdown_choice">
                        <form action="form_penyewaan.php" method="post">
                        <select id="durasi" name="tipe">
                            <option value = "1 Minggu <?php echo $data['harga']; ?>">1 Minggu</option>
                            <option value = "2 Minggu <?php echo $data['harga'] * $duaminggu; ?>">2 Minggu</option>
                            <option value = "3 Minggu <?php echo $data['harga'] * $tigaminggu; ?>">3 Minggu</option>
                            <option value = "4 Minggu <?php echo $data['harga'] * $empatminggu; ?>">1 Bulan</option>
                        </select>
                    </div>
                            <input type="hidden" value="<?php echo $data['id_produk']; ?>" name="id_produk"/>
                            <input id="rent_button" type="submit" name="sewa" value="Sewa Sekarang" class="sewa">
                        </form>
                </div>
            </div>
        </div>
    </div>
    <?php endwhile; ?>
    <section id="footer">
        <?php include('footer.php');?>
    </section>
</body>
</html>