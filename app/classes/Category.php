<?php


namespace App\classes;


trait Category
{
    public $a = 'BITM';
    public $b = 'Basis';

    public function hello(){
        echo $this->a.' '.$this->b;
    }
}