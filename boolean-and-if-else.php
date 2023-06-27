<?php

echo 3<1; // false return ''
echo 3>1; // true  return  1


// falsy
// 0,null,""

// trusy
//  true 123 'abc'


$username='admin';
$password='rfgsngs';

if($username== "admin"   && $password=='123'){
    echo 'welcome';
}else{
    echo 'username or password incorrect';
}



