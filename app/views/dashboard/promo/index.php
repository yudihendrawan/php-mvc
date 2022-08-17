
<div class="container mt-4">
    <div class="row">
      <div class="col-lg-12 mt-5">
        <?php Flasher::flash($data['halaman']); ?>
      </div>
    </div>

    <div class="row mb-3 mt-1">
      <div class="col-lg-12">
        <h3>Data Promo</h3>
      <button type="button" class="btn btn-primary tombolTambahData tambahPromo" data-bs-toggle="modal" data-bs-target="#formModal">
          Tambah Promo
        </button>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
          <table id="example" class="table table-striped" border="1" cellpadding="10" style="width:100%">
        <thead class="bg-warning">
            <tr>
                <th>Nama Promo</th>
                <th>Jumlah Potongan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($data['promo'] as $row): ?>
            <tr>
                <td><?= $row['nama_promo']; ?></td>
                <td><?= $row['jumlah_potongan']; ?>%</td>
                <td>
                <a href="<?= BASEURL ?>/promo/ubah/<?= $row['id_promo']?>" class="badge bg-success ubahPromo" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $row['id_promo']?>"><i class="fas fa-edit"></i> Edit</a>
                <a href="<?= BASEURL ?>/promo/hapus/<?= $row['id_promo']?>" onclick="return confirm('yakin?');" class="badge bg-danger" onclick="return confirm('yakin data dihapus?');"><i class="fas fa-trash"></i> Hapus</a>
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
        <form action="<?= BASEURL ?>/promo/tambah" method="post" >
          <input type="hidden" name="id_promo" id="id_promo">
          <div class="form-group">
            <label for="nama_promo">Nama Promo</label>
            <input type="text" class="form-control" id="nama_promo" name="nama_promo" autocomplete="off" required>
          </div>
          
          <div class="form-group">
            <label for="jumlah_potongan">Jumlah Potongan</label>
            <div class="input-group">
                 <input type="number" class="form-control" id="jumlah_potongan" name="jumlah_potongan" autocomplete="off" aria-label="Amount">
                 <span class="input-group-text">%</span>
            </div>
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




