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
    <title>Evergreen Coffee - Customer Feedback</title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../dashboard.php">Evergreen Coffee</a>
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
                                <a class="nav-link" href="../dashboard.php" aria-expanded="false" data-target="#submenu-dashboard" aria-controls="submenu-dashboard"><i class="fa fa-fw fa-home"></i>Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-bookings" aria-controls="submenu-bookings"><i class="fas fa-fw fa-calendar-alt"></i>Bookings</a>
                                <div id="submenu-bookings" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="bookings-list.php">All Bookings</a>
                                        </li>
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="tables-management.php">Table Management</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-menu" aria-controls="submenu-menu"><i class="fas fa-fw fa-coffee"></i>Menu & Products</a>
                                <div id="submenu-menu" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="menu-list.php">View All Items</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="menu-add.php">Add New Item</a>
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
                                            <a class="nav-link" href="customers-list.php">Customers</a>
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
                                <a class="nav-link active" href="customer-feedback.html"><i class="fas fa-fw fa-comment-alt"></i>Customer Feedback</a>
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
                                <h2 class="pageheader-title"><i class="fas fa-comment-alt mr-2"></i> Customer Feedback</h2>
                                <p class="pageheader-text">View and manage customer feedback for Evergreen Coffee.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="../dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Customer Feedback</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="mb-0">Recent Feedback</h5>
                                        <div class="dropdown">
                                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Filter
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">All Feedback</a>
                                                <a class="dropdown-item" href="#">Positive</a>
                                                <a class="dropdown-item" href="#">Negative</a>
                                                <a class="dropdown-item" href="#">Neutral</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="feedbackTable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Customer</th>
                                                    <th>Rating</th>
                                                    <th>Feedback</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>2025-06-25</td>
                                                    <td>Sarah Miller</td>
                                                    <td>
                                                        <span class="badge badge-success">5/5</span>
                                                    </td>
                                                    <td>Great coffee and excellent service!</td>
                                                    <td><span class="badge badge-light">New</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="View Details">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light text-primary" data-toggle="tooltip" title="Mark as Read">
                                                            <i class="fas fa-check"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2025-06-24</td>
                                                    <td>David Chen</td>
                                                    <td>
                                                        <span class="badge badge-warning">3/5</span>
                                                    </td>
                                                    <td>The coffee was good but the music was too loud</td>
                                                    <td><span class="badge badge-primary">Reviewed</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="View Details">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light text-primary" data-toggle="tooltip" title="Mark as Read">
                                                            <i class="fas fa-check"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2025-06-23</td>
                                                    <td>Emily White</td>
                                                    <td>
                                                        <span class="badge badge-danger">1/5</span>
                                                    </td>
                                                    <td>My order was wrong and the staff wasn't helpful</td>
                                                    <td><span class="badge badge-danger">Requires Action</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="View Details">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light text-primary" data-toggle="tooltip" title="Mark as Read">
                                                            <i class="fas fa-check"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2025-06-22</td>
                                                    <td>Mark Green</td>
                                                    <td>
                                                        <span class="badge badge-success">5/5</span>
                                                    </td>
                                                    <td>Best latte in town! Will definitely come back</td>
                                                    <td><span class="badge badge-primary">Reviewed</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="View Details">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light text-primary" data-toggle="tooltip" title="Mark as Read">
                                                            <i class="fas fa-check"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2025-06-21</td>
                                                    <td>Olivia Brown</td>
                                                    <td>
                                                        <span class="badge badge-success">4/5</span>
                                                    </td>
                                                    <td>Lovely atmosphere and friendly staff</td>
                                                    <td><span class="badge badge-primary">Reviewed</span></td>
                                                    <td>
                                                        <button class="btn btn-sm btn-outline-light" data-toggle="tooltip" title="View Details">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <button class="btn btn-sm btn-outline-light text-primary" data-toggle="tooltip" title="Mark as Read">
                                                            <i class="fas fa-check"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Feedback Summary</h5>
                                </div>
                                <div class="card-body">
                                    <div class="text-center mb-4">
                                        <h3 class="mb-1">4.2</h3>
                                        <p class="text-muted">Average Rating</p>
                                        <div class="mb-3">
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star text-warning"></i>
                                            <i class="fas fa-star-half-alt text-warning"></i>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>5 Stars</span>
                                            <span>45%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>4 Stars</span>
                                            <span>30%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>3 Stars</span>
                                            <span>15%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>2 Stars</span>
                                            <span>5%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-orange" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-between mb-1">
                                            <span>1 Star</span>
                                            <span>5%</span>
                                        </div>
                                        <div class="progress">
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 5%" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Feedback Response</h5>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="feedbackSelect">Select Feedback</label>
                                            <select class="form-control" id="feedbackSelect">
                                                <option>Sarah Miller - 5/5</option>
                                                <option>David Chen - 3/5</option>
                                                <option>Emily White - 1/5</option>
                                                <option>Mark Green - 5/5</option>
                                                <option>Olivia Brown - 4/5</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="responseText">Your Response</label>
                                            <textarea class="form-control" id="responseText" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send Response</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="feedbackDetailsModal" tabindex="-1" role="dialog" aria-labelledby="feedbackDetailsModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="feedbackDetailsModalLabel">Feedback Details</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Date:</strong> <span id="modalFeedbackDate"></span></p>
                                    <p><strong>Customer:</strong> <span id="modalFeedbackCustomer"></span></p>
                                    <p><strong>Rating:</strong> <span id="modalFeedbackRating"></span></p>
                                    <p><strong>Feedback:</strong> <span id="modalFeedbackText"></span></p>
                                    <p><strong>Status:</strong> <span id="modalFeedbackStatus"></span></p>
                                    <div class="form-group">
                                        <label for="modalResponseNotes">Internal Notes</label>
                                        <textarea class="form-control" id="modalResponseNotes" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save Changes</button>
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
            // Initialize DataTable for feedbackTable
            $('#feedbackTable').DataTable({
                "order": [[0, "desc"]],
                "responsive": true
            });

            // Initialize tooltips
            $('[data-toggle="tooltip"]').tooltip();

            // Example for handling "View Details" button click
            $('#feedbackTable').on('click', '.fa-eye', function() {
                var row = $(this).closest('tr');
                var date = row.find('td:eq(0)').text();
                var customer = row.find('td:eq(1)').text();
                var rating = row.find('td:eq(2)').text();
                var feedback = row.find('td:eq(3)').text();
                var status = row.find('td:eq(4)').text();

                $('#modalFeedbackDate').text(date);
                $('#modalFeedbackCustomer').text(customer);
                $('#modalFeedbackRating').text(rating);
                $('#modalFeedbackText').text(feedback);
                $('#modalFeedbackStatus').text(status);

                $('#feedbackDetailsModal').modal('show');
            });
        });
    </script>
</body>
</html>