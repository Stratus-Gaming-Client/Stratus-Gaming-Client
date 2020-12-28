<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php if($successful) { echo "$gameName Successfully Installed"; } else { echo "Installation of $gameName failed"; } ?></title>
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
    <?php
    $gameName = $_POST["gameName"];
    $gameSrc = $_POST["gameSrc"];
    $zip = new ZipArchive;
    $successful = null;

    if ($zip->open($gameSrc) === TRUE) {

      $zip->extractTo("/games/$gameName/");
      $zip->close();
      echo "Successfully Installed $gameName.";
      $successful = true;
    } else {
      echo "Installation of $gameName failed.";
      $successful = false;
    }
    ?>
  </body>
</html>
