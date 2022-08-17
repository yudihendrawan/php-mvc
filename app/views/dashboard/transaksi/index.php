<div class="container mt-5  ">

    <div class="row mt-5">
      <div class="col-lg-12 mt-5">
        <?php Flasher::flash($data['halaman']); ?>
      </div>
    </div>
    <div class="row mb-3 mt-2">
      <div class="col-lg-12">
        <h3>Data Transaksi</h3>
        <button type="button" class="btn btn-primary tambahTransaksi" data-bs-toggle="modal" data-bs-target="#formModal">
          Tambah Data Transaksi
        </button>
      </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
          <table id="example" class="table table-striped" border="1" cellpadding="10" style="width:100%">
        <thead class="bg-warning">
            <tr>
                <th>Nomor Transaksi</th>
                <th>Nama Customer</th>
                <th>Nama Barang</th>
                <th>Jumlah Pesanan</th>
                <th>Tanggal Transaksi</th>
                <th>Nama Promo</th>
                <th>Potongan</th>
                <th>Total Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($data['penjualan'] as $row ):  ?>
          <?php $angka = $row['tot'];  
              $hasil_rupiah = "Rp " . number_format($angka,2,',','.');?>
            <tr>
                <td><?= $row["id_penjualan"] ?></td>
                <td><?= $row["nama_customer"] ?></td>
                <td><?= $row["nama_produk"] ?></td>
                <td><?= $row["jumlah_pesanan"] ?></td>
                <td><?= $row["tanggal_transaksi"] ?></td>
                <td><?= $row["nama_promo"] ?></td>
                <td><?= $row["jumlah_potongan"] ?>%</td>
                <td><?= $hasil_rupiah ?></td>
                <td>
                <a href="<?= BASEURL ?>/transaksi/hapus/<?= $row['id_penjualan']?>" class="badge bg-danger" onclick="return confirm('yakin data dihapus?');"><i class="fas fa-trash"></i> Hapus</a>
                  </td>
            </tr>
            <?php  endforeach ?>
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
        <h5 class="modal-title" id="formModalLabel">Tambah Data Transaksi</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>/transaksi/tambah" method="post">
          <input type="hidden" name="id_penjualan" id="id_penjualan">
           <div class="input-group mb-3">
               <select class="form-select" id="nama_customer" name="nama_customer">
                    <option selected>Nama Customer</option>
                    <?php foreach ( $data['customer'] as $row ): ?>
                         <option value="<?= $row['id_customer']?>"><?= $row['nama_customer']; ?></option>
                    <?php endforeach ?>
               </select>
          </div>
           <div class="input-group mb-3">
               <select class="form-select" id="nama_produk" name="nama_produk">
                    <option  selected>Nama Produk</option>
                    <?php foreach ( $data['produk'] as $row ): ?>
                         <option value="<?= $row['id_produk']?>"><?= $row['nama_produk']; ?></option>
                    <?php endforeach ?>
               </select>
          </div>
           <div class="input-group mb-3">
               <select class="form-select" id="nama_promo" name="nama_promo">
                    <option  selected>Promo</option>
                    <?php foreach ( $data['promo'] as $row ): ?>
                         <option value="<?= $row['id_promo']?>"><?= $row['nama_promo']; ?></option>
                    <?php endforeach ?>
               </select>
          </div>

          <div class="form-group">
            <label for="jumlah_pesanan">Jumlah Pesanan</label>
            <input type="number" class="form-control" id="jumlah_pesanan" name="jumlah_pesanan" autocomplete="off">
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


