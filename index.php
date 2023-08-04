<?php
//
//interface MyInterface
//{
////  const MY_CONSTANT=1;
//    public function method1();
//    public function method2(); :string;
////    public function method2();
//
//
//}
//interface MyInterface3
//{
//    public function method3();
//
//}
//
//
//interface MyInterface2 extends MyInterface,MyInterface3
//{
//    public function method2():string;
//
//}
//
////abstract class MyClass implements MyInterface
////{   const MY_CONSTANT=2;
////    public function method2()
////    {
////
////    }
////}
//
//class MyClass implements  MyInterface2
//{
//
//
//    public function method1()
//    {
//        // TODO: Implement method1() method.
//    }
//
//    public function method2()
//    {
//        // TODO: Implement method2() method.
//    }
//}
////echo MyInterface::MY_CONSTANT;
//$myClass = new MyClass();


require_once  'Application.php';
require_once 'MysqlDb.php';
require_once "SqliteDb.php";
require_once  "RESTDb.php";

$app =new Application(
    new MysqlDb(),
    //new SqliteDb()
   // ,new RESTDb()
);

$app->db->getOrders();
$app->db->getOrderById(1);
$app->db->createOrder([]);
$app->db->updateOrder(1,[]);
$app->db->deleteOrder(1);