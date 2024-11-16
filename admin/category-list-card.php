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
                <tr>
                    <td>Test name</td>

                    <td>
                        <div class="btn-list">
                            <a href="<?php echo BASE_URL . 'admin/categoy-edit.php?id=1'; ?>" class="btn btn-primary">Edit</a>

                            <form action="<?php echo BASE_URL . 'validation/admin-category.php'; ?>" method="post">
                                <input type="hidden" name="category_id" value="1">
                                <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                            </form>
                        </div>
                    </td>

                </tr>


            </tbody>
        </table>
    </div>
</div>