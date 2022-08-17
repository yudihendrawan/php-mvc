<div class="container mt-5  ">

    <div class="row mt-5">
      <div class="col-lg-12 mt-5">
        <?php Flasher::flash($data['halaman']); ?>
      </div>
    </div>
    <div class="row mb-3 mt-2">
      <div class="col-lg-12">
        <h3>Data Member</h3>
        <button type="button" class="btn btn-primary tombolTambahData tambahDataCustomer" data-bs-toggle="modal" data-bs-target="#formModal">
          Tambah Member
        </button>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
          <table id="example" class="table table-striped" border="1" cellpadding="10" style="width:100%">
        <thead class="bg-warning">
            <tr>
                <th>Id Member</th>
                <th>Nama Member</th>
                <th>Nomor Telpon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($data['customer'] as $row): ?>
            <tr>
                <td><?= $row['id_customer']; ?></td>
                <td><?= $row['nama_customer']; ?></td>
                <td><?= $row['tlp_customer']; ?></td>
                <td>
                  <a href="<?= BASEURL ?>/customer/ubah/<?= $row['id_customer']?>" class="badge bg-success ubahCustomer" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $row['id_customer']?>"><i class="fas fa-edit"></i> Edit</a>
                  <a href="<?= BASEURL ?>/customer/hapus/<?= $row['id_customer']?>" onclick="return confirm('yakin?');" class="badge bg-danger" onclick="return confirm('yakin data dihapus?');"><i class="fas fa-trash"></i> Hapus</a>
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


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Admin</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>/customer/tambah" method="post">
          <input type="hidden" name="id_customer" id="id_customer">
          <div class="form-group">
            <label for="nama_customer">Nama customer</label>
            <input type="text" class="form-control" id="nama_customer" name="nama_customer" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="tlp_customer">Nomor Telpon</label>
            <input type="number" class="form-control" id="tlp_customer" name="tlp_customer" autocomplete="off">
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


