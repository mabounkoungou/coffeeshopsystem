<?php
require 'connection.php';

$id = $_POST['id'];
$stmt = $pdo->prepare("DELETE FROM bookings WHERE id = ?");
$success = $stmt->execute([$id]);
echo json_encode(['success' => $success]);