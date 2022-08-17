<?php 

class Admin_model {
    private $table = 'admin';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllAdmin()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAdminById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_admin=:id_admin');
        $this->db->bind('id_admin', $id);
        return $this->db->single();
    }

    public function tambahDataAdmin($data)
    {
        $query = "INSERT INTO admin
                    VALUES
                  ('', :np, :nama_admin, :shift_admin)";
        
        $this->db->query($query);
        $this->db->bind('np', $data['np']);
        $this->db->bind('nama_admin', $data['nama_admin']);
        $this->db->bind('shift_admin', $data['shift_admin']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataAdmin($id)
    {
        $query = "DELETE FROM admin WHERE id_admin = :id_admin";
        
        $this->db->query($query);
        $this->db->bind('id_admin', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataAdmin($data)
    {
        $query = "UPDATE admin SET
                    np = :np,
                    nama_admin = :nama_admin,
                    shift_admin = :shift_admin
                  WHERE id_admin = :id_admin";
        
        $this->db->query($query);
        $this->db->bind('np', $data['np']);
        $this->db->bind('nama_admin', $data['nama_admin']);
        $this->db->bind('shift_admin', $data['shift_admin']);
        $this->db->bind('id_admin', $data['id_admin']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}