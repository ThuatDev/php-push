<?php
require_once 'users/Users.php';
require_once 'users/Groups.php';

require_once 'admin/users/Users.php';

require_once 'Home.php';

//use App\Users;
//use App\Admin\Users as AdminUsers;

use App\{Home,Users,Groups}; //Gộp namespace khi use


//
//$client = new Users();
//
//$admin = new AdminUsers();

$home = new Home();

echo '<hr/>';

$user = new Users();

$group = new Groups();