<?php
//require_once 'autoload.php';
require_once 'vendor/autoload.php';
//{ include dirname( FILE) . '/'. str_replace('\\', "\/",$className) . '.php';
//
//});
////
//include "Class1.php";
//include "ns1/User.php";
//include "ns1/subns1/ClassSubns1.php";
//include "ns1/subns2/ClassSubns2.php";
//include "ns1/ClassSubns2.php";

//
////
//$user=new \Class1();
//$user =new \ns1\User();
//$user =new \ns1\subns1\ClassSubns1();
//$user =new \ns1\subns2\ClassSubns2();
//$user =new \ns2\ClassSubns2();
//

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'http://api.github.com/repos/guzzle/guzzle');

echo $response->getStatusCode(); // 200
echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'


