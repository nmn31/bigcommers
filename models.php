<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
header('Access-Control-Max-Age: 1000');
header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
ECHO "RESULT";
ECHO "BR";
print_r($_GET);
ECHO "BR";
//print_r(['1', '2', '3', '4', '5', '6', '7' ]);
?>
