<?php
  $dir = 'img/'; 
  $files = scandir($dir); 
  echo "<div id='content'>"; 
  for ($i = 0; $i < count($files); $i++) { 
    if (($files[$i] != ".") && ($files[$i] != "..")) { 
      echo "<div class='imageItem'>"; 
      $path = $dir.$files[$i]; 
      echo "<a href='$path'>";
      echo "<img src='$path' alt='' width='300' />";
      echo "</a>";
      echo "</div>"; 
    }
  }
  echo "</div>"; 
?>







