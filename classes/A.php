<?php
class A{

    public static function getData(){
        return 'Get Data A';
    }

    public static function render(){
        return self::getData();
    }
}