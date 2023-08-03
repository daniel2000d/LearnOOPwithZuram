<?php



class Car
{
    public $color = 'red';
    public $manufacturer;
    const MANUFACTURER_BMW='BMW';
    const MANUFACTURER_TESLA='testla';
    const MANUFACTURER_MERCEDES='mercedes';

    const COLOR_RED='red';
    const COLOR_GREEN='green';
    const COLOR_BLUE='blue';

    public  function ___construct($color,$manufacturer)
    {
        $this->color=$color;
        $this->manufacturer=$manufacturer;
    }
}
$myCar=new Car('red',Car::MANUFACTURER_MERCEDES);
var_dump($myCar);



//    public $weight='2000';
////    private $year;
//   static $counter =0;
//   public $myCounter=0;
//   public function __construct()
//   {
//       $this->myCounter++;
//       self::$counter++;
//   }
//
//
//
//}
//$myCar=new Car();
//echo Car::$counter .' '. $myCar->myCounter . PHP_EOL ;
//$myCar2=new Car();
//echo Car::$counter.' '. $myCar2->myCounter . PHP_EOL;






//$car = new Car();
////$car2=$car;
////$car=null;
////var_dump($car);
//
//$car2=clone $car;
//$car2->color='green';
//var_dump($car);




//     private $avaibalbeColors=[
//         'red','green','blue','white'
//         ];
//
//     public function setYear($year)
//     {
//         $this->year=$year;
//     }
//    public function getYear()
//    {
//       return  $this->year;
//    }
//        public function setColor($color)
//        {   if(in_array($color,$this->avaibalbeColors))
//        {
//            $this->color=$color;
//        }
//        }
//
//}
//
//$myCar=new Car();
//$myCar->setColor("white");
////echo $myCar->color;
////$myCar->setYear(year:2010);
////echo $myCar->getYear;
