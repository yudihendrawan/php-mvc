<?php 

class Customer_model{
     private $table = 'customer';
     private $db;

     public function __construct()
     {
          $this->db = new Database;
     }

     public function getAllCustomer()
     {
          $this->db->query('SELECT * FROM '.$this->table);
          return $this->db->resultSet();
     }

     public function getCustomerById($id)
     {
          $this->db->query('SELECT * FROM '.$this->table . ' WHERE id_customer = :id_customer');
          $this->db->bind('id_customer' , $id);
          return $this->db->single();
     }

     public function tambahCustomer($data)
     {
          $query = "INSERT INTO customer VALUES
                              ('', :nama_customer, :tlp_customer)";
          $this->db->query($query);
          $this->db->bind('nama_customer',$data['nama_customer']);
          $this->db->bind('tlp_customer',$data['tlp_customer']);

          $this->db->execute();
          return $this->db->rowCount();
     }

     public function hapusCustomer($id)
     {
          $query = "DELETE FROM customer WHERE id_customer = :id_customer";
          $this->db->query($query);
          $this->db->bind('id_customer', $id);

          $this->db->execute();
          return $this->db->rowCount();
     }

     public function ubahCustomer($data)
     {
          $query = "UPDATE customer SET
                                   nama_customer = :nama_customer,
                                   tlp_customer = :tlp_customer
                                   WHERE id_customer = :id_customer";
          $this->db->query($query);
          $this->db->bind('nama_customer', $data['nama_customer']);
          $this->db->bind('tlp_customer', $data['tlp_customer']);
          $this->db->bind('id_customer', $data['id_customer']);

          $this->db->execute();
          return $this->db->rowCount();
     }
}