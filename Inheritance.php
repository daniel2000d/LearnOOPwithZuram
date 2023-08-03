<?php


class Person{
    public $name;
    protected $age;
    private $phone;

    public function __construct ($name, $age,$phone)
    {
        $this->name=$name;
        $this->age=$age;
        $this->phone=$phone;
    }
}

class Employee extends Person
{
    private $salary;
    public function __construct ($name ,$age, $phone, $salary)
    {
        parent::__construct ($name, $age,$phone);
        $this->salary=$salary;
    }
//    public function hello()
    {
       return "I am an employee: $this->>name";
    }
    class Student extends Person
    {
        public $studentNo;
    }



}




//class ParentClass
//{
//    public $property1 = '1';
//    protected $property2 ='2';
//     private $property3='3';
//
//    /**
//     * @return string
//     */
//    public function getProperty2():string
//    {
//        return $this->property2;
//    }
//    public function printText( string $text)
//    {
//        echo $text;
//    }
//}
//
//
//class ChildClass extends ParentClass
//{
//    public $property1='11';
//    protected $property2='22';
//    public function getProperty2(): string
//    {
//        $result= parent::getProperty2();
//        return "something". $result;
//    }
//    public function printText( string $text)
//    {
//        echo $text;
//    }
//
//}
//$obj =new ChildClass();
//
//echo $obj->getProperty2();