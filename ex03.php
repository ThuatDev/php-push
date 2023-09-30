<?php
require_once 'classes/Database.php';
require_once 'classes/Bussiness.php';

$bussiness = new Bussiness();

//echo $bussiness->getDetail();

echo '<br/>';

//echo $bussiness->db;

//echo $bussiness->methodFromDb();

echo $bussiness->getTable();