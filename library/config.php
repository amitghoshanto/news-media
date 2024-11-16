<?php

session_start();
error_reporting(E_ALL ^ E_NOTICE);
ini_set('display_errors', 1);

define('BASE_URL', 'http://news-media.test/');
define('ADMIN_URL', 'http://news-media.test/admin/');


$db=mysqli_connect(hostname:"localhost",username:"root",password:"Admin1234",database:"newspaper");
$db->set_charset("utf8");

if($db->connect_error){
    die("Connection failed: " . $db->connect_error);
}