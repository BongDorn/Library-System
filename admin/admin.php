<?php
session_start();
include('../conn/conn.php');

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    // Fetch the user's name from the database
    $stmt = $conn->prepare("SELECT `name` FROM `tbl_user` WHERE `tbl_user_id` = :user_id");
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch();
        $user_name = $row['name'];
    }

?>

    <?php include '../includes/header.php'; ?>

    <div class="container-scroller">

        <?php include '../includes/saidebar.php'; ?>
        <!-- partial -->
        <div class="container-fluid pt-5 ">
            <!-- partial:partials/_settings-panel.html -->
            <?php include '../includes/topbar.php'; ?>
            <!-- partial -->



            <!-- first row starts here -->
            <!-- <div class="main-panel"> -->

                <!-- partial -->
                <div class="content-wrapper pd-0 ">
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

                <!-- </div> -->
                <!-- content-wrapper ends -->
                <!-- partial -->
            </div>


        </div>
    </div>
    <!-- content-wrapper ends -->
    <?php include '../includes/footer.php'; ?>

<?php
} else {
    header("Location:");
}

?>