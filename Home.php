<?php

$string = 'Hello       world';

echo "1 -".strlen($string).'<br>'.PHP_EOL;
echo "2 -".trim($string).'<br>'.PHP_EOL;
echo "3 -".ltrim($string).'<br>'.PHP_EOL;
echo "4 -".rtrim($string).'<br>'.PHP_EOL;
echo "5 -".str_word_count($string).'<br>'.PHP_EOL;
echo "6 -".strrev($string).'<br>'.PHP_EOL;
echo "7 -".strtoupper($string).'<br>'.PHP_EOL;
echo "8 -".strtolower($string).'<br>'.PHP_EOL;
echo "9 -".ucfirst('hello').'<br>'.PHP_EOL;
echo "10 -".lcfirst('HELLO').'<br>'.PHP_EOL;
echo "12 -".strpos($string , 'world').'<br>'.PHP_EOL;
echo "13 -".stripos($string , 'world').'<br>'.PHP_EOL;
echo "14 -".substr($string , 8).'<br>'.PHP_EOL;
echo "15 -".str_replace('world','PHP',$string).'<br>'.PHP_EOL;
echo "16 -".str_ireplace('world','PHP','parth').'<br>'.PHP_EOL;


$name= 'parth';
$hight = 30;
$salary = 20000;
$a = 2;
echo gettype($name).'<br>'.PHP_EOL;
echo gettype($hight).'<br>'.PHP_EOL;
echo gettype($salary).'<br>'.PHP_EOL;
echo gettype($a).'<br>'.PHP_EOL;ss

var_dump(isset($name));
var_dump(isset($number));

?>

