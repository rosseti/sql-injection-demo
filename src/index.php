<?php

require_once __DIR__ . '/config/database.php';

$productId = $_GET['id'] ?? null;

if ($productId === null) {
    http_response_code(400);
    exit;
}

$statement = $pdo->query("SELECT * FROM products WHERE id = '{$productId}'");

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    echo 'ID: ' . $row['id'] . ' - Name: ' . $row['name'] . '<br>';
}
