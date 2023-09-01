<?php
namespace App\MyClasses;


class MyService
{  
    private $myservice;


    private function __construct()
    {
    }


    public static function getInstance()
    {
        $instance = self::$myservice;
        return self::$myservice ?? self::$myservice = new MyService();
    }


    public function say()
    {
        return $this->msg;
    }


    public function data(int $id)
    {
        return $this->data[$id];
    }


    public function alldata()
    {
        return $this->data;
    }
}
