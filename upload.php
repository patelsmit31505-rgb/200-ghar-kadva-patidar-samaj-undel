<?php
session_start();
if(!isset($_SESSION['admin'])){
    header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Upload Photo</title>
</head>
<body>

<h2>Upload Gallery Photo</h2>

<form method="post" enctype="multipart/form-data">
<input type="file" name="photo" required>
<button type="submit" name="upload">Upload</button>
</form>

<?php
if(isset($_POST['upload'])){
    $target = "gallery/" . basename($_FILES["photo"]["name"]);
    move_uploaded_file($_FILES["photo"]["tmp_name"], $target);
    echo "Photo Uploaded Successfully!";
}
?>

</body>
</html>
