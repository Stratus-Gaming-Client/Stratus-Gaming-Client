<?php
  $username = $_POST["username"];
  $profileImgSrc = $_POST["profile-image-source"];
  $file = fopen("profile-details.json", "w") or die("Unable to open file!");
  $content = "{profile:{'ImgSrc':'$profileImgSrc','name':'$username'}}";
  fwrite($file, $content);
  fclose($file);
?>
<script type="text/javascript">window.location.replace("http://app.stratus.ga/")</script>
