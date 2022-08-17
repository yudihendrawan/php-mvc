<?php 
class Produk_model{
     private $table = 'produk';
     private $db;
 
     public function __construct()
     {
         $this->db = new Database;
     }
     
    
     public function getAllProduk()
     {
         $this->db->query('SELECT * FROM ' . $this->table);
         return $this->db->resultSet();
     }
     
     public function getProdukById($id)
     {
          $this->db->query('SELECT * FROM '.$this->table . ' WHERE id_produk = :id_produk');
          $this->db->bind('id_produk' , $id);
          return $this->db->single();
     }

     public function upload()
     {
        $nama_file = $_FILES['gambar_produk']['name'];
        $ukuran_file = $_FILES['gambar_produk']['size'];
        $error = $_FILES['gambar_produk']['error'];
        $tmp = $_FILES ['gambar_produk']['tmp_name'];  
        // cek gambar di upload apa tidak
         if($error === 4 ){
            echo "<script>
            alert('Pilih gambar dulu dong..')
                </script>";
            return false;
        }
        // cek jenis gambar yang di upload
        $ekstensiGambarValid = ['jpg', 'png', 'jpeg','jfif'];
        $ekstensiGambar = explode('.', $nama_file);
        $ekstensiGambar = strtolower(end($ekstensiGambarValid));
        if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
            echo "<script>
                    alert('Ekstensi gambar tidak sesuai..')
                </script>";
        return false;
        }
         // cek ukuran terlalu besar
    if($ukuran_file > 6000000){
        echo "<script>
                alert('Ukuran gambar terlalu besar..')
            </script>";
    return false;
    } 
        //jika lolos upload
        // generate nama random untuk file foto agar tidak bentrok ada yang sama
        $namaFileBaru = uniqid();
        $namaFileBaru .= '.';
        $namaFileBaru .= $ekstensiGambar;
        $dir= '/xampp/htdocs/sari_pasundan/public/img/produk';
        move_uploaded_file($tmp,$dir.'/'.$namaFileBaru);
        return $namaFileBaru;
     }

     public function tambahProduk($data)
     {
        $gambar_produk = $this->upload();
        if(!$gambar_produk){
            return false;
        } 
        $query = "INSERT INTO produk VALUES
                            ('', :nama_produk, :harga_produk, :gambar_produk,:deskripsi, :jumlah_produk)";
        
        $this->db->query($query);
        $this->db->bind('nama_produk',$data['nama_produk']);
        $this->db->bind('harga_produk',$data['harga_produk']);
        $this->db->bind('deskripsi',$data['deskripsi']);
        $this->db->bind('gambar_produk',$gambar_produk);
        $this->db->bind('jumlah_produk',$data['jumlah_produk']);

        $this->db->execute();
        return $this->db->rowCount();
     }
     public function hapusProduk($id)
     {
          $query = "DELETE FROM produk WHERE id_produk = :id_produk";
          $this->db->query($query);
          $this->db->bind('id_produk', $id);

          $this->db->execute();
          return $this->db->rowCount();
     }

     public function ubahProduk($data)
     {
        $gambar_lama = ($data["gambar_lama"]);
        // cek gambar diubah apa tidak
        if($_FILES["gambar_produk"]["error"] === 4){
            $gambar_produk = $gambar_lama;
        } else{
            $gambar_produk = $this->upload();
        }
        $query = "UPDATE produk SET
                                   nama_produk = :nama_produk,
                                   harga_produk = :harga_produk,
                                   gambar_produk = :gambar_produk,
                                   deskripsi = :deskripsi,
                                   jumlah_produk = :jumlah_produk
                                   WHERE id_produk = :id_produk";

          $this->db->query($query);
          $this->db->bind('nama_produk', $data['nama_produk']);
          $this->db->bind('harga_produk', $data['harga_produk']);
          $this->db->bind('gambar_produk', $gambar_produk);
          $this->db->bind('deskripsi', $data['deskripsi']);
          $this->db->bind('jumlah_produk', $data['jumlah_produk']);
          $this->db->bind('id_produk', $data['id_produk']);
        
          $this->db->execute();
          return $this->db->rowCount();
     }



}