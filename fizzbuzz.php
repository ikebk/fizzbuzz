<?php

/**
* Write a program that prints the numbers from 1 to 100.
* But for multiples of three print "Fizz" instead of the number and for the multiples of five print "Buzz".
* For numbers which are multiples of both three and five print "FizzBuzz".
*/
const FIZZ = 3;
const BUZZ = 5;
$number_set = range(1, 100);

// Solution 1:
foreach($number_set as $number) {
  $output = $number. PHP_EOL;
  if ($number%FIZZ === 0) { $output = 'Fizz => '. $number . PHP_EOL; }
  if ($number%BUZZ === 0) { $output = 'Buzz => '. $number . PHP_EOL; }
  if ($number%BUZZ === 0 && $number%FIZZ === 0) { $output = 'FizzBuzz => '. $number . PHP_EOL; }
  // print $output;
}


// Solution 2:
$results = array_map(function($number) {
  $output = $number;
  if ($number%FIZZ === 0) { $output = 'Fizz => '. $number;}
  if ($number%BUZZ === 0) { $output = 'Buzz => '. $number; }
  if ($number%BUZZ === 0 && $number%FIZZ === 0) { $output = 'FizzBuzz => '. $number; }
  return $output;

}, $number_set);

// print implode(PHP_EOL, $results);


// Solution 3:
function buzz($num) {
  if ($num%BUZZ === 0) { return 'Buzz'; }
  return null;
}

function fizz($num) {
  if ($num%FIZZ === 0) { return 'Fizz'; }
  return null;
}

$results = array_map(function($num) {
  $arr = [];
  $arr[] = fizz($num);
  $arr[] = buzz($num);
  return array_filter($arr)? implode('',$arr) : $num;
}, $number_set);

// print implode(PHP_EOL,$results) .PHP_EOL;
