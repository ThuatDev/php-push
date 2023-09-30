<?php
/*
 * Tên file và tên class nên đặt giống nhau => Hỗ trợ autoload (học sau)
 *
 * Biến $this thể hiện đối tượng tại Class đang viết
 * Biến $this chỉ tồn tại khi đối tượng được khởi tạo: $tendoituong = new TenClass()
 *
 * Phạm vi truy cập:
 *
 * public:
 * + Bất kỳ đâu cũng có thể truy cập vào được
 * + Nếu không khai báo phạm vi, php sẽ ngầm hiểu là public (Thuộc tính thì phải thêm từ khoá var)
 *
 * private:
 * + Chỉ được sử dụng trong class
 * + Muốn truy cập ngoài class thì cần sử dụng qua phương thức trung gian (Phải ở dạng public) => setter, getter
 *
 * */
class Person{

    //Khai báo thuộc tính (Biến)
    var $name='Unicode', $age=30;
    private $location = 'Hà Nội';

    //Khai báo hằng số
    const MIN_AGE = 25;

    //Định nghĩa phương thức (Hàm)
    public function getName(){
        return 'Tôi là Unicode';
    }

    public function getAge(){
        return 'Tôi 30 tuổi';
    }

    function getInfo(){
        echo 'Tên: '.$this->name.'<br/>';
        echo 'Tuổi: '.$this->age.'<br/>';
        echo 'Địa chỉ: '.$this->location.'<br/>';
        echo 'Tên mới: '.$this->getName().'<br/>';
    }

    function setInfo($name, $age, $location){
        $this->name = $name;
        $this->age = $age;
        $this->location = $location;
    }

    function setLocation($location){
        $this->location = $location;
    }

    function getLocation(){
        return $this->location;
    }
}