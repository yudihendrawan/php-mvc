<?php 

class User_model {
    private $nama = 'Yudi Hendrawan';

    public function getUser()
    {
        return $this->nama;
    }
}