<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<head>
   <title>Dashboard | RecWell</title>
   <?php include 'layouts/head.php'; ?>
   <?php include 'layouts/head-style.php'; ?>
</head>
<?php include 'layouts/body.php'; ?>
<!-- Begin page -->
<style>
   .dot {
   width: 8px;
   height: 8px;
   border-radius: 50%;
   display: inline-block;
   margin-left:10px;
   }
</style>
<div id="layout-wrapper">
<?php include 'layouts/menu.php'; ?>
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <!-- start page title -->
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0 font-size-18">Indoor Sport Spcaes</h4>
               </div>
            </div>
         </div>
         <!-- end page title -->
         <div class="row">
            <div class="col-xl-3 col-sm-6">
               <div class="card">
                  <div class="card-body">
                     <div class="d-flex align-items-center">
                        <div class="avatar-lg">
                           <div class="avatar-title bg-soft-primary text-primary display-4 m-0 rounded-circle">
                              <i class="bx bxs-basketball"></i>
                           </div>
                        </div>
                        <div class="flex-1 ms-3">
                           <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Basketball Court</a><span class="dot bg-success"></span></h5>
                           <p class="text-muted mb-0">Recreation Center</p>
                        </div>
                     </div>
                     <div class="mt-3 pt-1">
                        <!-- Green dot for "Available Today" -->
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-clock font-size-15 align-middle pe-2 text-primary"></i>
                           Next: 04/12/2024, 10 AM - 12 PM
                        </p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-map-marker font-size-15 align-middle pe-2 text-primary"></i>
                           Court 1
                        </p>
                     </div>
                  </div>
                  <div class="btn-group" role="group">
                     <a href="availability.php"><button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-calendar-alt me-1"></i> Book Now</button></a>
                     <button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-info-circle me-1"></i> Details</button>
                  </div>
               </div>
               <!-- end card -->
            </div>
            <div class="col-xl-3 col-sm-6">
               <div class="card">
                  <div class="card-body">
                     <div class="d-flex align-items-center">
                        <div class="avatar-lg">
                           <div class="avatar-title bg-soft-primary text-primary display-4 m-0 rounded-circle">
                              <i class="bx bxs-basketball"></i>
                           </div>
                        </div>
                        <div class="flex-1 ms-3">
                           <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Basketball Court</a><span class="dot bg-danger"></span></h5>
                           <p class="text-muted mb-0">Recreation Center</p>
                        </div>
                     </div>
                     <div class="mt-3 pt-1">
                        <!-- Green dot for "Available Today" -->
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-clock font-size-15 align-middle pe-2 text-primary"></i>
                        Next: 4/20/24, 2 PM - 4 PM
                        </p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-map-marker font-size-15 align-middle pe-2 text-primary"></i>
                           Court 2
                        </p>
                     </div>
                  </div>
                  <div class="btn-group" role="group">
                     <a href="availability.php"><button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-calendar-alt me-1"></i> Book Now</button></a>
                     <button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-info-circle me-1"></i> Details</button>
                  </div>
               </div>
               <!-- end card -->
            </div>
            <div class="col-xl-3 col-sm-6">
               <div class="card">
                  <div class="card-body">
                     <div class="d-flex align-items-center">
                        <div class="avatar-lg">
                           <div class="avatar-title bg-soft-primary text-primary display-4 m-0 rounded-circle">
                              <i class="bx bxs-basketball"></i>
                           </div>
                        </div>
                        <div class="flex-1 ms-3">
                           <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Basketball Court</a><span class="dot bg-success"></span></h5>
                           <p class="text-muted mb-0">Recreation Center</p>
                        </div>
                     </div>
                     <div class="mt-3 pt-1">
                        <!-- Green dot for "Available Today" -->
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-clock font-size-15 align-middle pe-2 text-primary"></i>
                        Next: 9/5/24, 9 AM - 11 AM
                        </p>
                        <p class="text-muted mb-0 mt-2"><i class="mdi mdi-map-marker font-size-15 align-middle pe-2 text-primary"></i>
                           Court 3
                        </p>
                     </div>
                  </div>
                  <div class="btn-group" role="group">
                     <a href="availability.php"><button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-calendar-alt me-1"></i> Book Now</button></a>
                     <button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-info-circle me-1"></i> Details</button>
                  </div>
               </div>
               <!-- end card -->
            </div>
            
            <div class="col-xl-3 col-sm-6">
               <div class="card">
                  <div class="card-body">
                        <div class="d-flex align-items-center">
                           <div class="avatar-lg">
                              <div class="avatar-title bg-soft-primary text-primary display-4 m-0 rounded-circle">
                                    <i class="bx bxs-basketball"></i>
                              </div>
                           </div>
                           <div class="flex-1 ms-3">
                              <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Badminton Court</a><span class="dot bg-success"></span></h5>
                              <p class="text-muted mb-0">Recreation Center</p>
                           </div>
                        </div>
                        <div class="mt-3 pt-1">
                           <!-- Green dot for "Available Today" -->
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-clock font-size-15 align-middle pe-2 text-primary"></i>
                              Next: 9/5/24, 10 AM - 12 PM
                           </p>
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-map-marker font-size-15 align-middle pe-2 text-primary"></i>
                              Court 1
                           </p>
                        </div>
                  </div>
                  <div class="btn-group" role="group">
                     <a href="availability.php"><button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-calendar-alt me-1"></i> Book Now</button></a>
                     <button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-info-circle me-1"></i> Details</button>
                  </div>
               </div>
               <!-- end card -->
            </div>
            <div class="col-xl-3 col-sm-6">
               <div class="card">
                  <div class="card-body">
                        <div class="d-flex align-items-center">
                           <div class="avatar-lg">
                              <div class="avatar-title bg-soft-primary text-primary display-4 m-0 rounded-circle">
                                    <i class="bx bxs-basketball"></i>
                              </div>
                           </div>
                           <div class="flex-1 ms-3">
                              <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Badminton Court</a><span class="dot bg-success"></span></h5>
                              <p class="text-muted mb-0">Recreation Center</p>
                           </div>
                        </div>
                        <div class="mt-3 pt-1">
                           <!-- Green dot for "Available Today" -->
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-clock font-size-15 align-middle pe-2 text-primary"></i>
                              Next: 9/5/24, 10 AM - 12 PM
                           </p>
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-map-marker font-size-15 align-middle pe-2 text-primary"></i>
                              Court 2
                           </p>
                        </div>
                  </div>
                  <div class="btn-group" role="group">
                     <a href="availability.php"><button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-calendar-alt me-1"></i> Book Now</button></a>
                     <button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-info-circle me-1"></i> Details</button>
                  </div>
               </div>
               <!-- end card -->
            </div>
            <div class="col-xl-3 col-sm-6">
               <div class="card">
                  <div class="card-body">
                        <div class="d-flex align-items-center">
                           <div class="avatar-lg">
                              <div class="avatar-title bg-soft-primary text-primary display-4 m-0 rounded-circle">
                                    <i class="bx bxs-basketball"></i>
                              </div>
                           </div>
                           <div class="flex-1 ms-3">
                              <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Throw Ball</a><span class="dot bg-success"></span></h5>
                              <p class="text-muted mb-0">Recreation Center</p>
                           </div>
                        </div>
                        <div class="mt-3 pt-1">
                           <!-- Green dot for "Available Today" -->
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-clock font-size-15 align-middle pe-2 text-primary"></i>
                              Next: 9/18/24, 10 AM - 12 PM
                           </p>
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-map-marker font-size-15 align-middle pe-2 text-primary"></i>
                              Court 1
                           </p>
                        </div>
                  </div>
                  <div class="btn-group" role="group">
                     <a href="availability.php"><button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-calendar-alt me-1"></i> Book Now</button></a>
                     <button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-info-circle me-1"></i> Details</button>
                  </div>
               </div>
               <!-- end card -->
            </div>
            <div class="col-xl-3 col-sm-6">
               <div class="card">
                  <div class="card-body">
                        <div class="d-flex align-items-center">
                           <div class="avatar-lg">
                              <div class="avatar-title bg-soft-primary text-primary display-4 m-0 rounded-circle">
                                    <i class="bx bxs-basketball"></i>
                              </div>
                           </div>
                           <div class="flex-1 ms-3">
                              <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Throw Ball</a><span class="dot bg-success"></span></h5>
                              <p class="text-muted mb-0">Recreation Center</p>
                           </div>
                        </div>
                        <div class="mt-3 pt-1">
                           <!-- Green dot for "Available Today" -->
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-clock font-size-15 align-middle pe-2 text-primary"></i>
                              Next: 9/5/24, 10 AM - 12 PM
                           </p>
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-map-marker font-size-15 align-middle pe-2 text-primary"></i>
                              Court 2
                           </p>
                        </div>
                  </div>
                  <div class="btn-group" role="group">
                     <a href="availability.php"><button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-calendar-alt me-1"></i> Book Now</button></a>
                     <button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-info-circle me-1"></i> Details</button>
                  </div>
               </div>
               <!-- end card -->
            </div>
            <div class="col-xl-3 col-sm-6">
               <div class="card">
                  <div class="card-body">
                        <div class="d-flex align-items-center">
                           <div class="avatar-lg">
                              <div class="avatar-title bg-soft-primary text-primary display-4 m-0 rounded-circle">
                                    <i class="bx bxs-basketball"></i>
                              </div>
                           </div>
                           <div class="flex-1 ms-3">
                              <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Table Tennis</a><span class="dot bg-success"></span></h5>
                              <p class="text-muted mb-0">Recreation Center</p>
                           </div>
                        </div>
                        <div class="mt-3 pt-1">
                           <!-- Green dot for "Available Today" -->
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-clock font-size-15 align-middle pe-2 text-primary"></i>
                              Next: 9/5/24, 10 AM - 12 PM
                           </p>
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-map-marker font-size-15 align-middle pe-2 text-primary"></i>
                              Court 1
                           </p>
                        </div>
                  </div>
                  <div class="btn-group" role="group">
                     <a href="availability.php"><button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-calendar-alt me-1"></i> Book Now</button></a>
                     <button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-info-circle me-1"></i> Details</button>
                  </div>
               </div>
               <!-- end card -->
            </div>
            <div class="col-xl-3 col-sm-6">
               <div class="card">
                  <div class="card-body">
                        <div class="d-flex align-items-center">
                           <div class="avatar-lg">
                              <div class="avatar-title bg-soft-primary text-primary display-4 m-0 rounded-circle">
                                    <i class="bx bxs-basketball"></i>
                              </div>
                           </div>
                           <div class="flex-1 ms-3">
                              <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Table Tennis</a><span class="dot bg-success"></span></h5>
                              <p class="text-muted mb-0">Recreation Center</p>
                           </div>
                        </div>
                        <div class="mt-3 pt-1">
                           <!-- Green dot for "Available Today" -->
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-clock font-size-15 align-middle pe-2 text-primary"></i>
                              Next: 9/5/24, 10 AM - 12 PM
                           </p>
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-map-marker font-size-15 align-middle pe-2 text-primary"></i>
                              Court 2
                           </p>
                        </div>
                  </div>
                  <div class="btn-group" role="group">
                     <a href="availability.php"><button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-calendar-alt me-1"></i> Book Now</button></a>
                     <button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-info-circle me-1"></i> Details</button>
                  </div>
               </div>
               <!-- end card -->
            </div>
            <div class="col-xl-3 col-sm-6">
               <div class="card">
                  <div class="card-body">
                        <div class="d-flex align-items-center">
                           <div class="avatar-lg">
                              <div class="avatar-title bg-soft-primary text-primary display-4 m-0 rounded-circle">
                                    <i class="bx bxs-basketball"></i>
                              </div>
                           </div>
                           <div class="flex-1 ms-3">
                              <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Squash Ball</a><span class="dot bg-success"></span></h5>
                              <p class="text-muted mb-0">Recreation Center</p>
                           </div>
                        </div>
                        <div class="mt-3 pt-1">
                           <!-- Green dot for "Available Today" -->
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-clock font-size-15 align-middle pe-2 text-primary"></i>
                              Next: 9/5/24, 10 AM - 12 PM
                           </p>
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-map-marker font-size-15 align-middle pe-2 text-primary"></i>
                              Court 1
                           </p>
                        </div>
                  </div>
                  <div class="btn-group" role="group">
                     <a href="availability.php"><button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-calendar-alt me-1"></i> Book Now</button></a>
                     <button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-info-circle me-1"></i> Details</button>
                  </div>
               </div>
               <!-- end card -->
            </div>
            <div class="col-xl-3 col-sm-6">
               <div class="card">
                  <div class="card-body">
                        <div class="d-flex align-items-center">
                           <div class="avatar-lg">
                              <div class="avatar-title bg-soft-primary text-primary display-4 m-0 rounded-circle">
                                    <i class="bx bxs-basketball"></i>
                              </div>
                           </div>
                           <div class="flex-1 ms-3">
                              <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Squash Ball</a><span class="dot bg-success"></span></h5>
                              <p class="text-muted mb-0">Recreation Center</p>
                           </div>
                        </div>
                        <div class="mt-3 pt-1">
                           <!-- Green dot for "Available Today" -->
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-clock font-size-15 align-middle pe-2 text-primary"></i>
                              Next: 9/5/24, 10 AM - 12 PM
                           </p>
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-map-marker font-size-15 align-middle pe-2 text-primary"></i>
                              Court 2
                           </p>
                        </div>
                  </div>
                  <div class="btn-group" role="group">
                     <a href="availability.php"><button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-calendar-alt me-1"></i> Book Now</button></a>
                     <button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-info-circle me-1"></i> Details</button>
                  </div>
               </div>
               <!-- end card -->
            </div>
            <div class="col-xl-3 col-sm-6">
               <div class="card">
                  <div class="card-body">
                        <div class="d-flex align-items-center">
                           <div class="avatar-lg">
                              <div class="avatar-title bg-soft-primary text-primary display-4 m-0 rounded-circle">
                                    <i class="bx bxs-basketball"></i>
                              </div>
                           </div>
                           <div class="flex-1 ms-3">
                              <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Ice Hockey</a><span class="dot bg-success"></span></h5>
                              <p class="text-muted mb-0">Recreation Center</p>
                           </div>
                        </div>
                        <div class="mt-3 pt-1">
                           <!-- Green dot for "Available Today" -->
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-clock font-size-15 align-middle pe-2 text-primary"></i>
                              Next: 9/5/24, 10 AM - 12 PM
                           </p>
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-map-marker font-size-15 align-middle pe-2 text-primary"></i>
                              Court 1
                           </p>
                        </div>
                  </div>
                  <div class="btn-group" role="group">
                     <a href="availability.php"><button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-calendar-alt me-1"></i> Book Now</button></a>
                     <button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-info-circle me-1"></i> Details</button>
                  </div>
               </div>
               <!-- end card -->
            </div>
            <div class="col-xl-3 col-sm-6">
               <div class="card">
                  <div class="card-body">
                        <div class="d-flex align-items-center">
                           <div class="avatar-lg">
                              <div class="avatar-title bg-soft-primary text-primary display-4 m-0 rounded-circle">
                                    <i class="bx bxs-basketball"></i>
                              </div>
                           </div>
                           <div class="flex-1 ms-3">
                              <h5 class="font-size-15 mb-1"><a href="#" class="text-dark">Ice Hockey</a><span class="dot bg-success"></span></h5>
                              <p class="text-muted mb-0">Recreation Center</p>
                           </div>
                        </div>
                        <div class="mt-3 pt-1">
                           <!-- Green dot for "Available Today" -->
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-clock font-size-15 align-middle pe-2 text-primary"></i>
                              Next: 9/5/24, 10 AM - 12 PM
                           </p>
                           <p class="text-muted mb-0 mt-2"><i class="mdi mdi-map-marker font-size-15 align-middle pe-2 text-primary"></i>
                              Court 2
                           </p>
                        </div>
                  </div>
                  <div class="btn-group" role="group">
                     <a href="availability.php"><button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-calendar-alt me-1"></i> Book Now</button></a>
                     <button type="button" class="btn btn-outline-light text-truncate"><i class="bx bx-info-circle me-1"></i> Details</button>
                  </div>
               </div>
               <!-- end card -->
            </div>

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