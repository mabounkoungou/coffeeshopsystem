<?php
// get_table.php
require 'connection.php';
$id = $_GET['id'] ?? 0;
$stmt = $pdo->prepare("SELECT * FROM tables WHERE id = ?");
$stmt->execute([$id]);
$table = $stmt->fetch();
echo json_encode($table);
