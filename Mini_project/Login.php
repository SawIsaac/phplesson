<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Signup.php">SIGN UP</a>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        Email : <input type="email" name="userEmail1">
        Password : <input type="password" name="userPassword1">
        <br>
        <input type="submit" value="Login" name="click1">
        <input type="submit" name="logout" value="Logout">
    </form>
    
</body>
</html>

<?php
    session_start();

    if(isset($_POST['click1'])){
        $email = $_POST['userEmail1'];
        $password = $_POST['userPassword1'];

        if($email == $_SESSION['email'] && password_verify($password, $_SESSION['password'])){
            echo "Login Successful";
        }else{
            echo "Please try again";
        }
    }
    if(isset($_POST['logout'])){
        session_destroy();
        header("Location: logout.php");
    }
?>