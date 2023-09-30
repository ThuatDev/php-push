<?php
namespace Database;

use Database\Connection;
use PDO;

class Database extends Connection{

    private $db;

    public function __construct(){

        parent::__construct(); //Kế thừa connect từ class Connection

        $this->db = $this->getConnect();
    }

    public function insertData($table, $data){

        if (!empty($data)){

            $fieldStr = '';
            $valueStr = '';

            foreach ($data as $key => $value){
                $fieldStr.=$key.', ';
                $valueStr.=':'.$key.', ';
            }

            $fieldStr = rtrim($fieldStr, ', ');
            $valueStr = rtrim($valueStr, ', ');

        }

        $sql = "INSERT INTO $table($fieldStr) VALUES($valueStr)";

        $statement = $this->db->prepare($sql);

        $status = $statement->execute($data);

        return $status;

    }

    public function updateData($table, $data, $condition=''){

        if (!empty($data)){

            $updateStr = '';

            foreach ($data as $key => $value){
                $updateStr.=$key.='=:'.$key.', ';
            }

            $updateStr = rtrim($updateStr, ', ');

        }

        $sql = "UPDATE $table SET $updateStr";

        if (!empty($condition)){
            $sql.=' WHERE '.$condition;
        }

        $statement = $this->db->prepare($sql);

        $status = $statement->execute($data);

        return $status;

    }

    function deleteData($table, $condition=''){

        $sql = "DELETE FROM $table";

        if (!empty($condition)){
            $sql.=' WHERE '.$condition;
        }

        $statement = $this->db->prepare($sql);

        $status = $statement->execute();

        return $status;
    }

//Lấy tất cả dữ liệu
    function getRaw($sql){

        $statement = $this->db->prepare($sql);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

//Lấy 1 bản ghi đầu tiên

    function firstRaw($sql){

        $statement = $this->db->prepare($sql);

        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

//Đếm số dòng của câu lệnh truy vấn

    function getRows($sql){

        $statement = $this->db->prepare($sql);

        $statement->execute();

        return $statement->rowCount();
    }

//Lấy id cuối cùng sau khi insert (Dựa vào khoá chính)
    function insertId(){

        return $this->db->lastInsertId();
    }


}