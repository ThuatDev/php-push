<?php
class Database{

    protected $db;

    public function __construct(){

        $this->db = 'Connected';

        echo '<p>Kết nối Database</p>';
        
        $this->table = 'users';
    }

    protected function fetch(){
        return 'Truy vấn CSDL';
    }

    public function getDetail(){
        return $this->fetch();
    }

    public function methodFromDb(){
        return $this->methodFromBs();
    }
}