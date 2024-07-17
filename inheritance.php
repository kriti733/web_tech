<?php
class car{
    //properties
    public $make;
    public $model;
    //methods
    public function startEngine(){
        //code to be started
        echo"engine started for <br/>{this->make} <br/>{$this->model}";
    }
}
//creating an object
$mycar=new car();
$mycar1=new car();
$mycar->make="Toyotaaa";
$mycar1->model="Canada";
$mycar->startEngine();
$mycar1->startEngine();
?>