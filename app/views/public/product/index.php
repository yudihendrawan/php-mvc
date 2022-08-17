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
        </div>
        </a>
      </div>
    </div>
    <?php endforeach ?>
  </div>