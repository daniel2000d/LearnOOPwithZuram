<?php
//
//trait Trait1{
//    public function method1()
//    {
//        echo "foo";
//    }
//}
//
//trait Trait2
//{
//    public function method2()
//    {
//        echo "bar";
//    }
//}
//trait Trait3
//{ use Trait1,Trait2;
//    public function method3()
//    {
//        echo"3";
//    }
//}
//
//class MyClass
//{
//    use Trait3;
//}
//$a=new MyClass();
//$a->

class A{
    public function hello()
    {
        echo "hello from class A";
    }
}
 trait TraitA
 {
     public function hello()
     {
         echo "hello from trait A.". parent::hello();
     }
 }

 class B extends A{
    use TraitA;
 }

 $a=new B();
$a->hello();