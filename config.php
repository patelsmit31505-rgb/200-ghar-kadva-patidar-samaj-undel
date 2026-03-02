<?php
session_start();

define("ADMIN_USER", "admin");

/* Password = 1234 */
define("ADMIN_PASS", "$2y$10$wHkFQZ6Y2qV0nN1gYx5lE.MmS6JY2vM6z3KZqJZz2Xz7yL5lK3w2a");
?>
<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title>Secure Admin Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2 style="text-align:center;">Admin Login</h2>

<form method="post" action="login.php" style="text-align:center;">
<input type="text" name="username" placeholder="Username" required><br><br>
<input type="password" name="password" placeholder="Password" required><br><br>
<button type="submit">Login</button>
<?php
include("config.php");

if($_POST['username'] === ADMIN_USER &&
   password_verify($_POST['password'], ADMIN_PASS)){

    $_SESSION['admin'] = true;
    header("Location: dashboard.php");
    exit();
}else{
    echo "Invalid Login!";
}
?>
<?php
session_start();
session_destroy();
header("Location: admin.php");
exit();
?>
</form>

</body>
</html>
<?php
