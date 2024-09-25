<?php

require_once __DIR__ . '/config/database.php';

$productId = $_GET['id'] ?? null;

if ($productId === null) {
    http_response_code(400);
    exit;
}

$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement->bindParam(':id', $productId, PDO::PARAM_STR);
$statement->execute();

foreach ($statement as $row) {
    echo "ID: {$row['id']} - Name: {$row['name']}<br>";
}

