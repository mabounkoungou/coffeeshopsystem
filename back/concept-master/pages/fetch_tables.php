<?php
// fetch_tables.php
require 'connection.php';
$stmt = $pdo->query("SELECT * FROM tables ORDER BY table_number ASC");
$tables = $stmt->fetchAll();
echo json_encode($tables);