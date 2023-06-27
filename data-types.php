<?php
//  php codes
//  run command php -S localhost:8000

$name='eshmat';
echo " <h1> $name </h1> "  ;

echo '1'+ '1 ' . '<br>'   ;
echo  '11'+'122';




$float=1.2;
$boolean=true; // true equel to 1 , false equel to 0 and we never see on the screen 
$array = [1,2,'3rw',false];
$array2 = array(1,3);
// echo  $array;
// print $array;
// print_r($array);
// echo $boolean;
// print_r( '<br>' .$boolean  . ' boolen 1 is true  or  invisble means 0  is false');

$null=null;



$array =[1,2,3,3];
print_r($array); //To inspect or check the structure and values of an array in a human-readable format on the screen  




//  class 
class Car{

  public $color;
  public $name;
   
  public function _construct($name,$color){
    $this->$color=$color;
    $this->$name=$name;
  }   

  public function getCar(){
    return "My car is a" . $this->$color . " " . $this->$name . '' ;
  }
}

// $object =new Car('blue','adad');
// echo $object-> getCar();







class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo " The fruit is {$this->name} and the color is {$this->color}.";
  }
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {
  public function message() {
    echo  "<br> Am I a fruit or a berry?  <br>";
  }
}
$strawberry = new Strawberry("Strawberry", "red");
$strawberry->intro();
$strawberry->message();

$apple = new Fruit("Apple", "blue");
$apple->intro();




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body >
<script>
  console.log('1'+1);
  console.log('11'-1);
</script>
</body>
</html>