<?php
class DB
{
    private static $current;

    function __construct(){
        self::$current = $this;
    }

    public static function table($table){
        echo $table.'<br/>';
        return self::$current;
    }

    public static function select(...$fields){
        echo '<pre>';
        print_r($fields);
        echo '</pre>';

        return self::$current;
    }

    public static function where($field, $compare, $value){
        echo 'field: '.$field.'<br/>';
        echo 'compare: '.$compare.'<br/>';
        echo 'value: '.$value.'<br/>';
        return self::$current;
    }

    public static function get(){
        echo 'Run get';
    }
}
