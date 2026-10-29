<?php
session_start();

$error = "";
require_once "config.php";

if(isset($_POST['login']))

{
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users
            WHERE username='$username'
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0)
    {	
    	$_SESSION['username'] = $username;
	 header("Location: dashboard.php");
        exit();
    }
    else
    {
        echo "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Management Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="login-box">
    <h2>Employee Management System</h2>

    <?php
    if(!empty($error))
    {
        echo "<p class='error'>$error</p>";
    }
    ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="login">Login</button>
    </form>
</div>

</body>
</html>
