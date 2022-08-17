<?php 
class Promo_model{
     private $table = 'promo';
     private $db;
 
     public function __construct()
     {
         $this->db = new Database;
     }

     public function getAllPromo()
     {
         $this->db->query('SELECT id_promo, nama_promo, jumlah_potongan, (jumlah_potongan / 100) AS potongan  FROM ' . $this->table);
         return $this->db->resultSet();
     }
     
     public function getPromoById($id)
     {
          $this->db->query('SELECT * FROM '.$this->table . ' WHERE id_promo = :id_promo');
          $this->db->bind('id_promo' , $id);
          return $this->db->single();
     }

     public function tambahPromo($data)
     {
         $query = "INSERT INTO promo
                     VALUES
                   ('', :nama_promo, :jumlah_potongan)";
         
         $this->db->query($query);
         $this->db->bind('nama_promo', $data['nama_promo']);
         $this->db->bind('jumlah_potongan', $data['jumlah_potongan']);
         $this->db->execute();
         return $this->db->rowCount();
     }
 
     public function hapusPromo($id)
     {
         $query = "DELETE FROM promo WHERE id_promo = :id_promo";
         
         $this->db->query($query);
         $this->db->bind('id_promo', $id);
         $this->db->execute();
         return $this->db->rowCount();
     }
 
 
     public function ubahPromo($data)
     {
         $query = "UPDATE promo SET
                     nama_promo = :nama_promo,
                     jumlah_potongan = :jumlah_potongan
                   WHERE id_promo = :id_promo";
         
         $this->db->query($query);
         $this->db->bind('nama_promo', $data['nama_promo']);
         $this->db->bind('jumlah_potongan', $data['jumlah_potongan']);
         $this->db->bind('id_promo', $data['id_promo']);
         $this->db->execute();
         return $this->db->rowCount();
     }
}