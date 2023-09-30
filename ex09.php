<?php
require_once 'traits/Database.php';
require_once 'classes/News.php';

$news = new News();

echo $news->getListNews();
