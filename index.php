<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title><?php echo $language["User_Grid"]; ?> | Recwell - Admin & Dashboard Template</title>

    <?php include 'layouts/head.php'; ?>

    <?php include 'layouts/head-style.php'; ?>

</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?php
                $maintitle = "Dashobard";
                $title = "Spaces";
                ?>
                <?php include 'layouts/breadcrumb.php'; ?>
                <!-- end page title -->


                

                <div class="row">
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img position-relative">
                                            <img src="assets/images/indoor.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="d-flex justify-content-between align-items-end mt-4">
                                            
                                                <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Indoor Sports</a></h5>
                                                
                                                <a href="spaces.php"><button type="button" class="btn btn-success waves-effect  mt-2 waves-light">
                                                            Book Now
                                                        </button></a>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img position-relative">
                                            <img src="assets/images/outdoor.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="d-flex justify-content-between align-items-end mt-4">
                                            
                                                <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Outdoor Sports</a></h5>
                                                
                                                <a href="outdoor_spaces.php"><button type="button" class="btn btn-success waves-effect  mt-2 waves-light">
                                                            Book Now
                                                        </button></a>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="product-img position-relative">
                                            <img src="assets/images/studio.png" alt="" class="img-fluid mx-auto d-block">
                                        </div>
                                        <div class="d-flex justify-content-between align-items-end mt-4">
                                            
                                                <h5 class="mb-3 text-truncate"><a href="javascript: void(0);" class="text-dark">Studios</a></h5>
                                                
                                                        <a href="studios.php"><button type="button" class="btn btn-success waves-effect  mt-2 waves-light">
                                                            Book Now
                                                        </button></a>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                            

                </div>
                <!-- end row -->




            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<?php include 'layouts/right-sidebar.php'; ?>

<?php include 'layouts/vendor-scripts.php'; ?>


</body>

</html>