<div class=" mb-4 mt-4">
  <div class="container-fluid py-5 text-center" style=" background-image: url('<?= BASEURL ?>/img/banner-web.jpg');">
    <h1 class="display-5 fw-bold text-light ">Sari Pasundan</h1>
    <p class=" fs-4 text-light text-center">Kue Balok Cokelat No. 1 dan Terbesar di Indonesia</p>
    <a href="<?= BASEURL; ?>/product"><button class="btn btn-primary btn-lg" type="button">Our Produk</button></a>
  </div>
</div>

<div class="container text-center mt-5 mb-5">
  <div class="row">
    <div class="col-4">
      <div class="card shadow" style="width: 18rem;">
        <img src="<?= BASEURL ?>/img/menu-utama.jfif" alt="...">
      </div>
    </div>
    <div class="col-8">
      <div class="container  rounded-3 shadow-lg location">
        <h2 class="text-center">Sari Pasundan</h2>
        <p>Kue Balok Coklat No. 1 dan Terbesar di Indonesia. Memiliki Outlet yang Tersebar di Beberapa Daerah di Indonesia</p>
        <div class="row">
          <div class="col"><i class="fas fa-map-marker-alt fa-6x"></i>
            <h3 class="mt-2">Palembang</h3>
          </div>
          <div class="col"><i class="fas fa-map-marker-alt fa-6x"></i>
            <h3 class="mt-2">Payakumbuh</h3>
          </div>
          <div class="col"><i class="fas fa-map-marker-alt fa-6x"></i>
            <h3 class="mt-2">Pekanbaru</h3>
          </div>
          <div class="col"><i class="fas fa-map-marker-alt fa-6x"></i>
            <h3 class="mt-2">Samarinda</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <?php foreach ($data['produk'] as $row) : ?>
    <?php $angka = $row['harga_produk'];  
  $hasil_rupiah = "Rp " . number_format($angka,2,',','.');?>
  <div class="col-md-3 mb-4">
      <div class="card" style="width: 18rem;"><a href="<?= BASEURL; ?>/home/detail/<?= $row['id_produk']; ?>" class="text-decoration-none">
        <img src="<?= BASEURL ?>/img/produk/<?= $row['gambar_produk']; ?>" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h4 class="card-text fw-bold text-decoration-line-none text-black"><?= $row['nama_produk']; ?></h4>
          <p class="card-text text-black text-decoration-none"><?= $hasil_rupiah;?></p>
          <p class="card-text text-black text-decoration-line-none">Stok: <?= $row['jumlah_produk']; ?></p>
        </div>
        </a>
      </div>
    </div>
    <?php endforeach ?>
  </div>