<?php
require 'connection.php'; // or correct this path

header('Content-Type: application/json');

// Show PHP errors (for development)
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    $booking_code = $_POST['booking_code'] ?? '';
    $customer_name = $_POST['customer_name'] ?? '';
    $booking_date = $_POST['booking_date'] ?? '';
    $booking_time = $_POST['booking_time'] ?? '';
    $guests = $_POST['guests'] ?? 0;
    $table_number = $_POST['table_number'] ?? '';
    $status = $_POST['status'] ?? '';

    if (!$id) {
        echo json_encode(['success' => false, 'message' => 'Missing booking ID']);
        exit;
    }

    try {
        $stmt = $pdo->prepare("UPDATE bookings SET 
            booking_code = ?, 
            customer_name = ?, 
            booking_date = ?, 
            booking_time = ?, 
            guests = ?, 
            table_number = ?, 
            status = ? 
            WHERE id = ?");

        $updated = $stmt->execute([
            $booking_code,
            $customer_name,
            $booking_date,
            $booking_time,
            $guests,
            $table_number,
            $status,
            $id
        ]);

        echo json_encode(['success' => $updated]);
    } catch (PDOException $e) {
        echo json_encode([
            'success' => false,
            'message' => 'Database error',
            'error' => $e->getMessage()
        ]);
    }
}
