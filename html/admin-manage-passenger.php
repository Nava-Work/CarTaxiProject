<?php
require 'database-config.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>City Taxi - Cab Service</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <?php include 'css.php'; ?>
</head>
<body>
    <div class="main-wrapper">

        <?php include 'admin-header.php'; ?>

        <!-- Sidebar Start -->
        <?php include 'admin-sidebar.php'; ?>
        <!-- Sidebar End -->

        <!-- Page Content Start -->
        <div class="page-wrapper">
            <div class="container mt-0">
                <h2 class="mb-4">Passenger Management</h2>
                <div class="table-responsive">
                <form method="post" action="">
                    <button class="btn btn-warning btn-sm" value="Search All" name="searchAll">Search All</button>
                </form>

                    <table id="passengerTable" class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(isset($_POST["searchAll"]))
                            {
                                $sql = "SELECT * FROM passenger;";
                                $output = mysqli_query($conn, $sql);
                                while($r = mysqli_fetch_array($output))
                                {
                                    echo "<tr>";
                                    echo "<td>" . $r['pass_id'] . "</td>";
                                    echo "<td>" . $r['name'] . "</td>";
                                    echo "<td>" . $r['username'] . "</td>";
                                    echo "<td>" . $r['password'] . "</td>";
                                    echo "<td>" . $r['email'] . "</td>";
                                    echo "<td>" . $r['phone_number'] . "</td>";
                                    echo "<td>";
                                    echo "<button class='btn btn-warning btn-sm'>Update</button>";
                                    echo "<button class='btn btn-danger btn-sm'>Delete</button>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <!-- Page Content End -->

        <?php include 'script.php'; ?>

        <!-- DataTables Initialization Script -->
        <script>
            $(document).ready(function () {
                $('#passengerTable').DataTable();
            });
        </script>
    </body>
</html>
