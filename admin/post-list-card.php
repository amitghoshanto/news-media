<?php require_once('../library/config.php');  ?>
<?php require_once('../views/backend/header.php');  ?>
<div class="card mt-4">
    <div class="card-header">Post Lists</div>
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>

                <tr>
                    <th>id</th>
                    <th>Author Name</th>
                    <th>Category Name</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Time </th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php 
                                      $posts = $db->query("SELECT * FROM posts order by id desc");
                                      $posts = $posts->fetch_all(MYSQLI_ASSOC);
                                      foreach($posts as $post)
                                      {
                     ?>
                    <td> <?php echo $post['id']; ?> </td>
                    <td> <?php echo $post['author_id']; ?> </td>


                    <td> <?php 
                                        $category =$post['category_id'];
                                        $category = $db->query("SELECT * FROM categories WHERE id = '$category'");
                                        $category = $category->fetch_all(MYSQLI_ASSOC);
                                        echo $category[0]['name'];
                                        
                                        
                                        ?></td>



                    <td> <?php echo $post['title']; ?> </td>
                    <td> <img src="<?php echo BASE_URL.$post['image_url']; ?>" width="100px" height="100px"></td>
                    <td> Create Time : <?php echo $post['created_at']; ?>
                        <br> Update Time : <?php echo $post['updated_at']; ?>
                    </td>



                    <td>
                        <div class="btn-list">
                            <a href="<?php echo BASE_URL . 'admin/post-edit.php?id='.$post['id']; ?>"
                                class="btn btn-primary">Edit</a>

                            <form action="<?php echo BASE_URL . 'validation/admin-post.php?id='.$post['id']; ?>"
                                method="post" onclick="return confirm('Are you sure?')">
                                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">

                                <button class="btn btn-danger" name="delete">Delete</button>
                            </form>
                        </div>
                    </td>




                </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>