
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../assets/vendors/jquery-bar-rating/css-stars.css" />
    <link rel="stylesheet" href="../assets/vendors/font-awesome/css/font-awesome.min.css" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/demo_1/style.css" />
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
  </head>
  <body>
  <div class="container-scroller">
<!--  -->
  <div class="container-fluid">
     <!-- partial:partials/_sidebar.html -->
     <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
              <div class="nav-profile-image">
                <!-- Profile -->
                <img src="" alt="profile" />
                <!--change to offline or busy as needed-->
                
              </div>
              <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                <span class="font-weight-semibold mb-1 mt-2 text-center">
                 <!-- echo $this->session->userdata('user_name') -->
                 <h4> <?= $user_name ?></h4>
                </span>
                <span class="text-secondary icon-sm text-center">
                  <!-- echo $this->session->userdata('user_name') -->
                </span>
              </div>
            </a>
          </li>
          <li class="pt-2 pb-1">
            <span class="nav-item-head">Admin</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-compass-outline menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Clietn</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="borrowers.php">Borrowers</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">Mng Books</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Issue Books</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Issued Books</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basics" aria-expanded="false" aria-controls="ui-basics">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Mng Notes</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basics">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">View Notes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">Add/Edite Note</a>
                </li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basicse" aria-expanded="false" aria-controls="ui-basicse">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Mng classification</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basicse">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Mng Author</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">Mng Publisher</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Mng Tag</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Basic classF.</a>
                </li>
                <li class="nav-item">
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basics" aria-expanded="false" aria-controls="ui-basics">
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              <span class="menu-title">Mng Academics</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basics">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">Mng Course</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">Mng Course Year</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">Mng Working Year</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/icons/mdi.html">
              <i class="mdi mdi-contacts menu-icon"></i>
              <span class="menu-title">Mng Subscriber</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
              <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              <span class="menu-title">Mng Notice</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
              <i class="mdi mdi-chart-bar menu-icon"></i>
              <span class="menu-title">Mng Permission</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Mng Enquiry</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Mng Slides</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Mng Reports</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
              <i class="mdi mdi-table-large menu-icon"></i>
              <span class="menu-title">Mng Setting</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../logout.php">
              <i class="mdi mdi-exit-large menu-icon"></i>
              <span class="menu-title">logout</span>
            </a>
          </li>
        </ul>
      </nav>

       <div class="main-panel">
  
      <!-- partial -->     
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h3 class="font-weight-bold mb-0">Dashboard</h3>
                </div>
                <div>
                    <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                      <i class="mdi mdi-plus btn-icon-prepend"></i>
                      Add New
                    </button>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Course</p>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <h4 class="mb-0 mb-md-2 mb-xl-3">10</h4>
                    <p class="mb-0">Total</p>
                  </div>
                  <div class="progress progress-md">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Student</p>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <h4 class="mb-0 mb-md-2 mb-xl-3">10</h4>
                    <p class="mb-0">Total</p>
                  </div>
                  <div class="progress progress-md">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title text-md-center text-xl-left">Teacher</p>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <h4 class="mb-0 mb-md-2 mb-xl-3">10</h4>
                    <p class="mb-0">Total</p>
                  </div>
                  <div class="progress progress-md">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h3 class="font-weight-bold mb-0">Course</h3>
                </div>
                <div>
                  <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                    <i class="mdi mdi-plus btn-icon-prepend"></i>
                    Add New
                  </button>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Course List</h4>
                  <div class="table-responsive">
                    <table id="example" class="table table-striped">
                      <thead>
                        <tr>
                          <th>Course ID</th>
                          <th>Course Name</th>
                          <th>Course Description</th>
                          <th>Course Duration</th>
                          <th>Course Price</th>
                          <th>Course Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>Web Design</td>
                            <td>Web Design</td>
                            <td>1 Year</td>
                            <td>1000</td>
                            <td><img src="https://via.placeholder.com/150" alt=""></td>
                            <td>
                              <a href="#" class="btn btn-primary btn-icon-text btn-rounded">
                                <i class="mdi mdi-pencil btn-icon-prepend"></i>
                                Edit
                              </a>
                              <a href="#" class="btn btn-danger btn-icon-text btn-rounded">
                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                                Delete
                              </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Web Development</td>
                            <td>Web Development</td>
                            <td>1 Year</td>
                            <td>1000</td>
                            <td><img src="https://via.placeholder.com/150" alt=""></td>
                            <td>
                              <a href="#" class="btn btn-primary btn-icon-text btn-rounded">
                                <i class="mdi mdi-pencil btn-icon-prepend"></i>
                                Edit
                              </a>
                              <a href="#" class="btn btn-danger btn-icon-text btn-rounded">
                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                                Delete
                              </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Web Development</td>
                            <td>Web Development</td>
                            <td>1 Year</td>
                            <td>1000</td>
                            <td><img src="https://via.placeholder.com/150" alt=""></td>
                            <td>
                              <a href="#" class="btn btn-primary btn-icon-text btn-rounded">
                                <i class="mdi mdi-pencil btn-icon-prepend"></i>
                                Edit
                              </a>
                              <a href="#" class="btn btn-danger btn-icon-text btn-rounded">
                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                                Delete
                              </a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Web Development</td>
                            <td>Web Development</td>
                            <td>1 Year</td>
                            <td>1000</td>
                            <td><img src="https://via.placeholder.com/150" alt=""></td>
                            <td>
                              <a href="#" class="btn btn-primary btn-icon-text btn-rounded">
                                <i class="mdi mdi-pencil btn-icon-prepend"></i>
                                Edit
                              </a>
                              <a href="#" class="btn btn-danger btn-icon-text btn-rounded">
                                <i class="mdi mdi-delete btn-icon-prepend"></i>
                                Delete
                              </a>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="mdi mdi-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
        <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../assets/vendors/jquery-bar-rating/jquery.barrating.min.js"></script>
    <script src="../assets/vendors/chart.js/Chart.min.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.resize.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.categories.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.fillbetween.js"></script>
    <script src="../assets/vendors/flot/jquery.flot.stack.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>

