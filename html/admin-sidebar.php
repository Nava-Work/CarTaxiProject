<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>

<aside class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div class="sidebar-menu">
                    <li <?php echo ($currentPage == 'admin-dashboard.php') ? 'class="active"' : ''; ?>>
                        <a href="admin-dashboard.php"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li <?php echo ($currentPage == 'admin-manage-passenger.php') ? 'class="active"' : ''; ?>>
                        <a href="driver-availability.php"><i class="fas fa-user"></i> Manage Passengers</a>
                    </li>
                    <li <?php echo ($currentPage == 'admin-manage-driver.php') ? 'class="active"' : ''; ?>>
                        <a href="driver-view-rate.php"><i class="fas fa-car"></i> Manage Drivers</a>
                    </li>
                    <li <?php echo ($currentPage == 'admin-manage-reserve.php') ? 'class="active"' : ''; ?>>
                        <a href="driver-view-reserve.php"><i class="fas fa-calendar"></i> Manage Reservations</a>
                    </li>
                    <li <?php echo ($currentPage == 'admin-settings.php') ? 'class="active"' : ''; ?>>
                        <a href="driver-view-reserve.php"><i class="fas fa-cogs"></i> Manage Settings</a>
                    </li>
                    <li <?php echo ($currentPage == 'admin-view-rate.php') ? 'class="active"' : ''; ?>>
                        <a href="driver-view-reserve.php"><i class="fas fa-star"></i> Manage Ratings</a>
                    </li>
                    <li <?php echo ($currentPage == 'admin-report.php') ? 'class="active"' : ''; ?>>
                        <a href="driver-view-reserve.php"><i class="fas fa-chart-bar"></i> Manage Reports</a>
                    </li>
                    <li <?php echo ($currentPage == 'admin-teleoperator.php') ? 'class="active"' : ''; ?>>
                        <a href="driver-view-reserve.php"><i class="fas fa-phone"></i> Manage Tele-Phone Operations</a>
                    </li>
                </ul>
            </div>
        </div>
    </aside>