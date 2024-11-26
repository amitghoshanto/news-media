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
date_default_timezone_set('Asia/Dhaka');

function upload_image($image,$form_name, $folder) {
    $image_name = $image[$form_name]['name'];
    $image_tmp = $image[$form_name]['tmp_name'];
    $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
    $image_name = uniqid('', true) . '.' . $image_extension;
    $image_path = '../'.$folder . $image_name;
    move_uploaded_file($image_tmp, $image_path);
    $image_url = $folder . $image_name;
    return $image_url;

}