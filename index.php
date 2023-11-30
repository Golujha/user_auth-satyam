<?php include_once "connect.php";

if(!isset($_SESSION['admin'])){
    echo "<script>window.open('login.php','_self')</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>secure page</h1>

    <h3><?= $_SESSION['admin'];?></h3>
    <a href="logout.php">Logout</a>
</body>
</html>