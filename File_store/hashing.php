<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="hashing.php" method="POST">
        Email <input type="email" name="userEmail">
        Password <input type="password" name="userPassword">
        <br>
        <input type="submit" name="click" value="login">
    </form>
</body>
</html>

<?php
$email1 = "admin@gmail.com";
$password1 = "htet";
    if(isset($_POST['click'])){
        $email = $_POST['userEmail'];
        $password = $_POST['userPassword'];
        $hash = password_hash($password, PASSWORD_BCRYPT);
        echo $hash;
        if($email == $email1 && password_verify($password1, $hash)){
            echo "login successful";
        }else{
            echo "login Fail";
        }
    }
?>