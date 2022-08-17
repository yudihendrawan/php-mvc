<div class="container mt-5  ">

    <div class="row mt-5">
      <div class="col-lg-12 mt-5">
        <?php Flasher::flash($data['halaman']); ?>
      </div>
    </div>
    <div class="row mb-3 mt-2">
      <div class="col-lg-12">
        <h3>Data Admin</h3>
        <button type="button" class="btn btn-primary tombolTambahData tambahDataAdmin" data-bs-toggle="modal" data-bs-target="#formModal">
          Tambah Data Admin
        </button>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
          <table id="example" class="table table-striped" border="1" cellpadding="10" style="width:100%">
        <thead class="bg-warning">
            <tr>
                <th>Nomor Karyawan</th>
                <th>Nama Admin</th>
                <th>Jadwal Shift</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach ($data['admin'] as $row): ?>
            <tr>
                <td><?= $row['np']; ?></td>
                <td><?= $row['nama_admin']; ?></td>
                <td><?= $row['shift_admin']; ?></td>
                <td>
                  <a href="<?= BASEURL ?>/admin/ubah/<?= $row['id_admin']?>" class="badge bg-success ubahAdmin" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $row['id_admin']?>"><i class="fas fa-edit"></i> Edit</a>
                  <a href="<?= BASEURL ?>/admin/hapus/<?= $row['id_admin']?>" onclick="return confirm('yakin?');" class="badge bg-danger" onclick="return confirm('yakin data dihapus?');"><i class="fas fa-trash"></i> Hapus</a>
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
        <form action="<?= BASEURL ?>/admin/tambah" method="post">
          <input type="hidden" name="id_admin" id="id_admin">
          <div class="form-group">
            <label for="np">Nomor Pegawai</label>
            <input type="number" class="form-control" id="np" name="np" autocomplete="off" required>
          </div>

          <div class="form-group">
            <label for="nama_admin">Nama Admin</label>
            <input type="text" class="form-control" id="nama_admin" name="nama_admin" autocomplete="off">
          </div>

          <div class="form-group">
            <label for="shift_admin">Shift</label>
            <select class="form-control" id="shift_admin" name="shift_admin">
              <option value="Pagi">Pagi</option>
              <option value="Siang">Siang</option>
              <option value="Malam">Malam</option>
            </select>
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


