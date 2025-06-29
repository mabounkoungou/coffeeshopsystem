<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <title>Evergreen Coffee - Staff Management</title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../index.html">Evergreen Coffee</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="../assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Admin Functions
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../index.html" aria-expanded="false" data-target="#submenu-dashboard" aria-controls="submenu-dashboard"><i class="fa fa-fw fa-home"></i>Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-bookings" aria-controls="submenu-bookings"><i class="fas fa-fw fa-calendar-alt"></i>Bookings</a>
                                <div id="submenu-bookings" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="bookings-list.html">All Bookings</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="bookings-calendar.html">Calendar View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="bookings-add.html">Add New Booking</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="tables-management.html">Table Management</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-menu" aria-controls="submenu-menu"><i class="fas fa-fw fa-coffee"></i>Menu & Products</a>
                                <div id="submenu-menu" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="menu-list.html">View All Items</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="menu-add.html">Add New Item</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="menu-categories.html">Categories</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="inventory-management.html">Inventory (Optional)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="promotions.html">Promotions & Discounts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="true" data-target="#submenu-users" aria-controls="submenu-users"><i class="fa fa-fw fa-users"></i>Users</a>
                                <div id="submenu-users" class="collapse submenu show" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="customers-list.html">Customers</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-reports" aria-controls="submenu-reports"><i class="fas fa-fw fa-chart-bar"></i>Reports & Analytics</a>
                                <div id="submenu-reports" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="reports-bookings.html">Booking Reports</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="reports-sales.html">Sales Reports</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="customer-feedback.html"><i class="fas fa-fw fa-comment-alt"></i>Customer Feedback</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><i class="fas fa-users-cog mr-2"></i> Staff Management</h2>
                                <p class="pageheader-text">View and manage staff accounts and roles.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="../index.html" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Staff Management</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">All Staff Accounts</h5>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addStaffModal">
                                            <i class="fas fa-user-plus mr-1"></i> Add Staff
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="staffTable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Staff ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>STAFF001</td>
                                                    <td>Emily White</td>
                                                    <td>emily.w@example.com</td>
                                                    <td>Manager</td>
                                                    <td>Active</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="Edit">
                                                            <i class="far fa-edit"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="View Details">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>STAFF002</td>
                                                    <td>David Lee</td>
                                                    <td>david.l@example.com</td>
                                                    <td>Barista</td>
                                                    <td>Active</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="Edit">
                                                            <i class="far fa-edit"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="View Details">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>STAFF003</td>
                                                    <td>Sarah Chen</td>
                                                    <td>sarah.c@example.com</td>
                                                    <td>Cashier</td>
                                                    <td>Active</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="Edit">
                                                            <i class="far fa-edit"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="View Details">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>STAFF004</td>
                                                    <td>Michael Green</td>
                                                    <td>michael.g@example.com</td>
                                                    <td>Chef</td>
                                                    <td>Inactive</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="Edit">
                                                            <i class="far fa-edit"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="View Details">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Staff ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="addStaffModal" tabindex="-1" role="dialog" aria-labelledby="addStaffModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addStaffModalLabel">Add New Staff Member</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="staffName">Full Name</label>
                                            <input type="text" class="form-control" id="staffName" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="staffEmail">Email address</label>
                                            <input type="email" class="form-control" id="staffEmail" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="staffPhone">Phone Number (Optional)</label>
                                            <input type="text" class="form-control" id="staffPhone">
                                        </div>
                                        <div class="form-group">
                                            <label for="staffRole">Role</label>
                                            <select class="form-control" id="staffRole" required>
                                                <option value="">Select Role</option>
                                                <option value="Manager">Manager</option>
                                                <option value="Barista">Barista</option>
                                                <option value="Cashier">Cashier</option>
                                                <option value="Chef">Chef</option>
                                                <option value="Server">Server</option>
                                                <option value="Administrator">Administrator</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="staffPassword">Password</label>
                                            <input type="password" class="form-control" id="staffPassword" required>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Save Staff</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            Evergreen Coffee © 2025
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-right">
                            <a href="#" class="text-secondary">Terms</a> |
                            <a href="#" class="text-secondary">Privacy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable for staffTable
            $('#staffTable').DataTable({
                "order": [[0, "asc"]],
                "responsive": true
            });

            // Initialize tooltips
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>