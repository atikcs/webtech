<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        $user = $result->fetch_assoc();

        // VERIFY password
        if (password_verify($password, $user['password'])) {

            // SESSION
            $_SESSION['user_name'] = $user['name'];

            // COOKIE (email autofill)
            setcookie("email", $email, time() + (7 * 24 * 60 * 60));

            // COOKIE (last login time)
            setcookie("last_login", date("Y-m-d H:i:s"), time() + (7 * 24 * 60 * 60));

            header("Location: dashboard.php");
            exit();

        } else {
            echo "Wrong password<br>";
        }

    } else {
        echo "User not found<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST">
    <input type="email" name="email" placeholder="Email"
    value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>" required><br><br>

    <input type="password" name="password" placeholder="Password" required><br><br>

    <button type="submit">Login</button>
</form>

<p>Don't have an account?</p>
<a href="register.html">Register</a>

</body>
</html>