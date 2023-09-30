<?php
require_once 'interfaces/Business.php';
require_once 'interfaces/ArrayStruct.php';
require_once 'interfaces/AuthInterface.php';
require_once 'interfaces/Model.php';
require_once 'classes/Authentication.php';

$auth = new Authentication();

echo $auth->login().'<br/>';

echo $auth->methodFromModel().'<br/>';