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
                                <h4 class="card-title">Book Appointment</h4>
                                <p class="card-title-desc"></p>
                            </div>
                            <div class="card-body p-4">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">First Name</label>
                                                <input class="form-control" type="text" value="Sujith Varma" id="example-text-input" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">UIN</label>
                                                <input class="form-control" type="text" value="01259337" id="example-text-input" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Duration</label>
                                                <select class="form-select">
                                                    <option>Select</option>
                                                    <option>30 Mins</option>
                                                    <option>60 Mins</option>
                                                    <option>120 Mins</option>
                                                </select>
                                            </div>
                                            
                                            

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mt-3 mt-lg-0">
                                            <div class="mb-3">
                                                <label for="example-text-input" class="form-label">Last Name</label>
                                                <input class="form-control" type="text" value="Sujith Varma" id="example-text-input" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="example-datetime-local-input" class="form-label">Start Date and Time</label>
                                                <input class="form-control" type="datetime-local" value="2019-08-19T13:45:00" id="example-datetime-local-input">
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="example-datetime-local-input" class="form-label">&#8205; </label>
                                                <a href="equipment.php"><input class="form-control btn btn-primary" type="button" value="Next"></a>
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