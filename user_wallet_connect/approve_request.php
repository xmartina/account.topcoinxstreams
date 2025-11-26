<?php
session_start();
require 'db.php';

if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit();
}

$request_id = $_GET['id'] ?? null;

if (!$request_id) {
    header('Location: admin_dashboard.php');
    exit();
}

// Update request status
$action = basename($_SERVER['PHP_SELF'], '.php'); // 'approve' or 'reject'
$status = $action === 'approve' ? 'approved' : 'rejected';

$stmt = $conn->prepare("UPDATE wallet_connect_requests SET status = ?, updated_at = NOW() WHERE id = ?");
$stmt->execute([$status, $request_id]);

header('Location: admin_dashboard.php');
exit();
?>