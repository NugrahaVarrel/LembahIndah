<?php
    session_start();
    if(!isset($_SESSION["id"])){
        echo '<script>window.location="login.php"</script>';
    }
    include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resource/icon.png">
    <link rel="stylesheet" href="style/styleindex.css">
    <title>Document</title>
</head>
<body>
    <?php 
        include ('header.php');
    ?>
    <section class="hero">
        <main class="content">
            <h1>Lembah <span>Indah</span></h1>
            <p class="desk">
             Rasakan pengalaman berkemah yang nyaman dengan fasilitas lengkap!
            </p>
            <a href="#" class="cta">Beli Sekarang</a>
        </main>
    </section>

    <div class="img">
    <section class="cat">
        <h1 style="padding-top: 100px; text-align: center; padding-bottom: 60px; color:">Kategori Barang</h1>
        <div class="kategori">
            <div class="gambar1">
                <a href="<?php echo "kategori.php?kategori=tenda" ?>">
                <img src="resource/icon_tenda.png" alt="" style="width: 190px;">
                <h2 style="padding-top: 20px;">Tenda</h2>
                </a>
            </div>
            <div class="gambar2">
                <a href="<?php echo "kategori.php?kategori=memasak" ?>">
                <img src="resource/icon_memasak.png" alt="" style="width: 190px;">
                <h2 style="padding-top: 20px;">Memasak</h2>
                </a>
            </div>
            <div class="gambar3">
                <a href="<?php echo "kategori.php?kategori=pencahayaan" ?>">
                <img src="resource/icon_pencahayaan.png" alt="" style="width: 190px;">
                <h2 style="padding-top: 20px;">Pencahayaan</h2>
                </a>
            </div>
            <div class="gambar4">
                <a href="<?php echo "kategori.php?kategori=makanan" ?>">
                <img src="resource/icon_makanan.png" alt="" style="width: 190px;">
                <h2 style="padding-top: 20px;">Makanan</h2>
                </a>
            </div>
        </div>
    </section>
    
    <section class="FAQ">
        <h1 class="title">Frequently Asked Question (FAQ)</h1>
        <div class="questions-container">
            <div class="question">
                <button>
                    <span>Apa itu Baby-Needs?</span>
                </button>
                <p>Baby-Needs merupakan website penyewaan barang bayi bagi ibu rumah tangga yang tidak ingin membeli barang kebutuhan bayi. Baby-Needs hadir karena kebutuhan bayi yang dipakai hanya tempo waktu tertentu saja, oleh karena itu daripada membeli barang kebutuhan bayi untuk waktu tertentu, mending sewa aja.</p>
            </div>
            <div class="question">
                <button>
                    <span>Apa syarat untuk menyewa Baby-Needs?</span>
                </button>
                <p>Syaratnya cukup mudah, yaitu hanya membutuhkan 1 KTP saja untuk dapat menyewa barang kebutuhan bayi di Baby-Needs.</p>
            </div>
            <div class="question">
                <button>
                    <span>Wilayah pengiriman mencakup daerah mana saja?</span>
                </button>
                <p>Untuk saat ini, Baby-Needs hanya dapat melayani di wilayah Surabaya dan Sidoarjo, untuk kedepannya Baby-Needs akan dapat beroperasi di seluruh wilayah Indonesia.</p>
            </div>
        </div>
        <br><br><br><br>
    </section>
    </div>

<script src="script.js"></script>
<section id="footer"></section>
<?php include('footer.php');?>
</body>
</html>