
   


    <?php include 'include-dark/header.php'; ?>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <?php include 'include-dark/saidebar.php'; ?>
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            <?php include 'include-dark/navbar.php'; ?>
            <!-- partial -->

            <div class="page-content">

                <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
                    <div>
                        <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
                    </div>
                    <div class="d-flex align-items-center flex-wrap text-nowrap">
                        <div class="input-group flatpickr wd-200 me-2 mb-2 mb-md-0" id="dashboardDate">
                            <span class="input-group-text input-group-addon bg-transparent border-primary" data-toggle><i data-feather="calendar" class="text-primary"></i></span>
                            <input type="text" class="form-control bg-transparent border-primary" placeholder="Select date" data-input>
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-icon-text me-2 mb-2 mb-md-0">
                            <i class="btn-icon-prepend" data-feather="printer"></i>
                            Print
                        </button>
                        <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
                            <i class="btn-icon-prepend" data-feather="download-cloud"></i>
                            Download Report
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3 class="font-weight-bold mb-0">Dashboard</h3>
                            </div>
                            <div>
                                <!--  -->
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




                <!-- content-wrapper ends -->
                <?php include 'include-dark/footer.php'; ?>
       