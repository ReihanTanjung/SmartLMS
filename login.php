<?php
session_start();
include 'config/koneksi.php';

if(isset($_POST['login'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");

    if(mysqli_num_rows($query) > 0){

        $user = mysqli_fetch_assoc($query);

        if(password_verify($password, $user['password'])){

            $_SESSION['id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['role'] = $user['role'];

            header("Location: dashboard.php");
            exit;

        }else{

            echo "<script>alert('Password salah!');</script>";

        }

    }else{

        echo "<script>alert('Email tidak ditemukan!');</script>";

    }

}
?>