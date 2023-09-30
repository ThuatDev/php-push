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
