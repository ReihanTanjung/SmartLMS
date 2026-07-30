<div class="sidebar">

    <div class="logo">
        <h2>🎓 SmartLMS</h2>
        <p>Learning Management System</p>
    </div>

    <a href="dashboard.php">
        🏠 <span>Dashboard</span>
    </a>

    <a href="courses.php">
        📚 <span>Courses</span>
    </a>

    <a href="students.php">
    👨‍🎓 <span>Students</span>
</a>

    <li>
    <a href="mentors.php">
        👨‍🏫 Mentors
    </a>
</li>

    <li>
    <a href="quiz.php">
        📝 Quiz
    </a>
</li>

    <a href="#">
        ⚙️ <span>Settings</span>
    </a>

    <hr>

    <div class="sidebar-info">
        <small>Total Course</small>
        <h3><?= isset($totalCourse['total']) ? $totalCourse['total'] : 0; ?></h3>

        <small>Total Student</small>
        <h3><?= isset($totalStudent['total']) ? $totalStudent['total'] : 0; ?></h3>
    </div>

    <a href="logout.php" class="logout">
        🚪 <span>Logout</span>
    </a>

</div>