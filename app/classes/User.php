<?php


namespace App\classes;


class User
{
    protected $name='BITM';
    protected $city='Dhaka';

    public function index(){
        echo 'Institute is'.$this->name.'and city is'.$this->city;
    }

}