<?php
require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $booking_code = 'BK-' . date('Y') . '-' . rand(100, 999);
    $customer_name = $_POST['customer_name'];
    $booking_date = $_POST['booking_date'];
    $booking_time = $_POST['booking_time'];
    $guests = $_POST['guests'];
    $table_number = $_POST['table_number'];
    $status = $_POST['status'];

    $stmt = $pdo->prepare("INSERT INTO bookings (booking_code, customer_name, booking_date, booking_time, guests, table_number, status) 
                           VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([$booking_code, $customer_name, $booking_date, $booking_time, $guests, $table_number, $status]);

    header("Location: bookings-list.php?success=1");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Booking</title>
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php if (isset($_GET['success'])): ?>
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        Booking added successfully.
        <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
<?php endif; ?>

<div class="container mt-5">
    <h3 class="mb-4">Add New Booking</h3>
    <form method="POST">
        <div class="form-group">
            <label>Customer Name</label>
            <input type="text" name="customer_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Booking Date</label>
            <input type="date" name="booking_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Booking Time</label>
            <input type="time" name="booking_time" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Guests</label>
            <input type="number" name="guests" class="form-control" min="1" required>
        </div>
        <div class="form-group">
            <label>Table Number</label>
            <input type="text" name="table_number" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Status</label>
            <select name="status" class="form-control">
                <option value="Pending">Pending</option>
                <option value="Confirmed">Confirmed</option>
                <option value="Cancelled">Cancelled</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save Booking</button>
        <a href="index.php" class="btn btn-danger">Cancel</a>
    </form>
</div>

</body>
</html>
