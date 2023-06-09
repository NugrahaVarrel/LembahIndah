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
    <title>Lembah Indah CampGround</title>
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
            <a href="#kategori" class="sewa">Sewa Sekarang</a>

        </main>
    </section>

    <div class="img">
        <section class="cat" id="kategori">
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
                        <span>Dimana Lokasi Lembah Indah Campground?</span>
                    </button>
                    <p>Lembah Indah Campground berada di Jalan Raya Trawas - Mojosari, Sukosari, Kec. Trawas, Kabupaten Mojokerto, Jawa Timur 66666.</p>
                </div>
                <div class="question">
                    <button>
                        <span>Apa Saja Tata Tertib yang Berlaku di Lembah Indah Campground?</span>
                    </button>
                    <p><b>Tata Tertib yang berlaku di Lembah Indah Campground yaitu, </b>pengunjung dilarang membawa minuman beralkohol dan obat-obatan terlarang, dilarang membuat kegaduhan, dilarang merusak tumbuhan yang ada di area perkemahan, wajib membuang sampah pada tempatnya.</p>
                </div>
                <div class="question">
                    <button>
                        <span>Harga Sewa Perlengkapan Camping untuk Berapa Lama?</span>
                    </button>
                    <p>Harga sewa peralatan camping yang tertera berlaku per-hari.</p>
                </div>
            </div>
            <br><br><br><br>
        </section>
        <a href="pesanan.php" class="keranjang-link">
             <img src="resource/keranjang.png" alt="Keranjang" class="keranjang-img">
        </a>
    </div>

<script src="script.js"></script>
<section id="footer"></section>
<?php include('footer.php');?>
</body>
</html>