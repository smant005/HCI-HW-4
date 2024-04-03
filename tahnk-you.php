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
                     <div class="my-5">
                        <div class="container">
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="text-center mb-5">
                                    <h4 class="text-uppercase mt-5">Your reservation is confirmed !!</h4>
                                    <div class="card-body col-lg-4 mx-auto">
    <h5 class="card-title text-center">Booking Confirmation</h5>
    <p class="card-text text-center">Your booking has been confirmed. Details are as follows:</p>
    <ul class="list-group text-center">
        <li class="list-group-item">Court: Basketball Court</li>
        <li class="list-group-item">Location: Recreation Center</li>
        <li class="list-group-item">Date & Time: 4/20/24, 2 PM - 4 PM</li>
    </ul>
</div>

                                    <div class="mt-5 text-center">
                                       <a class="btn btn-primary waves-effect waves-light" href="index.php">Make another reservation</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- end container -->
                     </div>
                  </div>
               </div>
               <!-- end col -->
            </div>
            <!-- end row -->
         </div>
         <!-- container-fluid -->
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