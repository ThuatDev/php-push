<?php

trait Database
{
    private $connect = 'DB';

    private function connect(){
        return 'Connected Database';
    }

    private function get(){
        return 'Get All Data';
    }
}