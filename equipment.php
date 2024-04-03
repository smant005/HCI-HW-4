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

                


                

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Select Equipment</h4>
                                <p class="card-title-desc"></p>
                            </div>
                            <div class="card-body p-4">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label class="form-label">Equipment Name</label>
                                                <select class="form-select">
                                                    <option>Select</option>
                                                    <option>Basketball</option>
                                                    <option>Volleyball</option>
                                                    <option>Badminton rackets</option>
                                                    <option>Badminton Shuttle</option>
                                                    <option>Throwball</option>
                                                    <option>Table tennis rackets</option>
                                                    <option>Table tennis balls</option>
                                                    <option>Squash rackets</option>
                                                    <option>Squash balls</option>
                                                    <option>Hockey stick</option>
                                                    <option>Hockey puck</option>
                                                    <option>Football</option>
                                                    <option>Tennis rackets</option>
                                                    <option>Tennis balls</option>
                                                    <option>Baseball bat</option>
                                                    <option>Rugby ball</option>
                                                </select>

                                            </div>
                                            
                                            

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mt-3 mt-lg-0">
                                            <div class="mb-3">
                                                <label class="form-label">Quantity</label>
                                                <select class="form-select">
                                                    <option>Select</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                </select>

                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="example-datetime-local-input" class="form-label">&#8205; </label>
                                                <a href="tahnk-you.php"><input class="form-control btn btn-primary" type="button" value="Reserve"></a>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
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