<?php
session_start();
require 'db.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Fetch wallets
$stmt = $conn->query("SELECT * FROM wallet_connect_wallets");
$wallets = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Fetch user's wallet connect requests
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT * FROM wallet_connect_requests WHERE user_id = ?");
$stmt->execute([$user_id]);
$requests = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
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
            transition: transform 0.2s;
        }
        .card:hover {
            transform: translateY(-5px);
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
        <h1 class="text-center mb-4">Select a Wallet</h1>
        <div class="row">
            <?php foreach ($wallets as $wallet): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 text-center p-4">
                        <h3><?= htmlspecialchars($wallet['name']) ?></h3>
                        <a href="submit_wallet.php?wallet_id=<?= $wallet['id'] ?>" class="btn btn-primary">Select Wallet</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>