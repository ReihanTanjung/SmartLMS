<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

include 'config/koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM courses ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Courses - SmartLMS</title>

<link rel="stylesheet" href="assets/css/dashboard.css">

</head>

<body>

<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="content">

    <div class="page-header">

        <h1>📚 Courses</h1>
        <div class="search-box">

    <input
        type="text"
        id="searchCourse"
        placeholder="🔍 Cari course...">

</div>

        <a href="tambah_course.php" class="btn-purple">
            + Tambah Course
        </a>

    </div>

    <div class="course-grid">

        <?php while($course = mysqli_fetch_assoc($result)) { ?>

            <div class="course-card">

    <h3>📚 <?= htmlspecialchars($course['nama_course']); ?></h3>

    <p><?= nl2br(htmlspecialchars($course['deskripsi'])); ?></p>

    <small>
        👨‍🏫 Mentor :
        <b><?= htmlspecialchars($course['mentor']); ?></b>
    </small>

    <div class="course-action">

        <a href="edit_course.php?id=<?= $course['id']; ?>">✏ Edit</a>

        <a href="hapus_course.php?id=<?= $course['id']; ?>"
           onclick="return confirm('Yakin ingin menghapus course ini?')">
            🗑 Hapus
        </a>

    </div>

</div>

            </div>

        <?php } ?>

    </div>

</div>

</body>
</html>