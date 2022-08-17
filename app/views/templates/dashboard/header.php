<?php 

        if (!isset($_SESSION['login'])){
          session_start();
        header('Location: ' . BASEURL . '/login');
        exit;
      }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Halaman <?= $data['judul']; ?></title>
  <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/datatables.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <script src="https://kit.fontawesome.com/9068109a15.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?= BASEURL ?>/datatables.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link rel="stylesheet" href='<?= BASEURL ?>/css/style.css'>
  <link href="<?= BASEURL ?>/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?= BASEURL ?>/img/logosari.jpg">
  <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css" />
</head>
  <body id="body-pd">
    <header class="header position-fixed" id="header">
      <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
      <div><p>Hallo, <?= $data['nama']['username']?></p> </div>
    </header>
    <div class="l-navbar" id="nav-bar" >
      <nav class="nav">
        <div> 
          <a href="<?= BASEURL ?>/dashboard" class="nav_logo"> <img src="<?= BASEURL ?>/img/logo-saripasundan.png" width="30px" alt="Logo Sari Pasundan"> <span class="nav_logo-name">Sari Pasundan</span> </a>
          <div class="nav_list"> 
          <a href="<?= BASEURL ?>/dashboard" class="nav_link <?= ($data['judul'] === "Home") ? "active" : ''?>"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Home</span> </a> 
          <a href="<?= BASEURL ?>/admin" class="nav_link <?= ($data['judul'] === "Daftar Admin") ? "active" : ''?>"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Admin</span> </a> 
            <a class="nav_link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"   onclick="changeIcon(folder);"  ><i class="fas fa-folder" style="width: 0px;" id="folder"></i> <span class="nav_name">Data Master</span> </a>
            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
              <li><a class="dropdown-item <?= ($data['judul'] === "Data Produk") ? "active" : ''?>" href="<?= BASEURL; ?>/produk"><i class="fas fa-shopping-bag" style="width: 20px;"></i> <span class="nav_name" >Data Produk</span></a></li>
              <li><a class="dropdown-item <?= ($data['judul'] === "Data Member") ? "active" : ''?>"" href="<?= BASEURL; ?>/customer"><i class="fas fa-address-card" style="width: 20px;"></i> Data Customer</a></li>
              <li><a class="dropdown-item <?= ($data['judul'] === "Data Promo") ? "active" : ''?>"" href="<?= BASEURL; ?>/promo"><i class="fas fa-tags"  style="width: 20px;"></i> Promo</a></li>
            </ul>
          <a class="nav_link <?= ($data['judul'] === "Data Transaksi") ? "active" : ''?>" href="<?= BASEURL ?>/transaksi" class="nav_link"> <i class="fas fa-cash-register"></i> <span class="nav_name">Transaksi</span> </a> 
          <a href="<?= BASEURL ?>/laporan" class="nav_link <?= ($data['judul'] === "Data Laporan") ? "active" : ''?>""><i class="fas fa-chart-line"></i><span class="nav_name">Laporan</span> </a> 
         </div>
        </div> <a href="<?= BASEURL ?>/login/logout" onclick="return confirm('yakin ingin logout?');" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
      </nav>
    </div>
    