<?php
session_start();

if(!isset($_SESSION['username']))
{
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="dashboard">

    <h1>Welcome <?php echo $_SESSION['username']; ?></h1>

    <div class="card-container">

        <div class="card">
            <h3>Working Empoyees</h3>
            <p>50</p>
        </div>

        <div class="card">
            <h3>Departments</h3>
            <p>5</p>
        </div>

        <div class="card">
            <h3>Attendance</h3>
            <p>45 Present</p>
        </div>

    </div>

    <a href="logout.php" class="logout-btn">Logout</a>

</div>

</body>
</html>
