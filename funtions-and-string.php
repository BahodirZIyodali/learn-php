<?php

echo strlen('name');  //the length of a string

echo strcmp("hi","h");  //compares two strings

echo strpos("hello world", "w");  //find the first occurrence of a substring in
 
echo strtolower('u are not good PERSON'); //converts a string to lowercase

echo strtoupper('u are good person'); //converts a string to uppercase

echo  trim("   hello  " ,); // removes whitespace from both ends of a string and returns a new string, without modifying the original string.


print_r(explode(" ", "welcome to PHP") );  // string to arrray like split in js


$companies=['apple','facebook','microsoft'];
print_r($companies);

echo implode("",$companies);  //used to join the elements of an array.   










