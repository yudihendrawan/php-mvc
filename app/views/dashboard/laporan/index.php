<?php
// if (isset )
?>

<div class="container mt-5  ">

     <div class="row mt-5">
          <div class="col-lg-12 mt-5">
               <?php Flasher::flash($data['halaman']); ?>
          </div>
     </div>
     <div class="container">

     </div>
     <div class="row mb-3 mt-2">
          <div class="col-lg-12">
               <h3>Data Laporan</h3>
               <a href="<?= BASEURL ?>/laporan/print_laporan/" target="_blank"><button type="button" class="btn btn-primary tambahTransaksi" data-bs-toggle="modal" data-bs-target="#formModal">
                         Print Data
                    </button>
               </a>
          </div>
     </div>
     <div class="row">
          <div class="col-lg-12">
          <table border="0" cellspacing="5" cellpadding="5">
        <tbody><tr>
            <td>Minimum date:</td>
            <td><input type="text" id="min" name="min"></td>
        </tr>
        <tr>
            <td>Maximum date:</td>
            <td><input type="text" id="max" name="max"></td>
        </tr>
    </tbody>
</table>
               <table id="example" class="table table-striped" border="1" cellpadding="10" style="width:100%">
                    <thead class="bg-warning">
                         <tr>
                              <th>Nomor Transaksi</th>
                              <th>Nama Produk</th>
                              <th>Jumlah Pesanan</th>
                              <th>Harga Satuan</th>
                              <th>Tanggal Transaksi</th>
                              <th>Total Harga</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($data['laporan'] as $row) :  ?>
                              <?php $angka = $row['harga_produk'];
                              $harga_produk = "Rp " . number_format($angka, 2, ',', '.');
                              $total_harga = $row['tot'];
                              $total_harga = "Rp " . number_format($total_harga, 2, ',', '.');
                              ?>
                              <tr>
                                   <td><?= $row["id_penjualan"] ?></td>
                                   <td><?= $row["nama_produk"] ?></td>
                                   <td><?= $row["jumlah_pesanan"] ?></td>
                                   <td><?= $harga_produk ?></td>
                                   <td><?= $row["tanggal_transaksi"] ?></td>
                                   <td><?= $total_harga ?></td>
                              </tr>
                         <?php endforeach ?>
                    </tbody>
                    <tfoot>
                         <tr>
                              <?php foreach ($data['subtotalharga'] as $row) : ?>
                                   <?php $tot = $row['tot'];
                                   $subtot = "Rp " . number_format($tot, 2, ',', '.'); ?>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td></td>
                                   <td>Total Pendapatan</td>
                                   <td><?= $subtot ?></td>
                              <?php endforeach; ?>
                         </tr>
                    </tfoot>
               </table>
          </div>
     </div>
     <div class="row mb-3 mt-2">
          <div class="col-lg-12">
               <h3>Data Produk</h3>
               <a href="<?= BASEURL ?>/laporan/print_produk/" target="_blank"><button type="button" class="btn btn-primary tambahTransaksi" data-bs-toggle="modal" data-bs-target="#formModal">
                         Print Produk
                    </button>
               </a>
          </div>
     </div>
     <div class="row">
          <div class="col-lg-12">
               <table id="example" class="table table-striped" border="1" cellpadding="10" style="width:100%">
                    <thead class="bg-warning">
                         <tr>
                              <th>Nama Produk</th>
                              <th>Jumlah Produk Terjual</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($data['produk'] as $row) :  ?>
                              <tr>
                                   <td><?= $row["nama_produk"] ?></td>
                                   <td><?= $row["sub_total"] ?></td>
                              </tr>
                         <?php endforeach ?>
                    </tbody>
                    <tfoot>
                         <tr>
                              <?php foreach ($data['subtotal'] as $row) : ?>
                                   <td>Total Produk Terjual</td>
                                   <td><?= $row['total'] ?></td>
                              <?php endforeach; ?>
                         </tr>
                    </tfoot>
               </table>
          </div>
     </div>
</div>