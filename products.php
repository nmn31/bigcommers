<?php
$http_origin = $_SERVER['HTTP_ORIGIN'];

$allowed_domains = array(
  'https://store-hnsgk43w3q.mybigcommerce.com/',
  'https://store-hnsgk43w3q.mybigcommerce.com/',
);

if (in_array($http_origin, $allowed_domains))
{
    header("Access-Control-Allow-Origin: $http_origin");
}
print_r(['1','2','3','4','5','6','7']);
?>
