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
    <!-- Edit Table Modal -->
<div class="modal fade" id="editTableModal" tabindex="-1" role="dialog" aria-labelledby="editTableModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form id="editTableForm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Table</h5>
          <button type="button" class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" id="editTableId">
          <div class="form-group">
            <label for="editTableNumber">Table Number</label>
            <input type="number" id="editTableNumber" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="editTableName">Name</label>
            <input type="text" id="editTableName" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="editTableCapacity">Capacity</label>
            <select id="editTableCapacity" class="form-control" required>
              <option>1</option><option>2</option><option>4</option><option>6</option><option>8</option><option>10+</option>
            </select>
          </div>
          <div class="form-group">
            <label for="editTableLocation">Location</label>
            <select id="editTableLocation" class="form-control" required>
              <option>Main Dining</option><option>Outdoor</option><option>Bar Area</option><option>Private Room</option><option>VIP Section</option>
            </select>
          </div>
          <div class="form-group">
            <label for="editTableStatus">Status</label>
            <select id="editTableStatus" class="form-control" required>
              <option>Available</option><option>Reserved</option><option>Occupied</option><option>Maintenance</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" id="saveEditTableBtn">Save Changes</button>
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
                                <a class="nav-link" href="../dashboard.php" aria-expanded="false" data-target="#submenu-dashboard" aria-controls="submenu-dashboard"><i class="fa fa-fw fa-home"></i>Dashboard</a> 
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="true" data-target="#submenu-bookings" aria-controls="submenu-bookings"><i class="fas fa-fw fa-calendar-alt"></i>Bookings</a>
                                <div id="submenu-bookings" class="collapse submenu show" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="bookings-list.php">All Bookings</a>
                                        </li>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link active" href="tables-management.php">Table Management</a>
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
                                        <li class="nav-item">
                                            <a class="nav-link" href="staff-management.php">Staff Accounts</a>
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
                                            <li class="breadcrumb-item"><a href="../dashboard.php" class="breadcrumb-link">Dashboard</a></li>
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
                                              <?php
require 'connection.php'; // Path to DB connection file

$stmt = $pdo->prepare("SELECT * FROM tables ORDER BY table_number ASC");
$stmt->execute();
$tables = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($tables as $table) {
    $badgeClass = '';
    switch (strtolower($table['table_status'])) {
        case 'available':
            $badgeClass = 'badge-success';
            break;
        case 'reserved':
            $badgeClass = 'badge-warning';
            break;
        case 'occupied':
            $badgeClass = 'badge-danger';
            break;
        default:
            $badgeClass = 'badge-secondary';
            break;
    }

    echo "<tr>
        <td>{$table['table_number']}</td>
        <td>{$table['table_name']}</td>
        <td>{$table['table_capacity']}</td>
        <td>{$table['table_location']}</td>
        <td><span class='badge {$badgeClass}'>{$table['table_status']}</span></td>
        <td>
            <button class='btn btn-sm btn-outline-light edit-btn' data-id='{$table['id']}' data-toggle='tooltip' title='Edit'>
                <i class='far fa-edit'></i>
            </button>
            <button class='btn btn-sm btn-outline-light delete-btn' data-id='{$table['id']}' data-toggle='tooltip' title='Delete'>
                <i class='far fa-trash-alt'></i>
            </button>
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
                                   <form method="POST" action="add_table.php" id="addTableForm">
    <div class="form-group">
        <label for="tableNumber">Table Number</label>
        <input type="number" class="form-control" id="tableNumber" name="tableNumber" required>
    </div>
    <div class="form-group">
        <label for="tableName">Table Name/Description</label>
        <input type="text" class="form-control" id="tableName" name="tableName" placeholder="e.g. Window View, VIP Booth" required>
    </div>
    <div class="form-group">
        <label for="tableCapacity">Capacity</label>
        <select class="form-control" id="tableCapacity" name="tableCapacity" required>
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
        <select class="form-control" id="tableLocation" name="tableLocation" required>
            <option>Main Dining</option>
            <option>Outdoor</option>
            <option>Bar Area</option>
            <option>Private Room</option>
            <option>VIP Section</option>
        </select>
    </div>
    <div class="form-group">
        <label for="tableStatus">Initial Status</label>
        <select class="form-control" id="tableStatus" name="tableStatus" required>
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
                                    <button type="button" class="btn btn-primary" id="saveTableBtn">Save Table</button>
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
    $('#saveTableBtn').on('click', function () {
    const data = {
        tablenumber: $('#tableNumber').val(),
        tablename: $('#tableName').val(),
        tablecapacity: $('#tableCapacity').val(),
        tablelocation: $('#tableLocation').val(),
        tablestatus: $('#tableStatus').val()
    };

    $.ajax({
        url: 'add_table.php',
        method: 'POST',
        data: data,
        dataType: 'json',
        success: function (response) {
            if (response.success) {
                alert("✅ Table added successfully!");
                $('#addTableModal').modal('hide');
                location.reload();
            } else {
                alert("❌ Failed: " + (response.error || "Something went wrong."));
            }
        },
        error: function () {
            alert("❌ Server error. Please check the console.");
        }
    });
});

$('.edit-btn').on('click', function () {
    const id = $(this).data('id');

    $.get('get_table.php', { id }, function (data) {
        if (data) {
            $('#editTableId').val(data.id);
            $('#editTableNumber').val(data.table_number);
            $('#editTableName').val(data.table_name);
            $('#editTableCapacity').val(data.table_capacity);
            $('#editTableLocation').val(data.table_location);
            $('#editTableStatus').val(data.table_status);
            $('#editTableModal').modal('show');
        } else {
            alert("Table not found.");
        }
    }, 'json');
});

$('#saveEditTableBtn').on('click', function () {
    const data = {
        id: $('#editTableId').val(),
        tablenumber: $('#editTableNumber').val(),
        tablename: $('#editTableName').val(),
        tablecapacity: $('#editTableCapacity').val(),
        tablelocation: $('#editTableLocation').val(),
        tablestatus: $('#editTableStatus').val()
    };

    $.ajax({
        url: 'update_table.php',
        method: 'POST',
        data: data,
        dataType: 'json',
        success: function (response) {
            if (response.success) {
                alert("Table updated!");
                $('#editTableModal').modal('hide');
                location.reload();
            } else {
                alert("Update failed: " + (response.error || "Unknown error"));
            }
        },
        error: function () {
            alert("Server error.");
        }
    });
});
$('.edit-btn').on('click', function () {
    const id = $(this).data('id');

    $.get('get_table.php', { id }, function (data) {
        if (data) {
            $('#editTableId').val(data.id);
            $('#editTableNumber').val(data.table_number);
            $('#editTableName').val(data.table_name);
            $('#editTableCapacity').val(data.table_capacity);
            $('#editTableLocation').val(data.table_location);
            $('#editTableStatus').val(data.table_status);
            $('#editTableModal').modal('show');
        } else {
            alert("Table not found.");
        }
    }, 'json');
});

$('#saveEditTableBtn').on('click', function () {
    const data = {
        id: $('#editTableId').val(),
        tablenumber: $('#editTableNumber').val(),
        tablename: $('#editTableName').val(),
        tablecapacity: $('#editTableCapacity').val(),
        tablelocation: $('#editTableLocation').val(),
        tablestatus: $('#editTableStatus').val()
    };

    $.ajax({
        url: 'update_table.php',
        method: 'POST',
        data: data,
        dataType: 'json',
        success: function (response) {
            if (response.success) {
                alert("Table updated!");
                $('#editTableModal').modal('hide');
                location.reload();
            } else {
                alert("Update failed: " + (response.error || "Unknown error"));
            }
        },
        error: function () {
            alert("Server error.");
        }
    });
});
$(document).on('click', '.delete-btn', function () {
    const tableId = $(this).data('id');

    if (confirm("Are you sure you want to delete this table?")) {
        $.ajax({
            url: 'delete_table.php',
            method: 'POST',
            data: { id: tableId },
            dataType: 'json',
            success: function (response) {
                if (response.success) {
                    alert("Table deleted successfully!");
                    location.reload();
                } else {
                    alert("Failed to delete table: " + response.error);
                }
            },
            error: function () {
                alert("Server error.");
            }
        });
    }
});


    </script>
</body>
</html>