<?php
require_once 'classes/Person.php';

$personMale = new Person();

//Gán dữ liệu cho thuộc tính
$personMale->name = 'Hoàng An Unicode';

//Gọi thuộc tính
echo 'Tên: '.$personMale->name.'<br/>';
echo 'Tuổi: '.$personMale->age.'<br/>';
//echo 'Địa chỉ: '.$personMale->location.'<br/>';

//Gọi phương thức
echo 'Tên: '.$personMale->getName().'<br/>';
echo 'Tuổi: '.$personMale->getAge().'<br/>';

//Gọi hằng số
echo 'Tuổi nhỏ nhất: '.$personMale::MIN_AGE.'<br/>';
echo 'Tuổi nhỏ nhất: '.Person::MIN_AGE.'<br/>';


echo '<hr/>';

$personFeMale = new Person;

//echo 'Tên: '.$personFeMale->name.'<br/>';

//$personFeMale->name = 'Unicode Academy';

$personFeMale->setInfo(
    'Hoàng An Unicode',
    31,
    'Phú Thọ'
);

$personFeMale->getInfo();

echo '<hr/>';

$personFeMale->setLocation('Đà Nẵng');

echo 'Địa chỉ: '.$personFeMale->getLocation().'<br/>';






