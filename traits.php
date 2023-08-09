<?php

trait MyTrait
{ //public $a=10;

    public function  hello()
    {
        echo "Hello I can fly";
}

}
trait EngineTrait
{
    public function hello()
    {
        echo "i have an engine";
    }
}
class Plain
{
    use MyTrait,EngineTrait{
        EngineTrait::hello as engineHello;
        MyTrait::hello insteadof  EngineTrait;

    }

}

//class Helicopter
//{
//    use MyTrait,EngineTrait;
//}
//class Car{
//    use EngineTrait;
//}
$plain=new Plain();
//echo $plain->a;
//$helicopter=new Helicopter();
//$plain->fly();
//$helicopter->fly();
//$car=new Car();
//$car->hello();
$plain=new Plain();
$plain->hello();
$plain->engineHello();
