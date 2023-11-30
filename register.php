<?php include_once "connect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="" method="post">
    <h1>Register here</h1>
        <div class="mb-3">
            <label for="">Name</label>
            <input type="text" name="name" placeholder="enter your name">
        </div>
        <div class="mb-3">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="enter your email">
        </div> <div class="mb-3">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="enter your password">
        </div>
        <div class="mb-3">
            <input type="submit" name="register">
        </div>
        <a href="login.php">Already have an account?</a>

    </form>

    <?php
    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        //check if email already exist or not

        $check_query = mysqli_query($connect,"select * from users where email='$email'");
        $count = mysqli_num_rows($check_query);

        
        if($count > 0 ){
            echo "<script>alert('this email is already exist in our database please try with new email address')</script>";
        }
        else{
            $query = mysqli_query($connect,"insert into users (name,email,password) value ('$name','$email','$password')");

        }
        

    }
    ?>
    

    
    
</body>
</html>