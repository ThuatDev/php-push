<?php
require_once 'classes/Model.php';
require_once 'classes/Users.php';

$user = new Users();

echo $user->getData().'<br/>';

echo $user->add().'<br/>';

echo $user->update().'<br/>';

echo $user->lists().'<br/>';

echo $user->delete().'<br/>';