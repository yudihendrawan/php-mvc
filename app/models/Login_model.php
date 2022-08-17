<?php 

class Login_model
{
     private $table = 'users';
     private $db;
 
     public function __construct()
     {
         $this->db = new Database;
     }

     public function dataUser()
     {
          $this->db->query('SELECT * FROM users' );
          return $this->db->single();
     }
     

     public function User($username, $password)
     {    
          $query="SELECT *  FROM users WHERE 
                              username = :username AND password = :password";
          $this->db->query($query);
          $this->db->bind('username',$username);
          $this->db->bind('password',$password);
          $this->db->execute();
          return $this->db->rowCount();
     }

     public function registrasi($data)
     {
          $username = $data['username'];
          $password = $data['password'];
          $cpassword = $data['cpassword'];

          if($password == $cpassword)
          {
               $query = "SELECT * FROM users WHERE username = :username";
               $this->db->query($query);
               $this->db->bind('username', $username);
               $this->db->execute();
               if($this->db->rowCount()<0)
               {
                    $sql = "INSERT INTO users ('',:username, :password)";
                     $this->db->query($sql);
                    $this->db->bind('username', $username);
                    $this->db->bind('password', $password);
                    $result = $this->db->execute();
               }
               if($result )
               {
                    echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                    $username = "";
                    $password= "";
                    $data['password'] = "";
                    $data['cpassword'] = "";
               }
               else {
                    echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
                }
          }else{
               echo "<script>alert('Password Tidak Sesuai')</script>";
          }
     }

     

}
