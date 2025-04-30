<?php
$host = 'localhost';
$port = '3306';
$dbname = 'multistream6_capital_coin_1';
$username = 'multistream6_capital_coin_user_3';
$password = '+C@ppy126';

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>