<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once 'vendor/autoload.php';

use Kunnu\Dropbox\Dropbox;
use Kunnu\Dropbox\DropboxApp;

//Configure Dropbox Application
$app = new DropboxApp("fxlpux2ww32buxs", "1dfxqb0pw5ruaek");

//Configure Dropbox service
$dropbox = new Dropbox($app);
//DropboxAuthHelper
$authHelper = $dropbox->getAuthHelper();
$callbackUrl = "http://localhost/drop";
$authUrl = $authHelper->getAuthUrl($callbackUrl);
$authUrl = $authHelper->getAuthUrl($callbackUrl);
echo "<a href='" . $authUrl . "'>Log in with Dropbox</a>";
if (isset($_GET['code']) && isset($_GET['state'])) {
    //Bad practice! No input sanitization!
    $code = $_GET['code'];
    $state = $_GET['state'];

    //Fetch the AccessToken
    $accessToken = $authHelper->getAccessToken($code, $state);
  // echo $accessToken->getToken();
}
echo "<pre>";
print_r($_SESSION);
