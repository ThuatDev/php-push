<?php
require_once 'classes/leanr_person.php';
$personMale = new Personw();
var_dump($personMale);
echo '<hr/>';


  $personMale =new Personw;
    $personMale->name='thuatpro';
  var_dump($personMale);
  echo '<hr/>';

  var_dump($personMale->getAge());


  class MyClass {
    private $privateVar = 'Đây là biến riêng tư';

    private function privateMethod() {
        return 'Đây là phương thức riêng tư';
    }

    public function accessPrivate() {
        // Bạn có thể truy cập các thành viên riêng tư bên trong lớp
        echo $this->privateVar; // In ra: Đây là biến riêng tư
        echo $this->privateMethod(); // In ra: Đây là phương thức riêng tư
    }
}

$obj = new MyClass();
// Không thể truy cập trực tiếp từ bên ngoài lớp
// echo $obj->privateVar; // Lỗi
// echo $obj->privateMethod(); // Lỗi

// Nhưng có thể truy cập thông qua phương thức công khai
$obj->accessPrivate();

