

<?php

$con = mysqli_connect("localhost","root","","registration_page");


// Signup Process
if (isset($_POST['register_submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $insert_sql = "INSERT INTO users(name,password,email) VALUES('$name','$password','$email')";
    $res = mysqli_query($con,$insert_sql);
}

// Login Process
session_start();
if (isset($_POST['login_submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' && password = '$password'";
    $result = mysqli_query($con,$sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];
        header("Location: .././dashboard/dashboard.php");
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Signup Form</title>
    <link rel="stylesheet" href="./login.css">
</head>
<body>
    <div class="login-page">
        <div class="form">

            <!-- SignUp Form -->
            <form action="" method="post" class="register-form">
                <input type="text" name="name" placeholder="name"/>
                <input type="password" name="password" placeholder="password"/>
                <input type="text" name="email"  placeholder="email address"/>
                <button type="submit" name="register_submit"> create</button>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>
            
            <!-- Login Form -->
            <form action="" method="post" class="login-form">
                <input type="text" name="email" placeholder="Email"/>
                <input type="password" name="password" placeholder="password"/>
                <button type="submit" name="login_submit">login</button>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>
    </div>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>   
    <script>
        $('.message a').click(function(){
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
    </script>
</body>
</html>