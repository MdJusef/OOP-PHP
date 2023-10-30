<?php
session_start();
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASSWORD','');
define('DB_DATABASE','php_db');

define('SITE_URL','http://localhost/OOPPHP/');

include_once('DatabaseConnection.php');
$db = new DatabaseConnection();

function redirect($message,$page){
    $redirectTo = SITE_URL.$page;
    $_SESSION['message'] = "$message";
    header("location: $redirectTo");
    exit(0);
}
function base_url($slug)
{
    echo SITE_URL.$slug;
}
function validateInput($dbcon,$input){
    return mysqli_real_escape_string($dbcon,$input);
}