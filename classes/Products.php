<?php
class Products
{
    private $name, $price;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function __set($name, $value)
    {
//        if ($name=='name'){
//            $this->name = $value;
//        }
//
//        if ($name=='price'){
//            $this->price = $value;
//        }
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __call($name, $arguments)
    {
        echo 'Hàm: '.$name.' không tồn tại <br/>';
        echo 'Tham số: '.implode(', ', $arguments);
    }

    public static function __callStatic($name, $arguments)
    {
        echo 'Hàm: '.$name.' không tồn tại <br/>';
        echo 'Tham số: '.implode(', ', $arguments).'<br/>';
    }
}







