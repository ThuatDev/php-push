<?php
class News{
    use Database; //Lấy các phương thức, thuộc tính của trait đưa vào class

    //private $connect = 'DB New';

    public function __construct()
    {
        echo $this->connect();
        echo '<br/>';
        echo $this->connect.'<br/>';
    }

    public function getListNews(){
        return $this->get();
    }

    private function get(){
        return 'Override';
    }
}