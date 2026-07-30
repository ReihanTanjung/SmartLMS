<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SmartLMS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="login-page">

<div class="login-card">

    <h2>SmartLMS</h2>
    <p>Silakan login untuk melanjutkan</p>

    <form action="" method="POST">

        <div class="mb-3">
            <input
                type="email"
                class="form-control"
                placeholder="Email"
                required>
        </div>

        <div class="mb-3">
            <input
                type="password"
                class="form-control"
                placeholder="Password"
                required>
        </div>

        <button class="btn btn-login w-100">
            Login
        </button>

    </form>

    <div class="text-center mt-3">
        Belum punya akun?
        <a href="register.php">Daftar</a>
    </div>

</div>

</body>
</html>