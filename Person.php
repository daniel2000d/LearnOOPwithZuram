<?php

class Person{
    public $name='Jane';
    private $phone=123456;
  public static function __callStatic($name, $arguments)
  {
      echo "\"$name\" static method was called";
  }

//  public function __call($name, $arguments){
//
//     if($name==='getMobilePhone');
//      {
//          return $this->getPhone();
//      }else if($name ==='setMobilePhone'){
//          call_user_func_array([$this, 'setPhone'],$arguments);
//      }
//
//    }}
//
//    /**
//     * @return int
//     */
//    public function getPhone()
//    {
//        return $this->phone;
//    }
//
//    public function setPhone($phone)
//    {
//        return $this->phone=$phone;
//    }





//    public function __set($propName,$value)
//    {
//        if($propName==='username'){
//            $this->name=$value;
//        }
//    }
//    public function __construct()
//    {
//        echo"__construct is called" . PHP_EOL;
//
//    }
//    public  function __destruct()
//    {
//        echo "__destruct is called" . PHP_EOL;
//    }
//    public function __toString()
//    {
//        return "Name: $this->name . Phone: $this->phone";
//
//    }
}

$p=new Person();
Person::hello();
//$p=new Person();
//echo $p->getMobilePhone();
//$p->setMobilePhone('111111');
//$p->username='Mary';
//echo $p->name;