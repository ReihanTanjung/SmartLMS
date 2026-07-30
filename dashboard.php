<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - SmartLMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Dashboard</h1>
    <hr>

    <h3>
        Selamat Datang, <?= htmlspecialchars($_SESSION['nama']) ?> 👋
    </h3>

    <p>Login berhasil.</p>

    <a href="logout.php" class="btn btn-danger mt-3">
        Logout
    </a>

</div>

</body>
</html>