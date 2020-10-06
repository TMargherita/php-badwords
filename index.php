
<?php
  $testo = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ";
  $badword = $_GET["badword"];
  $testoCorretto = str_replace($badword, "***", $testo);
  $lunghezza = strlen($testoCorretto);
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>Badwords</title>
  </head>
  <body>
    <div class="wrapper">
      <h1>Badwords</h1>
      <h2><?php echo $testoCorretto; ?></h2>
      <h3><?php echo $lunghezza; ?></h3>
    </div>

  </body>
</html>
