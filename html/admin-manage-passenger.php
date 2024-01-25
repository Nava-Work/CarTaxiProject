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
                            <!-- Sample Data (Replace this with data from your MySQL database) -->
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>johndoe</td>
                                <td>********</td>
                                <td>johndoe@example.com</td>
                                <td>123-456-7890</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">Update</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            <!-- Add more rows for additional passengers -->
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
