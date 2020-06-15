<?php
  $text = str_replace('zio', '***', $_GET["testo"]);
  $length = strlen($text);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Testo censurato</h1>
    <p><?php echo $text; ?></p>
    <p><?php echo $length; ?></p>
  </body>
</html>
