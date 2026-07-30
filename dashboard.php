<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

include 'config/koneksi.php';

$totalCourse = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM courses")
);

$totalStudent = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM students")
);

$totalMentor = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM mentors")
);

$totalQuiz = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT COUNT(*) AS total FROM quiz")
);
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

<h2><?= $totalCourse['total']; ?></h2>

<p>Total Course</p>

</div>

<div class="card-box">

<h4>👨‍🎓 Students</h4>

<h2><?= $totalStudent['total']; ?></h2>

<p>Total Student</p>

</div>

<div class="card-box">

<h4>👨‍🏫 Mentors</h4>

<h2><?= $totalMentor['total']; ?></h2>

<p>Total Mentor</p>

</div>

<div class="card-box">

<h4>📝 Quiz</h4>

<h2><?= $totalQuiz['total']; ?></h2>

<p>Total Quiz</p>

</div>

</div>



</div>

<?php include 'includes/footer.php'; ?>

</div>

</body>

</html>