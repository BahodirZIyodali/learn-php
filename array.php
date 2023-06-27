<?php
$car =['bmw','toyota','gm'];

$car[2]='nissan';

print_r($car);


array_pop($car);

array_push($car,'mercedes');
print_r($car);

array_shift($car);

array_unshift($car,'gm');

print_r($car);


if(in_array('gm',$car)){
    echo 'yeah i found';
}else {
    echo 'not found';
}


echo array_search("gm",$car);  // return 0 if its true

print_r(array_reverse($car));

sort($car); 

print_r($car);

rsort($car); 

print_r($car);

shuffle($car); 

print_r($car);


$num=array_fill(5,10,'hi') ;//start indx,end_index, fill

print_r($num);





$animal1=['sheep','dog'];
$animal2=['cow','cat','dog'];


$animals=array_merge($animal1,$animal2);

$animalsIntersect=array_intersect($animal1,$animal2);

$animalsDiff=array_diff($animal1,$animal2);


print_r($animals);
print_r($animalsIntersect);
print_r($animalsDiff);

print_r(array_slice($animals,1));


$number=range(10,50,10);

print_r($number);





