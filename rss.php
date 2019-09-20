<?php
$str = file_get_contents("./rss.txt", "r") or die("Unable to open file!"); echo base64_encode($str);
?>