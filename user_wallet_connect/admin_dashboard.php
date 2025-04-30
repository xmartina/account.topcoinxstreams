<?php
session_start();
require 'db.php';

// Check if admin is logged in
if (!isset($_SESSION['admin'])) {
    header('Location: admin_login.php');
    exit();
}

// Fetch all wallet connect requests
$stmt = $conn->query("
    SELECT wcr.*, u.username, w.name as wallet_name 
    FROM wallet_connect_requests wcr
    JOIN users u ON wcr.user_id = u.id
    JOIN wallet_connect_wallets w ON wcr.wallet_id = w.id
");
$requests = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #1a1a1a;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }
        .card {
            background-color: #2d2d2d;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .btn-primary {
            background-color: #ff6f00;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
        }
        .btn-primary:hover {
            background-color: #e65c00;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">Wallet Connect Requests</h1>
        <div class="row">
            <?php foreach ($requests as $request): ?>
                <div class="col-md-6 mb-4">
                    <div class="card p-4">
                        <h3><?= htmlspecialchars($request['username']) ?></h3>
                        <p>Wallet: <?= htmlspecialchars($request['wallet_name']) ?></p>
                        <p>Status: <span class="badge bg-<?= $request['status'] === 'approved' ? 'success' : ($request['status'] === 'rejected' ? 'danger' : 'warning') ?>"><?= ucfirst($request['status']) ?></span></p>
                        <div class="d-flex gap-2">
                            <a href="approve_request.php?id=<?= $request['id'] ?>" class="btn btn-primary">Approve</a>
                            <a href="reject_request.php?id=<?= $request['id'] ?>" class="btn btn-danger">Reject</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>