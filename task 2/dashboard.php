<?php
session_start();

if (!isset($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['user_name']; ?>!</h2>

<?php
if (isset($_COOKIE['last_login'])) {
    echo "Last login: " . $_COOKIE['last_login'];
}
?>

<br><br>
<a href="logout.php">Logout</a>

</body>
</html>