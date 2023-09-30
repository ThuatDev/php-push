<?php
namespace App;

use App\Users;
use DateTime;

class Home
{
    function __construct(){
        echo '<h3>HomePage</h3>';

        $client = new Users();

        $date = new DateTime();
        
        var_dump($date);
    }

}