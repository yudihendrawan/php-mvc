<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="<?= BASEURL ?>/datatables.min.css" />
  <link rel="shortcut icon" href="<?= BASEURL ?>/img/logosari.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <script src="https://kit.fontawesome.com/9068109a15.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?= BASEURL ?>/datatables.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <link href="<?= BASEURL ?>/css/style-public.css" rel="stylesheet">
  <link href="<?= BASEURL ?>/css/bootstrap.min.css" rel="stylesheet">
  <title>Halaman <?= $data['judul'] ?></title>
</head>
<body class="body">
<nav class="navbar navbar-expand-lg bg-light rounded shadow mt-2 mb-4 mx-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="<?= BASEURL ?>/img/logo.png" alt="Logo Sari Pasundan" width="40px">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link <?= ($data['judul'] === "Home") ? "active" : ''?>" aria-current="page" href="<?= BASEURL; ?>/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= ($data['judul'] === "Product") ? "active" : ''?>" aria-current="page" href="<?= BASEURL; ?>/product">Product</a>
        </li>
      </ul>
      <ul class="navbar-nav d-flex">
            <li class="nav-item me-2">
              <a href="<?= BASEURL ?>/dashboard"" class="nav-link">Login</a>
            </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">