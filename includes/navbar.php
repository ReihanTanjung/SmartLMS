<nav class="navbar">

    <div class="search-nav">
        <input
            type="text"
            placeholder="🔍 Cari Course, Student, Mentor...">
    </div>

    <div class="profile">

        <div class="profile-text">

            <small>Welcome Back 👋</small><br>

            <b><?= htmlspecialchars($_SESSION['nama']); ?></b>

        </div>

        <div class="avatar">

            <?= strtoupper(substr($_SESSION['nama'],0,1)); ?>

        </div>
    
        <a href="logout.php" class="btn-logout">
    🚪 Logout
</a>

    </div>

</nav>