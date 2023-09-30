<?php
/*
 * - Muốn gọi đến thuộc tính tĩnh và phương thức tĩnh => self::tenPhuongThuc() hoặc self::$tenthuoctinh
 *
 * - Từ phương thức tĩnh, muốn gọi đến phương thức bình thường => Thông qua thuộc tính tĩnh trung gian
 *
 *
 * */
class Session{

    public static $data = 'Unicode Training';

    public static $current; //thuộc tính tĩnh trung gian để lưu trữ $this

    public $user = 'Hoàng An';

    public function __construct(){
        self::$current = $this;
        //$this->user = 'Hoàng an Unicode';
    }

    public static function setSession(){
        //echo '<p>Set session</p>';
        //return self::$current->getData();
        //return self::getData();
        //return self::$data;
        return self::$current->user;
    }

    public function getData(){
        //return self::setSession();
        //return self::$data;
        //return 'Get Data';
        //return $this->user;
    }

}