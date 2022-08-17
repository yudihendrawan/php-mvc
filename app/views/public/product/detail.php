<div class="container text-center mt-5 mb-5">
  <div class="row">
    <div class="col-4">
      <div class="card shadow" style="width: 18rem;">
      <img src="<?= BASEURL ?>/img/produk/<?= $data['produk']['gambar_produk']; ?>" class="card-img-top" alt="...">
      </div>
    </div>
    <div class="col-8">
      <div class="container  rounded-3 shadow-lg location">
          <p><?= $data['produk']['deskripsi']; ?></p>
      </div>
    </div>
  </div>
</div>