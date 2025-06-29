<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="../assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="../assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <title>Evergreen Coffee - Bookings List</title>
</head>

<body>
    <div class="modal fade" id="editBookingModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <form>
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Booking</h5>
          <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="editBookingId">
          <div class="form-group">
            <label>Booking Code</label>
            <input type="text" class="form-control" id="editBookingCode">
          </div>
          <div class="form-group">
            <label>Customer Name</label>
            <input type="text" class="form-control" id="editCustomerName">
          </div>
          <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" id="editBookingDate">
          </div>
          <div class="form-group">
            <label>Time</label>
            <input type="time" class="form-control" id="editBookingTime">
          </div>
          <div class="form-group">
            <label>Guests</label>
            <input type="number" class="form-control" id="editGuests">
          </div>
          <div class="form-group">
            <label>Table</label>
            <input type="text" class="form-control" id="editTableNumber">
          </div>
          <div class="form-group">
            <label>Status</label>
            <select class="form-control" id="editStatus">
              <option>Pending</option>
              <option>Confirmed</option>
              <option>Cancelled</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" id="saveEditBookingBtn">Save Changes</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
    <div class="dashboard-main-wrapper">
        <!-- Header (Maintained exactly as in original) -->
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

        <!-- Side Panel (Maintained exactly as in original) -->
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
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="true" data-target="#submenu-bookings" aria-controls="submenu-bookings"><i class="fas fa-fw fa-calendar-alt"></i>Bookings</a>
                                <div id="submenu-bookings" class="collapse submenu show" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="bookings-list.php">All Bookings</a>
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
                                            <a class="nav-link" href="../pages/menu-list.php">View All Items</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../pages/menu-add.php">Add New Item</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../pages/menu-categories.html">Categories</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../pages/inventory-management.html">Inventory (Optional)</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../pages/promotions.html">Promotions & Discounts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-users" aria-controls="submenu-users"><i class="fa fa-fw fa-users"></i>Users</a>
                                <div id="submenu-users" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../pages/customers-list.php">Customers</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-reports" aria-controls="submenu-reports"><i class="fas fa-fw fa-chart-bar"></i>Reports & Analytics</a>
                                <div id="submenu-reports" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="../pages/reports-bookings.html">Booking Reports</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="../pages/reports-sales.html">Sales Reports</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>
                            
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!--edit-->
        <!-- Edit Booking Modal -->



        <!-- Main Content Area - Converted to Bookings List -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><i class="fas fa-calendar-alt mr-2"></i> Bookings Management</h2>
                                <p class="pageheader-text">View and manage all restaurant reservations and bookings.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="../dashboard.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">All Bookings</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bookings Summary Cards -->
                     <?php
                     require 'connection.php';
 // or your DB config path

// Get today's date
$today = date('Y-m-d');

// Count today's bookings
$stmt = $pdo->prepare("SELECT COUNT(*) FROM bookings WHERE DATE(booking_date) = :today");
$stmt->execute(['today' => $today]);
$todaysBookingCount = $stmt->fetchColumn();
?>

                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Today's Bookings</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1"><?php echo $todaysBookingCount; ?></h1>
                                    </div>
                                    <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                        <span><i class="fa fa-fw fa-arrow-up"></i></span><span>12%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <?php
require 'connection.php'; // database connection

// Count all bookings
$stmt = $pdo->query("SELECT COUNT(*) FROM bookings");
$totalBookings = $stmt->fetchColumn();
?>

                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Total Bookings</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1"><?php echo $totalBookings; ?></h1>
                                    </div>
                                    <div class="metric-label d-inline-block float-right text-warning font-weight-bold">
                                        <span><i class="fa fa-fw fa-sum"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <?php
require 'connection.php'; // your DB connection file

// Count pending bookings
$stmt = $pdo->prepare("SELECT COUNT(*) FROM bookings WHERE status = :status");
$stmt->execute(['status' => 'Pending']);
$pendingBookings = $stmt->fetchColumn();
?>

                                    <h5 class="text-muted">VIP Reservations</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1"><?php echo $pendingBookings; ?></h1>
                                    </div>
                                    <div class="metric-label d-inline-block float-right text-info font-weight-bold">
                                        <span><i class="fa fa-fw fa-clock"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="text-muted">Avg. Party Size</h5>
                                    <div class="metric-value d-inline-block">
                                        <h1 class="mb-1">3.2</h1>
                                    </div>
                                    <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                        <span><i class="fa fa-fw fa-users"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Bookings Table -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header bg-white">
                                    <div class="row align-items-center">
                                        <div class="col-6">
                                            All Reservations
                                        </div>
                                        <div class="col-6 text-right">
                                            <a href="add_booking.php" class="btn btn-primary btn-sm">
                                                <i class="fas fa-plus mr-1"></i> New Booking
                                            </a>
                                            <div class="btn-group ml-2">
                                                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown">
                                                    Filter
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">This Week</a>
                                                    <a class="dropdown-item" href="#">Upcoming</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#">Confirmed</a>
                                                    <a class="dropdown-item" href="#">Pending</a>
                                                    <a class="dropdown-item" href="#">Cancelled</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </h5>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered first" id="bookingsTable">
                                            <thead class="bg-light">
                                                <tr>
                                                    <th>Booking ID</th>
                                                    <th>Customer</th>
                                                    <th>Date/Time</th>
                                                    <th>Guests</th>
                                                    <th>Table</th>
                                                    <th>Status</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <?php
require 'connection.php'; // Make sure the path is correct

$stmt = $pdo->query("SELECT * FROM bookings ORDER BY booking_date ASC, booking_time ASC");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $badgeClass = [
        'Confirmed' => 'badge-success',
        'Pending'   => 'badge-warning',
        'Cancelled' => 'badge-danger'
    ][$row['status']] ?? 'badge-secondary';

    echo "<tr>
        <td>{$row['booking_code']}</td>
        <td>{$row['customer_name']}</td>
        <td>
            <div>" . date('M d, Y', strtotime($row['booking_date'])) . "</div>
            <div class='text-muted small'>" . date('H:i', strtotime($row['booking_time'])) . "</div>
        </td>
        <td>{$row['guests']}</td>
        <td>{$row['table_number']}</td>
        <td><span class='badge {$badgeClass}'>{$row['status']}</span></td>
        <td>
    <div class='btn-group'>
        <button class='btn btn-sm btn-outline-light edit-btn' data-id='{$row['id']}' title='Edit'>
            <i class='far fa-edit' style='color:green';></i>
        </button>
        <button class='btn btn-sm btn-outline-light delete-btn' data-id='{$row['id']}' title='Cancel'>
             <i class='far fa-trash-alt' style='color:red';></i>
        </button>
    </div>
</td>

    </tr>";
}
?>
</tbody>
                                        </table>
                                    </div>
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
            $('#bookingsTable').DataTable({
                "order": [[2, "asc"]],
                "responsive": true,
                "pageLength": 10
            });
            
            // Initialize tooltips
            $('[data-toggle="tooltip"]').tooltip();
        });
        // Load bookings dynamically (if using dynamic rendering)
function loadBookings() {
    $.get('fetch_bookings.php', function (data) {
        const bookings = JSON.parse(data);
        let rows = '';

        bookings.forEach((b, i) => {
            rows += `
                <tr>
                    <td>${b.booking_code}</td>
                    <td>${b.customer_name}</td>
                    <td>
                        <div>${b.booking_date}</div>
                        <div class="text-muted small">${b.booking_time}</div>
                    </td>
                    <td>${b.guests}</td>
                    <td>${b.table_number}</td>
                    <td><span class="badge badge-${getStatusColor(b.status)}">${b.status}</span></td>
                    <td>
                        <div class="btn-group">
                            <button class="btn btn-sm btn-outline-light edit-btn" data-id="${b.id}" data-booking='${JSON.stringify(b)}' title="Edit">
                                <i class="far fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-light delete-btn" data-id="${b.id}" title="Delete">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>`;
        });

        $('#bookingsTable tbody').html(rows);
    });
}

function getStatusColor(status) {
    switch (status) {
        case 'Confirmed': return 'primary';
        case 'Pending': return 'warning';
        case 'Cancelled': return 'danger';
        default: return 'secondary';
    }
}

// Delete booking
$('#bookingsTable').on('click', '.delete-btn', function () {
    const id = $(this).data('id');
    if (confirm("Delete this booking?")) {
        $.post('delete_booking.php', { id }, function (response) {
            if (response.success) loadBookings();
        }, 'json');
    }
});

// Populate edit modal
$('#bookingsTable').on('click', '.edit-btn', function () {
    const booking = $(this).data('booking');
    $('#editBookingId').val(booking.id);
    $('#editBookingCode').val(booking.booking_code);
    $('#editCustomerName').val(booking.customer_name);
    $('#editBookingDate').val(booking.booking_date);
    $('#editBookingTime').val(booking.booking_time);
    $('#editGuests').val(booking.guests);
    $('#editTableNumber').val(booking.table_number);
    $('#editStatus').val(booking.status);
    $('#editBookingModal').modal('show');
});

// Save edit
$('#saveEditBookingBtn').on('click', function () {
    const data = {
        id: $('#editBookingId').val(),
        booking_code: $('#editBookingCode').val(),
        customer_name: $('#editCustomerName').val(),
        booking_date: $('#editBookingDate').val(),
        booking_time: $('#editBookingTime').val(),
        guests: $('#editGuests').val(),
        table_number: $('#editTableNumber').val(),
        status: $('#editStatus').val()
    };

    $.ajax({
        url: 'update_booking.php',
        method: 'POST',
        data: data,
        dataType: 'json',
        success: function (response) {
            if (response.success) {
                alert('Booking updated successfully!');
                $('#editBookingModal').modal('hide');
                location.reload(); // reload to reflect changes
            } else {
                alert('Update failed. Please try again.');
            }
        },
        error: function (xhr) {
            console.error('Error:', xhr.responseText);
            alert('AJAX error occurred.');
        }
    });
});

$('#saveEditBookingBtn').on('click', function () {
    const data = {
        id: $('#editBookingId').val(),
        booking_code: $('#editBookingCode').val(),
        customer_name: $('#editCustomerName').val(),
        booking_date: $('#editBookingDate').val(),
        booking_time: $('#editBookingTime').val(),
        guests: $('#editGuests').val(),
        table_number: $('#editTableNumber').val(),
        status: $('#editStatus').val()
    };

    $.post('update_booking.php', data, function (response) {
        if (response.success) {
            $('#editBookingModal').modal('hide');
            loadBookings();
        }
    }, 'json');
});

// View or Edit Booking
$('.edit-btn').on('click', function () {
    const id = $(this).data('id');
    $.get('fetch_bookings.php', { id }, function (data) {
        $('#bookingId').val(data.id);
        $('#customerName').val(data.customer_name);
        $('#bookingDate').val(data.booking_date);
        $('#bookingTime').val(data.booking_time);
        $('#guests').val(data.guests);
        $('#tableNumber').val(data.table_number);
        $('#status').val(data.status);
        $('#editBookingModal').modal('show');
    }, 'json');
});

// Handle Update
$('#bookingForm').submit(function (e) {
    e.preventDefault();
    $.post('update_booking.php', $(this).serialize(), function (response) {
        if (response.success) {
            $('#editBookingModal').modal('hide');
            location.reload();
        }
    }, 'json');
});

// Delete Booking
$('.delete-btn').on('click', function () {
    const id = $(this).data('id');
    if (confirm("Are you sure you want to cancel this booking?")) {
        $.post('delete_booking.php', { id }, function (response) {
            if (response.success) {
                location.reload();
            }
        }, 'json');
    }
});
$(document).on('click', '.edit-btn', function () {
    const id = $(this).data('id');

    $.ajax({
        url: 'fetch_bookings.php',
        method: 'GET',
        data: { id: id },
        dataType: 'json',
        success: function (data) {
            if (data) {
                $('#editBookingId').val(data.id);
                $('#editBookingCode').val(data.booking_code);
                $('#editCustomerName').val(data.customer_name);
                $('#editBookingDate').val(data.booking_date);
                $('#editBookingTime').val(data.booking_time.substring(0, 5));
                $('#editGuests').val(data.guests);
                $('#editTableNumber').val(data.table_number);
                $('#editStatus').val(data.status);
                $('#editBookingModal').modal('show');
            } else {
                alert('No data received');
            }
        },
        error: function (xhr) {
            console.log('AJAX Error:', xhr.responseText);
        }
    });
});


    </script>
   
</body>
</html>