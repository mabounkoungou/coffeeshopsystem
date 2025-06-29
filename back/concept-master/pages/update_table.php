<?php
header('Content-Type: application/json');
require 'connection.php'; // ensure $conn is defined

if (
    isset($_POST['id'], $_POST['tablenumber'], $_POST['tablename'], $_POST['tablecapacity'], $_POST['tablelocation'], $_POST['tablestatus'])
) {
    $id = $_POST['id'];
    $tableNumber = $_POST['tablenumber'];
    $tableName = $_POST['tablename'];
    $tableCapacity = $_POST['tablecapacity'];
    $tableLocation = $_POST['tablelocation'];
    $tableStatus = $_POST['tablestatus'];

    try {
        $stmt = $pdo->prepare("UPDATE tables SET 
            table_number = :table_number,
            table_name = :table_name,
            table_capacity = :table_capacity,
            table_location = :table_location,
            table_status = :table_status
            WHERE id = :id");

        $stmt->execute([
            ':table_number' => $tableNumber,
            ':table_name' => $tableName,
            ':table_capacity' => $tableCapacity,
            ':table_location' => $tableLocation,
            ':table_status' => $tableStatus,
            ':id' => $id
        ]);

        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Missing required fields']);
}
