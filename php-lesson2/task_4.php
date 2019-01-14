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

function mathOperation($arg1, $arg2, $operation) {
  switch ($operation) {
    case 'sum':
      echo "Сумма двух чисел равна: ".sum($arg1, $arg2);
      break;
    case 'diff':
      echo "Разность двух чисел равна: ".diff($arg1, $arg2);
      break;
    case 'mul':
      echo "Произведение двух чисел равно: ".mul($arg1, $arg2);
      break;
    case 'div':
      if ($arg2 != 0) {
        echo "Частное двух чисел равно: ".round(div($arg1, $arg2),3);
        break;
      } else 
        echo "Ошибка!";
  }
}

mathOperation($arg1, $arg2, "div");
