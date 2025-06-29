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
    <title>Evergreen Coffee - Table Management</title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <!-- Header (Maintained exactly as in original) -->
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

        <!-- Side Panel (Updated with full menu from original) -->
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
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="true" data-target="#submenu-bookings" aria-controls="submenu-bookings"><i class="fas fa-fw fa-calendar-alt"></i>Bookings</a>
                                <div id="submenu-bookings" class="collapse submenu show" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="bookings-list.html">All Bookings</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link active" href="tables-management.html">Table Management</a>
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
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-users" aria-controls="submenu-users"><i class="fa fa-fw fa-users"></i>Users</a>
                                <div id="submenu-users" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="customers-list.html">Customers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="staff-management.html">Staff Accounts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="roles-permissions.html">Roles & Permissions</a>
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
                                        <li class="nav-item">
                                            <a class="nav-link" href="reports-customer.html">Customer Insights</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-settings" aria-controls="submenu-settings"><i class="fas fa-fw fa-cog"></i>Settings</a>
                                <div id="submenu-settings" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="settings-general.html">General Settings</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="settings-booking-rules.html">Booking Rules</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="settings-notifications.html">Notifications</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="settings-payments.html">Payment Gateways</a>
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

        <!-- Main Content - Table Management -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><i class="fas fa-chair mr-2"></i> Table Management</h2>
                                <p class="pageheader-text">Manage restaurant tables, capacities, and configurations.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="../index.html" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Table Management</li>
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
                                        <h5 class="mb-0">Restaurant Tables</h5>
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addTableModal">
                                            <i class="fas fa-plus mr-1"></i> Add Table
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="tablesList" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Table #</th>
                                                    <th>Name</th>
                                                    <th>Capacity</th>
                                                    <th>Location</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Window View</td>
                                                    <td>4</td>
                                                    <td>Main Dining</td>
                                                    <td><span class="badge badge-success">Available</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="Edit">
                                                            <i class="far fa-edit"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="Delete">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Patio Table</td>
                                                    <td>2</td>
                                                    <td>Outdoor</td>
                                                    <td><span class="badge badge-success">Available</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="Edit">
                                                            <i class="far fa-edit"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="Delete">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>VIP Booth</td>
                                                    <td>6</td>
                                                    <td>Private Area</td>
                                                    <td><span class="badge badge-warning">Reserved</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="Edit">
                                                            <i class="far fa-edit"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="Delete">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Bar Counter</td>
                                                    <td>1</td>
                                                    <td>Bar Area</td>
                                                    <td><span class="badge badge-success">Available</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="Edit">
                                                            <i class="far fa-edit"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="Delete">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Family Table</td>
                                                    <td>8</td>
                                                    <td>Main Dining</td>
                                                    <td><span class="badge badge-danger">Occupied</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="Edit">
                                                            <i class="far fa-edit"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="Delete">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Add Table Modal -->
                    <div class="modal fade" id="addTableModal" tabindex="-1" role="dialog" aria-labelledby="addTableModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addTableModalLabel">Add New Table</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="tableNumber">Table Number</label>
                                            <input type="number" class="form-control" id="tableNumber" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tableName">Table Name/Description</label>
                                            <input type="text" class="form-control" id="tableName" placeholder="e.g. Window View, VIP Booth">
                                        </div>
                                        <div class="form-group">
                                            <label for="tableCapacity">Capacity</label>
                                            <select class="form-control" id="tableCapacity">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>4</option>
                                                <option>6</option>
                                                <option>8</option>
                                                <option>10+</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tableLocation">Location</label>
                                            <select class="form-control" id="tableLocation">
                                                <option>Main Dining</option>
                                                <option>Outdoor</option>
                                                <option>Bar Area</option>
                                                <option>Private Room</option>
                                                <option>VIP Section</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tableStatus">Initial Status</label>
                                            <select class="form-control" id="tableStatus">
                                                <option>Available</option>
                                                <option>Reserved</option>
                                                <option>Occupied</option>
                                                <option>Maintenance</option>
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Save Table</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer -->
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

    <!-- JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    
    <script>
        $(document).ready(function() {
            // Initialize DataTable
            $('#tablesList').DataTable({
                "order": [[0, "asc"]],
                "responsive": true
            });
            
            // Initialize tooltips
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>
</html>