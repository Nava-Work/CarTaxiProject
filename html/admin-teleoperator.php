<?php
require 'database-config.php';

// Execute the database query to retrieve all telephone_operators
$sql = "SELECT * FROM telephone_operator;";
$output = mysqli_query($conn, $sql);
?>

<?php include 'top.php' ?>
    <div class="main-wrapper">

        <?php include 'admin-header.php'; ?>

        <!-- Sidebar Start -->
        <?php include 'admin-sidebar.php'; ?>
        <!-- Sidebar End -->

        <!-- Page Content Start -->
        <form action = "delete.php" method="post">
        <div class="page-wrapper">
            <div class="container mt-0">
                <h2 class="mb-4">Telephone Operator Management</h2>
                <div class="table-responsive">
                <!-- <form method="post" action="">
                    <button class="btn btn-warning btn-sm" value="Search All" name="searchAll">Search All</button>
                </form> -->
 
                
                    <table id="passengerTable" class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <!-- <th>Password</th> -->
                                <th>Email</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // if(isset($_POST["searchAll"]))
                            // {
                                $sql = "SELECT * FROM telephone_operator;";
                                $output = mysqli_query($conn, $sql);
                                while($r = mysqli_fetch_array($output))
                                {
                                    echo "<tr>";
                                    echo "<td>" . $r['book_id'] . "</td>";
                                    echo "<td>" . $r['passenger_name'] . "</td>";
                                    echo "<td>" . $r['contact_no'] . "</td>";
                                    //echo "<td>" . $r['password'] . "</td>";
                                    echo "<td>" . $r['pickup_location'] . "</td>";
                                    echo "<td>" . $r['dropoff_location'] . "</td>";
                                    echo "<td>" . $r['booked_time'] . "</td>";
                                    echo "<td>" . $r['pay_amount'] . "</td>";
                                    echo "<td>" . $r['pay_status'] . "</td>";
                                    echo "<td>";
                                    //echo "<a href='edit-passenger.php?pass_id={$r['pass_id']}' class='btn btn-warning btn-sm'>Update</a>";
                                    //echo "<button class='btn btn-warning btn-sm'>Update</button>";
                                    //echo "<form method='post' action='delete.php' style='display:inline;'>";
                                    //echo "<input type='hidden'  name='pass_id' value='{$r['pass_id']}'>";
                                    //echo "<button type='submit' class='btn btn-danger btn-sm' name='delete'>Delete</button>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            //}
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </form>
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
