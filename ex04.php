<?php
require_once 'classes/Session.php';

$session = new Session();

//echo Session::setSession();
//
//echo Session::$data;

//echo $session->getData();

//echo Session::getData();

echo $session->user.'<br/>';
echo Session::$data.'<br/>';

echo '<hr/>';

Session::$data = 'Unicode Academy';

$session->user = 'Lập trình PHP';

$session2 = new Session();

echo $session2->user.'<br/>';
echo $session2::$data.'<br/>';