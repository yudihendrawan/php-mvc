<?php 
class Laporan_model
{
     private $table = 'penjualan';
     private $db;
 
     public function __construct()
     {
         $this->db = new Database;
     }
     
     public function LaporanByDate($data)
     {
          $mulai = $data['mulai'];
          $akhir = $data ['akhir'];
          $query = "SELECT  penjualan.id_penjualan, produk.nama_produk, produk.harga_produk, jumlah_pesanan, tanggal_transaksi,  ((100 - promo.jumlah_potongan) * (produk.harga_produk *jumlah_pesanan ) / 100) AS tot,
          harga_produk, (harga_produk * jumlah_pesanan) as total_harga   FROM penjualan 
          JOIN produk ON penjualan.id_produk = produk.id_produk
          JOIN promo ON penjualan.id_promo = promo.id_promo 
          WHERE tanggal_transaksi BETWEEN '$mulai' AND '$akhir'"; 
            $this->db->query($query);
            $this->db->resultSet();
     }
     public function Laporan()
     {
         $this->db->query('SELECT  penjualan.id_penjualan, produk.nama_produk, produk.harga_produk, jumlah_pesanan, tanggal_transaksi,  ((100 - promo.jumlah_potongan) * (produk.harga_produk *jumlah_pesanan ) / 100) AS tot,
         harga_produk, (harga_produk * jumlah_pesanan) as total_harga   FROM penjualan 
         JOIN produk ON penjualan.id_produk = produk.id_produk
         JOIN promo ON penjualan.id_promo = promo.id_promo ');
         return $this->db->resultSet();
     }

     public function laporan_data($data)
     {
          $tanggal_start = ($data['min']);
     }

     public function Produk()
     {
          $this->db->query('SELECT   produk.nama_produk, produk.harga_produk, SUM(jumlah_pesanan) AS sub_total, id_penjualan
          FROM penjualan JOIN produk ON penjualan.id_produk = produk.id_produk GROUP BY produk.id_produk');
          return $this->db->resultSet();
     }

     public function Subtotal()
     {
          $this->db->query('SELECT SUM(jumlah_pesanan) AS total FROM ' . $this->table);
          return $this->db->resultSet();
     }

     public function SubtotalHarga()
     {
          // $this->db->query('SELECT SUM(jumlah_pesanan *harga_produk) as tot FROM penjualan
          //  JOIN produk ON penjualan.id_produk = produk.id_produk
          //  JOIN promo ON penjualan.id_promo = promo.id_promo');
          $this->db->query('SELECT SUM((100 - promo.jumlah_potongan) * (produk.harga_produk *jumlah_pesanan ) / 100) as tot FROM penjualan
           JOIN produk ON penjualan.id_produk = produk.id_produk
           JOIN promo ON penjualan.id_promo = promo.id_promo');
          return $this->db->resultSet();
     }
    
}