<?php

echo $arg1 = rand(-10,10)."\n";
echo $arg2 = rand(-10,10)."<br>";

function sum($arg1, $arg2) {
  return $arg1 + $arg2;
}

function diff($arg1, $arg2) {
  return $arg1 - $arg2;
}

function mul($arg1, $arg2) {
  return $arg1 * $arg2;
}

function div($arg1, $arg2) {
  return $arg1 / $arg2;
} 

echo "Сумма двух чисел равна: ".sum($arg1, $arg2)."<br>";
echo "Разность двух чисел равна: ".diff($arg1, $arg2)."<br>";
echo "Произведение двух чисел равно: ".mul($arg1, $arg2)."<br>";
if ($arg2 != 0) {
  echo "Частное двух чисел равно: ".round(div($arg1, $arg2),3);
} else
  echo "Ошибка!";




 