<?php

$num1 = 4;
$num2 = 5;
$num3 = 6;

if($num1 > $num2 && $num1 > $num3):
    echo "Largest Number is : {$num1}";
elseif ($num2 > $num1 && $num2 > $num3):
    echo "Largest Number is : {$num2}";
else:
    echo "Largest Number is : {$num3}";
endif;