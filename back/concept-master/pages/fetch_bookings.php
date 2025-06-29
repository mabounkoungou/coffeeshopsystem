<?php
require 'connection.php'; // Or db connection
header('Content-Type: application/json');

$id = $_GET['id'] ?? null;

if (!$id) {
    echo json_encode(null);
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM bookings WHERE id = ?");
$stmt->execute([$id]);
$booking = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($booking);
