<?php
require_once('../library/config.php');


if (isset($_POST['save'])) {
    echo 'save this';
    $catagory_name =$_POST['name'];
    $check_category = $db->query("SELECT * FROM categories WHERE name = '$catagory_name'");
    $check_category = $check_category->fetch_all(MYSQLI_ASSOC);
    if (count($check_category)>0){
        $_SESSION['message'] = 'Category already exists';
    }
    else{
        $insert_category = $db->query("INSERT INTO categories (name) VALUES ('$catagory_name')");
        if ($insert_category) {
            $_SESSION['message'] = 'Category added successfully';
        } else {
            $_SESSION['message'] = 'Category not added';
        }
    } 
    // return to the same page
    header('Location: ' . ADMIN_URL . 'category-add.php');
}

if (isset($_POST['update'])) {
    echo 'update this';

    var_dump($_POST);
    $category_id = $_POST['category_id'];
    $catagory_name =$_POST['name'];
    $update_category = $db->query("UPDATE categories SET name = '$catagory_name' WHERE id = '$category_id'");
    if ($update_category) {
        $_SESSION['message'] = 'Category updated successfully';
    } else {
        $_SESSION['message'] = 'Category not updated';
    }

  
  // return to the same page
    header('Location: ' . ADMIN_URL . 'category-add.php');
    
    
}

if (isset($_POST['delete'])) {
    echo 'delete this';
}