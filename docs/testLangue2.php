<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo "La langue du navigateur est : ".substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)."";
    ?>
  </body>
</html>
