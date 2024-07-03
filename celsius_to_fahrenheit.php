<?php

$celsius = 32;
$fahrenheit = ($celsius * 9/5) + 32;
$result = number_format($fahrenheit, 2);

echo "{$celsius} degrees Celsius is equal to {$result} degrees Fahrenheit.";