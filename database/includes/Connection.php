<?php
namespace Database;

use PDO;
use Exception;

class Connection
{

    private $host = _HOST;
    private $user = _USER;
    private $pass = _PASS;
    private $dbName = _DB;
    private $driver = _DRIVER;
    private static $conn = null;

    public function __construct(){
        try{
            if (class_exists('PDO')){
                $dsn = $this->driver.':dbname='.$this->dbName.'; host='.$this->host;

                $options = [
                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', //Hỗ trợ hiển thị nội dung tiếng việt
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //Tạo thông báo ra ngoại lệ khi truy vấn bị lỗi
                ];

                if (self::$conn==null){

                    self::$conn = new PDO($dsn, $this->user, $this->pass, $options);
                }


            }
        }catch (Exception $exception){
            echo $exception->getMessage();
        }

    }

    public function getConnect(){
        return self::$conn;
    }

}