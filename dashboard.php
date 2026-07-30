<?php
session_start();

if(!isset($_SESSION['id'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<title>Dashboard</title>

<link rel="stylesheet" href="assets/css/dashboard.css">

</head>

<body>

<?php include 'includes/sidebar.php'; ?>

<?php include 'includes/navbar.php'; ?>

<div class="content">

<h1>Learning Overview</h1>

<p>Selamat datang kembali, <?= $_SESSION['nama']; ?> 👋</p>

<div class="cards">

<div class="card-box">

<h4>📚 Courses</h4>

<h2>12</h2>

<p>Total Course</p>

</div>

<div class="card-box">

<h4>👨‍🎓 Students</h4>

<h2>35</h2>

<p>Total Student</p>

</div>

<div class="card-box">

<h4>👨‍🏫 Mentors</h4>

<h2>5</h2>

<p>Total Mentor</p>

</div>

<div class="card-box">

<h4>📝 Quiz</h4>

<h2>8</h2>

<p>Total Quiz</p>

</div>

</div>

<div class="card-box">

<h4>Quiz</h4>

<h2>8</h2>

</div>

</div>

<?php include 'includes/footer.php'; ?>

</div>

</body>

</html>