<?php

// Определить  количество  цифр,  меньших  5,  используемых  при  записи натурального числа N.

$n = 16742;
// по остатку от деления разбиваем число на цифры
$firstNum = ($n/10000)%10;
$secondNum = ($n/1000)%10;
$thirdNum = ($n/100)%10;
$fourthNum = ($n/10)%10;
$fivthNum = $n%10;

// создаем счётчик
$count = 0;

if ($firstNum < 5) {
  $count++;
}
if ($secondNum < 5) {
  $count++;
}
if ($thirdNum < 5) {
  $count++;
}
if ($fourthNum < 5) {
  $count++;
}
if ($fivthNum < 5) {
  $count++;
}

echo $count;
