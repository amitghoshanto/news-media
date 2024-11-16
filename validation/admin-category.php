<?php
require_once('../library/config.php');
var_dump($_POST);

if (isset($_POST['save'])) {
    echo 'save this';

    // return to the same page
    header('Location: ' . BASE_URL . 'admin/category-add.php');
}

if (isset($_POST['update'])) {
    echo 'update this';
}

if (isset($_POST['delete'])) {
    echo 'delete this';
}
