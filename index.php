<!DOCTYPE html>
<?php include('include/config.php') ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Olioli</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
      <?php include('templates/header.php') ?>

      <a href="index.php?halaman=tambahProduk ">Tambah Produk</a>
      <a href="index.php?halaman=login">Login di Sini</a>
      <!-- KONTENNYA -->

      <?php
    if(isset($_GET['halaman'])){
      if($_GET['halaman']=='detailProduk')  {
        include 'templates/detailProduk.php';
      } elseif($_GET['halaman'] == 'tambahProduk'){
        include 'templates/tambahProduk.php';
      } elseif($_GET['halaman'] == 'hapusProduk'){
        include 'templates/hapusProduk.php'; 
      }
        elseif($_GET['halaman'] == 'updateProduk'){
        include 'templates/updateProduk.php';
      } 
        // elseif($_GET['halaman']=='login'){
        //   include 'templates/login.php';
        // }
    }
    else {
      include 'templates/product_page.php';
    }
      ?>
        <script src="" async defer></script>
    </body>
</html>