<?php

echo $a = rand(-10, 10)." ";
echo $b = rand(-10, 10)."<br>";

if ($a >= 0 && $b >= 0) {
  echo "Разность двух чисел равна: ".($a - $b);
} else if ($a < 0 && $b < 0) {
  echo "Произведение двух чисел равно: ".($a * $b);
} else
  echo "Сумма двух чисел равна: ".($a + $b);