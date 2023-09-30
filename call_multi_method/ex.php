<?php
error_reporting(E_ALL);
require_once 'DB.php';
$db = new DB(); //khởi tạo để tồn tại $this

//$db = new DB();
//
//$db->table('users');

//DB::table('users')
//    ->select('name', 'email', 'phone')
//    ->where('id', '>', 10)
//    ->get();

DB::where('id', '>', 10)
    ->select('name', 'email', 'phone')
    ->table('users')
    ->get();