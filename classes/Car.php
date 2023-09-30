<?php
class Car{

    private $color, $brand;

    //Phương thức khởi tạo sẽ chạy ngay sau khi đối tượng được khởi tạo
    public function __construct($color, $brand=''){
        //echo '<p>Khởi động xe</p>';
        $this->color = $color;
        $this->brand = $brand;
    }

//    public function Car($color, $brand){
//        $this->color = $color;
//        $this->brand = $brand;
//    }

    public function getInfo(){
        return 'Thông tin xe';
    }

    public function getColor(){
        return $this->color;
    }

    public function getBrand(){
        return $this->brand;
    }

    //Phương thức huỷ sẽ chạy khi không sử dụng đối tượng
    public function __destruct(){
        //echo '<p>Huỷ đối tượng</p>';
    }
}