<?php
header('Content-Type: application/json');
require 'connection.php'; // Ensure $conn is defined here

if (
    isset($_POST['tablenumber'], $_POST['tablename'], $_POST['tablecapacity'], $_POST['tablelocation'], $_POST['tablestatus'])
) {
    $tableNumber = $_POST['tablenumber'];
    $tableName = $_POST['tablename'];
    $tableCapacity = $_POST['tablecapacity'];
    $tableLocation = $_POST['tablelocation'];
    $tableStatus = $_POST['tablestatus'];

    try {
        $stmt = $pdo->prepare("INSERT INTO tables (table_number, table_name, table_capacity, table_location, table_status) 
                                VALUES (:table_number, :table_name, :table_capacity, :table_location, :table_status)");

        $stmt->execute([
            ':table_number' => $tableNumber,
            ':table_name' => $tableName,
            ':table_capacity' => $tableCapacity,
            ':table_location' => $tableLocation,
            ':table_status' => $tableStatus
        ]);

        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Missing required fields.']);
}
