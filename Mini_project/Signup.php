<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Sign Up</h3>
    <a href="Login.php">Login</a>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        Email : <input type="email" name="userEmail"><br>
        Password : <input type="password" name="userPassword"><br>
        Confirm Password : <input type="password" name="userConfirmPassword">
        <br>
        <input type="submit" value="Sign Up" name="click">
    </form>
</body>
</html>
<?php
session_start();
function checkStrongPassword($password){
    $upperStatus = false;
    $lowerStatus = false;
    $numberStatus = false;
    $specialStatus = false;

    if(preg_match('/[A-Z]/',$password)){
        $upperStatus = true;
    }
    if(preg_match('/[a-z]/',$password)){
        $lowerStatus = true;
    }
    if(preg_match('/[0-9]/',$password)){
        $numberStatus = true;
    }
    if(preg_match('/[!@#$%^&*]/',$password)){
        $specialStatus = true;
    }

    if($upperStatus && $lowerStatus && $numberStatus && $specialStatus){
        return true;
    }else{
        return false;
    }
}


   
    if(isset($_POST['click'])){
        $email = $_POST['userEmail'];
        $password = $_POST['userPassword'];
        $confirmPassword = $_POST['userConfirmPassword'];

        if($email != "" && $password !="" && $confirmPassword != ""){
            if(strlen($password)>=6 && strlen($confirmPassword)>=6){
                if($password == $confirmPassword){
                    $status = checkStrongPassword($password);
                    
                    if($status){
                        $_SESSION['email'] = $email;
                        $_SESSION['password'] = password_hash($password, PASSWORD_BCRYPT);
                        echo "Sign up successful";
                    }else{
                        echo "Your password is not Strong Password! (eg,. contain A-Z,a-z,0-9,(!@#$%^&*)";
                    }
                }else{
                    echo "The password didn't match";
                }
            }else{
                echo "Password need atleast 6 character";
            }
        }else{
            echo "please fill";
        }
    }
?>