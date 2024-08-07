<?php
include('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $role = $_POST['role'];



    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO users (name, email, username, password,role) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $username, $hashed_password, $role);

    if ($stmt->execute()) {
        header("Location: mng-users.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
}

?>




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

                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h1>Users List</h1>
                            <a href="add-user.php" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add User</a>
                            <table class="table table-striped">
                                <tr>
                                    <th col="">ID</th>
                                    <th>Full Name</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Date_Create</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                <?php
                                include('../config.php');
                                $sql = "SELECT id, name, username, email,  role, at_create FROM users";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['username'] . "</td>";
                                        echo "<td>" . $row['email'] . "</td>";

                                        echo "<td>" . $row['role'] . "</td>";
                                        echo "<td>" . $row['at_create'] . "</td>";


                                        echo "<td>
                                                    <button class='btn btn-danger' onclick='confirmDelete(" . $row['id'] . ")'>Delete</button>
                                                    <button class='btn btn-primary'  data-bs-toggle='modal' data-bs-target='#exampleModaledify' onclick='editUser(" . $row['id'] . ")'>Edit</button></td>";

                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>No users found</td></tr>";
                                }
                                $conn->close();
                                ?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-12 stretch-card grid-margin">
                    <div class="card">
                        <div class="card-body">

                            <!-- Button trigger modal -->


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog model-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="row" method="POST" action="">
                                                <div class="col-6 form-group">
                                                    <label for="">Full Name</label>
                                                    <input type="text" name="name" class="form-control" placeholder="Enter Full Name" required>
                                                </div>

                                                <div class="col-6 form-group">
                                                    <label for="">Username</label>
                                                    <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label for="">Email</label>
                                                    <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label for="">Role</label>
                                                    <select name="role" class="form-control" required>
                                                        <option value="">Select</option>
                                                        <option value="admin">Admin</option>
                                                        <option value="Student">Student</option>

                                                    </select>
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label for="">Password</label>
                                                    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
                                                </div>
                                                <div class="col-6 form-group">
                                                    <label for="">Password</label>
                                                    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                                                </div>

                                                <div class="col-3">


                                                    <button type="submit" class="btn btn-primary">Add User</button>
                                                </div>
                                            </form>


                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>
                </div>
            </div>






            <div class="row">

                <div class="col-xl-12 stretch-card grid-margin">
                    <div class="card">
                        <div class="card-body ">
                            <div class="modal fade" id="exampleModaledify" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update User</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <?php if (isset($user)) : ?>
                                                <form action="" method="POST">
                                                    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                                    <label for="name">Name:</label>
                                                    <input type="text" id="name" name="name" value="<?php echo $user['name']; ?>" required><br>

                                                    <label for="username">Username:</label>
                                                    <input type="text" id="username" name="username" value="<?php echo $user['username']; ?>" required><br>

                                                    <label for="role">Role:</label>
                                                    <select id="role" name="role" required>
                                                        <option value="admin" <?php echo $user['role'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
                                                        <option value="student" <?php echo $user['role'] == 'student' ? 'selected' : ''; ?>>Student</option>
                                                    </select><br>

                                                    <button type="submit">Update User</button>
                                                </form>

                                            <?php endif; ?>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!--  -->


                <script>
                    function confirmDelete(id) {
                        if (confirm("Are you sure you want to delete this user?")) {
                            window.location.href = "mng-users.php?id=" + id;
                        }
                    }
                </script>
                <script>
                    function updateUser(id) {
                        window.location.href = "mng-users.php?id=" + id;
                    }
                </script>
                <?php

                include('../config.php');

                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $sql = "DELETE FROM users WHERE id = $id";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "<script>alert('User deleted successfully');</script>";
                        echo "<script>window.location.href = 'mng-users.php';</script>";
                    } else {
                        echo "<script>alert('Failed to delete user');</script>";
                    }
                }
                // Fetch all users
                $sql = "SELECT id, name, username, role FROM users";
                $result = $conn->query($sql);
                if (isset($_GET['id'])) {
                    $id = intval($_GET['id']);

                    // Fetch user data based on ID
                    $stmt = $conn->prepare("SELECT id, name, username, role FROM users WHERE id = ?");
                    $stmt->bind_param("i", $id);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $user = $result->fetch_assoc();
                    $stmt->close();
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $username = $_POST['username'];
                    $role = $_POST['role'];

                    // Use prepared statements to prevent SQL injection
                    $sql = "UPDATE users SET name = ?, username = ?, role = ? WHERE id = ?";
                    $result = $conn->query($sql);
                    if ($result) {
                        echo "<script>alert('User updated successfully');</script>";
                        echo "<script>window.location.href = 'mng-users.php';</script>";
                    } else {
                        echo "<script>alert('Failed to update user');</script>";
                    }
                }
                $conn->close();
                ?>
                <!-- content-wrapper ends -->
                <?php include 'include-dark/footer.php'; ?>