<?php
session_start();
if (!isset($_SESSION['username']) || $_SESSION['role'] != 'student') {
    header("Location: ../index.php");
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Student</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">School</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse right" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h3>Welcome <?php echo $_SESSION['username']; ?></h3>
                            <p>Role: <?php echo $_SESSION['role']; ?></p>
                            <h3>User Panel</h3>
                            <p>View and enroll in courses</p>
                        </div>
                    </div>
            </div>

            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <h1>Users List</h1>
                        <?php $_SESSION['role'] == 'admin' ? '<a href="add-user.php" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add User</a>' : '' ?>

                        <table class="table table-striped">
                            <tr>
                                <th col="">ID</th>
                                <th>Full Name</th>
                                <th>Username</th>
                                <th>Email</th>
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
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='5'>No users found</td></tr>";
                            }
                            
                            
                            ?>

                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>