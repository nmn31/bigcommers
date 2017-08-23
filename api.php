<?php
header('Content-Type: application/json');

$request = json_decode($_REQUEST, true);
print($request);
?>
