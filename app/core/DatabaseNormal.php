<?php 

class DatabaseNormal{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $db_name = DB_NAME;
    public function __construct()
     {
          $this->conn = mysqli_connect($this->host, $this->user,$this->pass, $this->db_name);
     }

     public function query($query)
     {
          $conn = mysqli_connect($this->host, $this->user,$this->pass, $this->db_name);
          $result = mysqli_query($this->$conn, $query);
          $rows  = [];
          
          while ($row = mysqli_fetch_assoc($result)){
               $rows[] = $row;
          };
          return $rows;
     }

     public function single(){

     }

}