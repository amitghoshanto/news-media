<pre>
<?php
require_once('../library/config.php');


if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $details = $_POST['details'];
    $category_id = $_POST['category_id'];
    $author_id = 0;
    $created_at= date('d-m-y h:i:s') ;
    $updated_at= date('d-m-y h:i:s') ;
   
   $image_url_profile = upload_image($_FILES,'profile_picture','upload/posts/');
   $image_url_cover = upload_image($_FILES,'profile_cover','upload/posts/');

    // $image_name = $_FILES['image']['name'];
    // $image_tmp = $_FILES['image']['tmp_name'];
    // $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
    // $image_name = uniqid('', true) . '.' . $image_extension;
    // $image_path = '../upload/' . $image_name;
    // move_uploaded_file($image_tmp, $image_path);
    // $image_url = 'upload/' . $image_name;



    $sql="INSERT INTO 
        posts (title, slug, details,author_id, category_id,image_url,created_at,updated_at) 
        VALUES ('$title', '$slug', '$details','$author_id', '$category_id','$image_url','$created_at','$updated_at')";






    $insert_post = $db->query($sql);
        if ($insert_post === TRUE) {
            // Success message
            $_SESSION['message'] = 'Post added successfully';
        } else {
            // Error message
            $_SESSION['message'] = 'Post not added';
        }
        header('Location: ' . ADMIN_URL . 'post-add.php');
}


if (isset($_POST['delete'])) {
    var_dump($_POST);
    $post_id = $_POST['id'];
    $query = $db->query("DELETE FROM posts WHERE id = '$post_id'");
    
    echo 'delete this';
    if ($query) {
        $_SESSION['message'] = 'Post deleted successfully';
    } else {
        $_SESSION['message'] = 'Post not deleted';
    }
    // return to the same page
    header('Location: ' . ADMIN_URL . 'post-add.php');
  // delete category
}
if (isset($_POST['update'])) {
    var_dump($_POST);
   
    $post_id = $_POST['post_id'];
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $category_id = $_POST['category_id'];
    $update_post = $db->query("UPDATE posts SET 
    title  = '$title', 
    slug = '$slug' ,
    category_id = '$category_id'
    WHERE id = '$post_id'");
    header('Location: ' . ADMIN_URL . 'post-add.php');
    
    
 

    
    
    // return to the same page
    // header('Location: ' . ADMIN_URL . 'post-add.php');
}

if (isset($_POST['image_save'])) {

    var_dump($_POST);

    echo '<hr>';
    var_dump($_FILES);
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
    $image_name = uniqid('', true) . '.' . $image_extension;

    $image_path = '../upload/' . $image_name;
    move_uploaded_file($image_tmp, $image_path);

    $image_url = 'upload/' . $image_name;


    echo $image_url;



    // $image_size = $_FILES['image']['size'];
    // $image_type = $_FILES['image']['type'];
    // $image_error = $_FILES['image']['error'];
    // $image_extension = pathinfo($image_name, PATHINFO_EXTENSION);
    // $image_extension = strtolower($image_extension);
    // $image_extension = explode('.', $image_name);
    // $image_extension = end($image_extension);
    // $image_extension = strtolower($image_extension);
    // $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
    // $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    // if (in_array($image_extension, $allowed_extensions)) {
    //     if (in_array($image_type, $allowed_types)) {
    //         if ($image_error === 0) {
    //             if ($image_size < 1000000) {
    //                 $image_name = uniqid('', true) . '.' . $image_extension;
    //                 $image_path = '../upload/' . $image_name;
    //                 move_uploaded_file($image_tmp, $image_path);
    //                 $image_url = BASE_URL . 'upload/' . $image_name;
    //                 echo $image_url;
    //             } else {
    //                 echo 'Image size is too large';
    //             }
    //         } else {
    //             echo 'Error uploading image';
    //         }
    //     } else {
    //         echo 'Invalid image type';
    //     }
    // } else {
    //     echo 'Invalid image extension';
    // }




} ?>
</pre>