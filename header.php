<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChargeReward Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    </head>
<body>

<nav class="navbar">
    <div class="nav-container">
        <a href="index.php" class="logo">
            <div class="logo-icon">⚡</div>
            ChargeReward
        </a>
        
        <div class="nav-links">
            <a href="index.php" class="nav-item <?= $current_page == 'index.php' ? 'active' : '' ?>">
                <span>📊</span> Dashboard
            </a>
            <a href="booking.php" class="nav-item <?= $current_page == 'booking.php' ? 'active' : '' ?>">
                <span>📍</span> Book
            </a>
            <a href="rewards.php" class="nav-item <?= $current_page == 'rewards.php' ? 'active' : '' ?>">
                <span>🎁</span> Rewards
            </a>
            <a href="impact.php" class="nav-item <?= $current_page == 'impact.php' ? 'active' : '' ?>">
                <span>🌱</span> Impact
            </a>
            
            <div class="nav-profile">O</div>
        </div>
    </div>
</nav>

<div class="main-content">