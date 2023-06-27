<?php

function  sayHi($name ='Mark'){
 echo 'hi ' . $name;
}
sayHi("Bill Gates");
sayHi();



// function add($a,$b){
//     echo $a + $b;
// }
// $res= add(1,10);
// echo $res;


function power($a,$b){
 
    $product=1;

   for($i=0;$i<$b;$i++){
     $product *=$a;
   } 

   return $product;
}

echo power(3,5);


if(function_exists("power")){
    echo 'exist';
}else {
    echo 'not exist';
}