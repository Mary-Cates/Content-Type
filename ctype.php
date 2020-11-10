<?php
$url = $_GET[url];

header('Content-Type: image/jpeg');

readfile($url);
?>