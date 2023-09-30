<?php
//Lớp trừu tượng
abstract class Model
{
    //Phương thức bình thường
    public function getData(){
        return 'Get Data';
    }

    //Phương thức trừu tượng
    abstract public function add(); //Chỉ được khai báo

    abstract public function update();

    abstract public function lists();

    abstract public function delete();
}