<?php 
  include ('koneksi.php'); 

  $status = '';
  $result = '';
  if ($_SERVER['REQUEST_METHOD'] === 'GET') {
      if (isset($_GET['id_produk'])) {
          $id_produk_upd = $_GET['id_produk'];
          $query = "DELETE FROM produk WHERE id_produk = '$id_produk_upd'"; 

          $result = mysqli_query($koneksi,$query);

          if ($result) {
            $status = 'ok';
          }
          else{
            $status = 'err';
          }
          if ($status=='ok') {
            header('location: data_produk.php');
          }
      }  
  }
?>