<?php
require_once 'config.php';
require_once 'includes/Connection.php';
require_once 'includes/Database.php';
require_once 'includes/Business.php';
require_once 'model/Users.php';
require_once 'model/Posts.php';

use Database\Model\Users;
use Database\Model\Posts;

//use Database\Business;

//use Database\Database;
//
//$db = new Database();

//$users = $db->getRaw("SELECT * FROM users");
//
//$findUser = $db->firstRaw("SELECT * FROM users WHERE id=2");

//echo '<pre>';
//print_r($findUser);
//echo '</pre>';

//$db->insert('posts', [
//    'title' => 'Bài viết 1',
//    'content' => 'Nội dung 1'
//]);

//$db->update('posts', [
//    'title' => 'Bài viết update'
//], "id=1");

//$db->delete('posts', 'id=1');

//$bs = new Business();
//
//$data = $bs->find(3);
//echo '<pre>';
//print_r($data);
//echo '</pre>';
//
//
//

$user = new Users();
//$user->delete('id = 27');

$post = new Posts();
//$post->insert([
//    'title' => 'Bài viết 2',
//    'content' => 'Nội dung 2'
//]);
$lists = $post->get();
echo '<pre>';
print_r($lists);
echo '</pre>';




