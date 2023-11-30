<?php include_once "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="post">
    <h1>Login here</h1>
        
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="enter your email">
        </div> 
        <div class="mb-3">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="enter your password">
        </div>
        <div class="mb-3">
            <input type="submit" name="login">
        </div>
        <a href="register.php">Not an account?</a>
    </form>

    <?php
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        
        $query = mysqli_query($connect,"select * from users where email='$email' AND password='$password'");
        $count = mysqli_num_rows($query);

        if($count >0){
            $_SESSION['admin'] = $email;
            echo "<script>window.open('index.php','_self')</script>";
        }
        else{
            echo "<script>alert('email or password may incorrect please try again')</script>";
        }

    }

    ?>
    
</body>
</html>