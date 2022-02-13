<?php


namespace App\classes;
class Product
{
    protected $file;
    protected $directory;
    protected $products;
    protected $name;
    protected $price;
    protected $description;
    protected $imageName;
    protected $tempPath;

    public function __construct($post = null,$file = null)
    {
//        echo '<pre>';
//        print_r(($post));
//        print_r($file);
//        echo $file['image']['name'];
//        echo $file['image']['type'];
//        echo $file['image']['tmp_name'];
        $this->file = $file;
        $this->imageName = $file['image']['name'];
        $this->tempPath = $file['image']['tmp_name'];
        $this->directory = 'assets/img/product-image/'.$this->imageName;


    }

    public function index(){
        header('Location: action.php?pages=add-product');
    }

    public function newProduct()
    {
        move_uploaded_file($this->tempPath,$this->directory);

    }

}