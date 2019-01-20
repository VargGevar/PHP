<?
$text = "Photo gallery";
$title = "<title>$text</title>";
$h1 = "<h1>$text</h1>";
$date = date("Y");
$copyright = "<span>&#169; $date</span>";
?>

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/main.css" type="text/css" />
	<?=$title?>
</head>
<body>
  <div id="container">
  <?include "blocks/header.php"?>
  <?include "blocks/content.php"?>
  <?include "blocks/form.php"?>
  <?include "blocks/footer.php"?> 
  </div>
</body>

