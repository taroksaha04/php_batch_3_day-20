<?php


namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Teacher;
use App\classes\Category;


//for teacher abstract class
class Student extends Teacher implements ExampleOne,ExampleTwo
//class Student extends User implements ExampleOne,ExampleTwo
{

    use Category;//for trait we use (use keyword)

    protected $country = 'Bangladesh';
    protected static $area = 'Farmgate';//static property

    public function __construct()
    {
        $this->name = 'Riaj';
        $this->city = 'Savar';

    }


 //name and city User class er but oi class er property gulo akhane construct er maddhome over write korechi this is called polymorphism
    public function manage()
    {
//        echo $this->city;
//        echo $this->index();
//        echo "Institute name is $this->name and city is $this->city  and country is $this->country";

       // echo $this->country; //non Static property
        echo self ::$area;

        //echo $this->add();//for using non abstract class

    }

    public function one()
    {

        echo 'Hello one';
    }

    public function two()
    {
        echo 'Hello two';
    }

    public function three()
    {
        echo 'Hello Three';
    }

    public function ten()
    {
        echo 'Ten';
    }

    public function ten1()
    {
        echo 'Ten1';
    }

    public function test()
    {
        echo 'Hello Test';
    }
    public static function demo(){
        echo 'Hello world';
    }
}