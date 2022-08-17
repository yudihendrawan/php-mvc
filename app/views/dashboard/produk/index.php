
<div class="container mt-4">
    <div class="row">
      <div class="col-lg-12 mt-5">
        <?php Flasher::flash($data['halaman']); ?>
      </div>
    </div>

    <div class="row mb-3 mt-1">
      <div class="col-lg-12">
        <h3>Data Produk</h3>
      <button type="button" class="btn btn-primary tombolTambahData tambahProduk" data-bs-toggle="modal" data-bs-target="#formModal">
          Tambah Data Produk
        </button>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
          <table id="example" class="table table-striped" border="1" cellpadding="10" style="width:100%">
        <thead class="bg-warning">
            <tr>
                <th>Gambar Produk</th>
                <th>Nama Produk</th>
                <th>Harga Porduk</th>
                <th>Deskripsi</th>
                <th>Jumlah Produk</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($data['produk'] as $row): ?>
            <?php $angka = $row['harga_produk'];  
              $hasil_rupiah = "Rp " . number_format($angka,2,',','.');?>
            <tr>
                <td><img src="<?= BASEURL?>/img/produk/<?= $row['gambar_produk']; ?>" width="100px"></td>
                <td><?= $row['nama_produk']; ?></td>
                <td><?= $hasil_rupiah; ?></td>
                <td><?= $row['deskripsi']; ?></td>
                <td><?= $row['jumlah_produk']; ?></td>
                <td>
                <a href="<?= BASEURL ?>/produk/ubah/<?= $row['id_produk']?>" class="badge bg-success ubahProduk" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $row['id_produk']?>"><i class="fas fa-edit"></i> Edit</a>
                <a href="<?= BASEURL ?>/produk/hapus/<?= $row['id_produk']?>" onclick="return confirm('yakin?');" class="badge bg-danger" onclick="return confirm('yakin data dihapus?');"><i class="fas fa-trash"></i> Hapus</a>
                  </td>
            </tr>
            <?php endforeach ?>
            </tbody>
    </table>
        </div>
        <div class="col-lg-6">
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Produk</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>/produk/tambah" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_produk" id="id_produk">
          <input type="hidden" name="gambar_lama" value='no_image.jpg'>
          <div class="form-group">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" name="nama_produk" autocomplete="off" required>
          </div>
          
          <div class="form-group">
            <label for="harga_produk">Harga Produk</label>
            <div class="input-group">
              <span class="input-group-text">Rp.</span>
              <input type="text" class="form-control" id="harga_produk" name="harga_produk" autocomplete="off" aria-label="Amount">
            </div>
          </div>
          <div class="form-group">
            <label for="jumlah_produk">Jumlah Produk</label>
            <input type="number" class="form-control" id="jumlah_produk" name="jumlah_produk" autocomplete="off" required>
          </div>
          <div class="my-3">
            <label for="deskripsi">Deskripsi Produk</label>
            <textarea name="deskripsi" id="editor" cols="50" rows="50"></textarea>
          </div>
          
          <div class="form-group">
          <p class="info text-danger"></p>
            <label for="gambar_produk" class="form-label">Gambar produk</label>
          <img class="gproduk my-3" id="gambar_produk" src="<?= BASEURL?>/img/produk/<?= $row['gambar_produk']; ?>" width="80px" alt=""><br>
           <input class="form-control" type="file" id="gambar_produk" name="gambar_produk">
          </div>

      </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>




