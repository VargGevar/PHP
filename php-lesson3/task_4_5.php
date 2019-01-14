<?php

$symbols = ["а"=>"a","б"=>"b","в"=>"v","г"=>"g","д"=>"d",
            "е"=>"e","ё"=>"yе","ж"=>"zh","з"=>"z","и"=>"i",
            "й"=>"y","к"=>"k","л"=>"l","м"=>"m","н"=>"n",
            "о"=>"o","п"=>"p","р"=>"r","с"=>"s","т"=>"t","у"=>"u",
            "ф"=>"f","х"=>"kh","ц"=>"ts","ч"=>"ch","ш"=>"sh",
            "щ"=>"shch","ы"=>"y","э"=>"ie","ю"=>"yu","я"=>"ya"];

$str = "новая строка, или просто какой-то текст";

function strReplace(array $symbols, $subject) {
  return str_replace(array_keys($symbols), array_values($symbols), $subject);
}

echo $newStr = strReplace($symbols, $str)."<br>";

echo str_replace(" ", "_", $newStr);

?>