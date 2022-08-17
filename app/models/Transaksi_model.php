<?php 

class Transaksi_model{
     private $table = 'penjualan';
     private $db;

     public function __construct()
     {
         $this->db = new Database;
     }
     public function getAllTransaksi()
     {
         $this->db->query('SELECT penjualan.id_penjualan, customer.nama_customer, produk.nama_produk, promo.nama_promo, promo.jumlah_potongan,
                                    ((100 - promo.jumlah_potongan) * (produk.harga_produk *jumlah_pesanan ) / 100) AS tot, (produk.harga_produk * jumlah_pesanan) - ( promo.jumlah_potongan * 100) AS potongan,  tanggal_transaksi, (produk.harga_produk * jumlah_pesanan) AS total_harga, 
                                   jumlah_pesanan FROM ' . $this->table .' 
                                   JOIN produk ON penjualan.id_produk = produk.id_produk
                                   JOIN customer ON penjualan.id_customer = customer.id_customer
                                   JOIN promo ON penjualan.id_promo = promo.id_promo' );
         return $this->db->resultSet();
     }

     public function getTransaksiById($id)
     {
         $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_penjualan=:id_penjualan');
         $this->db->bind('id_penjualan', $id);
         return $this->db->single();
     }

     public function tambahTransaksi($data)
     {
        $nama_customer = $data['nama_customer'];
        $nama_produk = $data['nama_produk'];
        $nama_promo = $data['nama_promo'];
        $jumlah_pesanan = $data['jumlah_pesanan'];

        $this->db->query("SELECT * FROM produk WHERE id_produk= '$nama_produk'");
        $produk['produk'] = $this->db->single($nama_produk);
        $stok = $produk['produk']['jumlah_produk'];
        $sisa = $stok - $jumlah_pesanan;
        if($stok < $jumlah_pesanan)
        {
            echo"<script>
            alert('Maaf, stok tidak cukup');
            document.location.href='data_transaksi.php';
            </script>";    
        }
        else{
         $query = "INSERT INTO `penjualan` (`id_penjualan`, `id_customer`, `id_produk`, `id_promo`,`jumlah_pesanan`, `tanggal_transaksi`) VALUES 
                   (NULL, '$nama_customer', '$nama_produk', '$nama_promo', '$jumlah_pesanan', current_timestamp());";
         $waktu =  date('Y-m-d H:i:s');
         $this->db->query($query);
         $this ->db->execute();
        }
        //  $this->db->bind('nama_customer', $data['nama_customer']);
        //  $this->db->bind('nama_produk', $data['nama_produk']);
        //  $this->db->bind('jumlah_pesanan', $data['jumlah_pesanan']);
        //  $this->db->bind('tanggal_transaksi', $waktu);
        $upstok = "UPDATE produk SET jumlah_produk = '$sisa' WHERE id_produk = '$nama_produk'";
        $this->db->query($upstok);
        $this->db->execute();
         return $this->db->rowCount();
     }

     public function hapusTransaksi($id)
     {
         $query = "DELETE FROM penjualan WHERE id_penjualan = :id_penjualan";
         
         $this->db->query($query);
         $this->db->bind('id_penjualan', $id);
 
         $this->db->execute();
 
         return $this->db->rowCount();
     }
}