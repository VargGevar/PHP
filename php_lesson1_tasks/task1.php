<?php

$a = 5;
$b = '05';

var_dump($a == $b);       // Почему true? Потому что php приводит значение переменной b к числу и сравнивает числовые значение величин a и b

var_dump((int)'012345');     // Почему 12345? Потому что php приводит строку к целому числу (ноль отбрасывается).

var_dump((float)123.0 === (int)123.0); // Почему false? Потому что тут строгое сравнение и типы данных не совпадают.

var_dump((int)0 === (int)'hello, world'); // Почему true? Потому что тут php приводит все к целым числам, а поскольку в строке справа нету чисел сначала, получается 0;

//

?>