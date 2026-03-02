<?php
session_start();
if(isset($_SESSION['admin'])){
    header("Location: upload.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2 style="text-align:center;">Admin Login</h2>

<form method="post" action="login.php" style="text-align:center;">
<input type="text" name="username" placeholder="Username" required><br><br>
<input type="password" name="password" placeholder="Password" required><br><br>
<button type="submit">Login</button>
</form>

</body>
</html>
<?php
session_start();

$username = "admin";
$password = "1234";

if($_POST['username'] == $username && $_POST['password'] == $password){
    $_SESSION['admin'] = true;
    header("Location: upload.php");
}else{
    echo "Wrong Login!";
}
?>
