    <?php
    $num = [1, 2, 3, 3];
    $str = ['a', 'a', 'v', 'a', 'b'];

    echo array_sum($num) . ' sum   ';
    echo array_product($num) . '  multiply';

    print_r(array_unique($str));

    // for ($i = 0; $i < count($num); $i++) {
    //     echo $num[$i];
    // }


    foreach ($num as $key => $value) {
        echo $value;
    }



    
