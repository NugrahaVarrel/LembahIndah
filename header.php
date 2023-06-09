<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styleheader.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo">
                <img src="resource/icon-lembahindah.png" alt="Logo" />
            </div>
            <ul class="menu">
                <li class="nav-item"><a href="index.php">Home</a></li>
                <li class="nav-item">
                    <a href="#">Category</a>
                    <ul class="dropdown">
                        <li><a href="kategori.php?kategori=tenda">Tenda</a></li>
                        <li><a href="kategori.php?kategori=memasak">Memasak</a></li>
                        <li><a href="kategori.php?kategori=pencahayaan">Pencahayan</a></li>
                        <li><a href="kategori.php?kategori=makanan">Makanan</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#footer">Contact</a></li>
                <li class="nav-item"><a href="pesanan.php">Penyewaan</a></li>
            </ul>
            <div class="logout">
                <?php 
                if(isset($_SESSION['id'])){
                    echo '<span class="email">' . $_SESSION['email'] . '</span>';
                }
                ?>
                <a href="logout.php" class="buttonlogout button5">Logout</a>
            </div>

        </div>
    </nav>
</body>
</html>