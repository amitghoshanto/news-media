<?php require_once('../library/config.php');  ?>
<?php require_once('../views/backend/header.php');  ?>

<body>
    <script src="https://preview.tabler.io/dist/js/demo-theme.min.js?1726507346"></script>
    <div class="page">
        <!-- Sidebar -->
        <?php require_once('../views/backend/sidebar.php');  ?>
        <div class="page-wrapper">
            <!-- Page header -->
            <?php require_once('../views/backend/page-header.php');  ?>
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-cards">

                        <div class="col-md-12">
                            <form class="card" enctype="multipart/form-data" method="post"
                                action="<?php echo BASE_URL.'validation/admin-post.php'; ?>">
                                <div class="row">
                                    <div class="col-md-6">


                                        <div class=" card-header">
                                            <h3 class="card-title">Post add form</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label">Enter Title</label>

                                                <div>
                                                    <input type="text" class="form-control" name="title"
                                                        required="required" placeholder="Enter Title">

                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Slug</label>

                                                <div>
                                                    <input type="text" class="form-control" name="slug"
                                                        placeholder="Enter Slug">

                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">category Select</label>

                                                <div>
                                                    <select class="form-select" name="category_id">
                                                        <option>Select Category</option>
                                                        <?php 
                                            $category =$db->query("SELECT * FROM categories");
                                            $categories = $category->fetch_all(MYSQLI_ASSOC);
                                            foreach ($categories as $category) {
                                                ?>

                                                        <option value="<?php echo $category['id']; ?>">

                                                            <?php echo $category['name']; ?></option>



                                                        <?php }
                                            ?>
                                                    </select>



                                                </div>
                                            </div>



                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control" name="details" value="details"
                                                    rows="5"></textarea>
                                            </div>


                                        </div>


                                    </div>



                                    <!-- image store form start -->

                                    <div class="col-md-6">

                                        <div class="card-body">
                                            <h3 class="card-title text-primary">Upload Image</h3>
                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="file" class="form-control" accept=".jpg,.jpeg,.png"
                                                        name="profile_picture" multiple>
                                                    <small class="form-hint">Drag & drop files here or click to
                                                        browse.</small>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-12">
                                                    <input type="file" class="form-control" accept=".jpg,.jpeg,.png"
                                                        name="profile_cover" multiple>
                                                    <small class="form-hint">Drag & drop files here or click to
                                                        browse.</small>
                                                </div>
                                            </div>



                                        </div>


                                    </div>

                                    <!-- image store form end -->

                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <div class="card-footer text-end">
                                                <button type="submit" class="btn btn-primary"
                                                    name="submit">Submit</button>
                                            </div>


                                        </div>

                                    </div>


                                </div>

                            </form>

                        </div>





                        <div class=" col-md-12">
                            <?php require_once('post-list-card.php');  ?>
                        </div>
                    </div>
















                </div>
            </div>



            <?php require_once('../views/backend/body-footer.php');  ?>
        </div>
    </div>



    <!-- Libs JS -->
    <script src="https://preview.tabler.io/dist/libs/apexcharts/dist/apexcharts.min.js?1726507346" defer>
    </script>
    <script src="https://preview.tabler.io/dist/libs/jsvectormap/dist/jsvectormap.min.js?1726507346" defer>
    </script>
    <script src="https://preview.tabler.io/dist/libs/jsvectormap/dist/maps/world.js?1726507346" defer>
    </script>
    <script src="https://preview.tabler.io/dist/libs/jsvectormap/dist/maps/world-merc.js?1726507346" defer>
    </script>
    <!-- Tabler Core -->
    <script src="https://preview.tabler.io/dist/js/tabler.min.js?1726507346" defer></script>
    <script src="https://preview.tabler.io/dist/js/demo.min.js?1726507346" defer></script>

</body>
<?php require_once('../views/backend/footer.php');  ?>