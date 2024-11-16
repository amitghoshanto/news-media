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


                    <div class="row">
                        <div class="col-md-6">
                            <form class="card" method="post"
                                action="<?php echo BASE_URL . 'validation/admin-category.php'; ?>">
                                <div class="card-header">
                                    <h3 class="card-title">Basic form</h3>
                                </div>
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label class="form-label required">Category Name</label>
                                        <div>
                                            <input type="text" class="form-control" placeholder="Enter Name"
                                                name="name">

                                        </div>
                                    </div>



                                </div>
                                <div class="card-footer text-end">
                                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                                </div>
                            </form>






                        </div>


                        <div class="col-md-6">
                            <?php require_once('category-list-card.php');  ?>
                        </div>
                    </div>

                    <!-- add content -->






                </div>
            </div>
            <?php require_once('../views/backend/body-footer.php');  ?>
        </div>
    </div>



    <!-- Libs JS -->
    <script src="https://preview.tabler.io/dist/libs/apexcharts/dist/apexcharts.min.js?1726507346" defer></script>
    <script src="https://preview.tabler.io/dist/libs/jsvectormap/dist/jsvectormap.min.js?1726507346" defer></script>
    <script src="https://preview.tabler.io/dist/libs/jsvectormap/dist/maps/world.js?1726507346" defer></script>
    <script src="https://preview.tabler.io/dist/libs/jsvectormap/dist/maps/world-merc.js?1726507346" defer></script>
    <!-- Tabler Core -->
    <script src="https://preview.tabler.io/dist/js/tabler.min.js?1726507346" defer></script>
    <script src="https://preview.tabler.io/dist/js/demo.min.js?1726507346" defer></script>

</body>
<?php require_once('../views/backend/footer.php');  ?>