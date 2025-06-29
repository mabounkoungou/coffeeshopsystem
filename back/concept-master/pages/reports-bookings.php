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
    <title>Evergreen Coffee - Booking Reports</title>
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
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-users" aria-controls="submenu-users"><i class="fa fa-fw fa-users"></i>Users</a>
                                <div id="submenu-users" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/pages/customers-list.html">Customers</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="true" data-target="#submenu-reports" aria-controls="submenu-reports"><i class="fas fa-fw fa-chart-bar"></i>Reports & Analytics</a>
                                <div id="submenu-reports" class="collapse submenu show" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="/pages/reports-bookings.html">Booking Reports</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/pages/reports-sales.html">Sales Reports</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="/pages/customer-feedback.html"><i class="fas fa-fw fa-comment-alt"></i>Customer Feedback</a>
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
                                <h2 class="pageheader-title"><i class="fas fa-chart-line mr-2"></i> Booking Reports</h2>
                                <p class="pageheader-text">Analyze your booking data and trends for Evergreen Coffee.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="../index.html" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Reports & Analytics</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Booking Reports</li>
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
                                        <h5 class="mb-0">All Bookings Overview</h5>
                                        <button class="btn btn-secondary btn-sm">
                                            <i class="fas fa-file-export mr-1"></i> Export Report
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="bookingsTable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Booking ID</th>
                                                    <th>Customer Name</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Table</th>
                                                    <th>Guests</th>
                                                    <th>Status</th>
                                                    <th>Notes</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>BKG001</td>
                                                    <td>Sarah Miller</td>
                                                    <td>2025-06-25</td>
                                                    <td>10:00</td>
                                                    <td>Table 3</td>
                                                    <td>2</td>
                                                    <td>Confirmed</td>
                                                    <td>Coffee meeting</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="View Details">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light text-danger" data-toggle="tooltip" title="Cancel Booking">
                                                            <i class="fas fa-times-circle"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>BKG002</td>
                                                    <td>David Chen</td>
                                                    <td>2025-06-25</td>
                                                    <td>14:30</td>
                                                    <td>Large Table 1</td>
                                                    <td>4</td>
                                                    <td>Completed</td>
                                                    <td>Work session</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="View Details">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light text-danger" data-toggle="tooltip" title="Cancel Booking">
                                                            <i class="fas fa-times-circle"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>BKG003</td>
                                                    <td>Emily White</td>
                                                    <td>2025-06-26</td>
                                                    <td>09:00</td>
                                                    <td>Window Seat 1</td>
                                                    <td>1</td>
                                                    <td>Pending</td>
                                                    <td>Quiet study</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="View Details">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light text-danger" data-toggle="tooltip" title="Cancel Booking">
                                                            <i class="fas fa-times-circle"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>BKG004</td>
                                                    <td>Mark Green</td>
                                                    <td>2025-06-27</td>
                                                    <td>16:00</td>
                                                    <td>Table 7</td>
                                                    <td>3</td>
                                                    <td>Confirmed</td>
                                                    <td>Afternoon tea</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="View Details">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light text-danger" data-toggle="tooltip" title="Cancel Booking">
                                                            <i class="fas fa-times-circle"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>BKG005</td>
                                                    <td>Olivia Brown</td>
                                                    <td>2025-06-28</td>
                                                    <td>11:00</td>
                                                    <td>Sofa Area</td>
                                                    <td>5</td>
                                                    <td>Confirmed</td>
                                                    <td>Group discussion</td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="View Details">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light text-danger" data-toggle="tooltip" title="Cancel Booking">
                                                            <i class="fas fa-times-circle"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Booking ID</th>
                                                    <th>Customer Name</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Table</th>
                                                    <th>Guests</th>
                                                    <th>Status</th>
                                                    <th>Notes</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="bookingDetailsModal" tabindex="-1" role="dialog" aria-labelledby="bookingDetailsModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="bookingDetailsModalLabel">Booking Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Booking ID:</strong> <span id="modalBookingId"></span></p>
                                    <p><strong>Customer:</strong> <span id="modalCustomerName"></span></p>
                                    <p><strong>Date:</strong> <span id="modalBookingDate"></span></p>
                                    <p><strong>Time:</strong> <span id="modalBookingTime"></span></p>
                                    <p><strong>Table:</strong> <span id="modalBookingTable"></span></p>
                                    <p><strong>Number of Guests:</strong> <span id="modalBookingGuests"></span></p>
                                    <p><strong>Status:</strong> <span id="modalBookingStatus"></span></p>
                                    <p><strong>Notes:</strong> <span id="modalBookingNotes"></span></p>
                                    </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
            // Initialize DataTable for bookingsTable
            $('#bookingsTable').DataTable({
                "order": [[0, "asc"]],
                "responsive": true
            });

            // Initialize tooltips
            $('[data-toggle="tooltip"]').tooltip();

            // Example for handling "View Details" button click (optional)
            $('#bookingsTable').on('click', '.fa-eye', function() {
                var row = $(this).closest('tr');
                var bookingId = row.find('td:eq(0)').text();
                var customerName = row.find('td:eq(1)').text();
                var date = row.find('td:eq(2)').text();
                var time = row.find('td:eq(3)').text();
                var table = row.find('td:eq(4)').text();
                var guests = row.find('td:eq(5)').text();
                var status = row.find('td:eq(6)').text();
                var notes = row.find('td:eq(7)').text();

                $('#modalBookingId').text(bookingId);
                $('#modalCustomerName').text(customerName);
                $('#modalBookingDate').text(date);
                $('#modalBookingTime').text(time);
                $('#modalBookingTable').text(table);
                $('#modalBookingGuests').text(guests);
                $('#modalBookingStatus').text(status);
                $('#modalBookingNotes').text(notes);

                $('#bookingDetailsModal').modal('show');
            });
        });
    </script>
</body>

</html>