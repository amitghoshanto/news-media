<div class="card">
    <div class="table-responsive">
        <table class="table table-vcenter card-table">
            <thead>
                <tr>
                    <th>Category Name</th>

                    <th class="w-1" colspan="2"></th>
                </tr>
            </thead>
            <tbody>





                <?php 
                $categories = $db->query("SELECT * FROM categories");
                $categories = $categories->fetch_all(MYSQLI_ASSOC);
                
                foreach ($categories as $category) { ?>

                <tr>

                    <td><?php echo $category['name']; ?></td>

                    <td>
                        <div class="btn-list">
                            <a href="<?php echo BASE_URL . 'admin/categoy-edit.php?id='.$category['id']; ?>"
                                class="btn btn-primary">Edit</a>

                            <form action="<?php echo BASE_URL . 'validation/admin-category.php'; ?>" method="post">
                                <input type="hidden" name="category_name" value="<?php echo $category['id']; ?>">
                                <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                            </form>
                        </div>
                    </td>

                </tr>


                <?php } ?>





            </tbody>
        </table>
    </div>
</div>