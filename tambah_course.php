<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit;
}

include 'config/koneksi.php';

if(isset($_POST['simpan'])){

    $nama = $_POST['nama_course'];
    $deskripsi = $_POST['deskripsi'];
    $mentor = $_POST['mentor'];

    mysqli_query($conn,"INSERT INTO courses(nama_course,deskripsi,mentor)
    VALUES('$nama','$deskripsi','$mentor')");

    header("Location: courses.php");
}
?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<title>Tambah Course</title>

<link rel="stylesheet" href="assets/css/dashboard.css">

</head>

<body>

<?php include 'includes/sidebar.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="content">

<h1>Tambah Course</h1>

<form method="POST">

<div class="mb-3">
<label>Nama Course</label>
<input type="text" name="nama_course" class="form-control" required>
</div>

<div class="mb-3">
<label>Deskripsi</label>
<textarea name="deskripsi" class="form-control"></textarea>
</div>

<div class="mb-3">
<label>Mentor</label>
<input type="text" name="mentor" class="form-control" required>
</div>

<br>

<button class="btn-purple" name="simpan">
Simpan
</button>

</form>

</div>

</body>
</html>