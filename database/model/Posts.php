<?php

namespace Database\Model;

use Database\Business;

class Posts extends Business
{
    protected $table = 'posts';
    protected $field = 'title, content';

}