<?php
class Bussiness extends Database{

    protected $table;

    public function __construct(){

        parent::__construct(); //Chạy phương thức __construct() của class cha

        echo '<p>Khởi động Bussiness</p>';

        echo $this->db;
    }

    public function getDetail(){
       return parent::getDetail();
    }

    public function methodFromBs(){
        return 'methodFromBs';
    }

    public function getTable(){
        return $this->table;
    }
}