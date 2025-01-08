<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>File store</h3>
    <form action="file.php" method="post" enctype="multipart/form-data">
        IMAGE :<input type="file" name="userProfile">
        <input type="submit" value="Save" name="save">
    </form>
</body>
</html>

<?php
    if(isset($_POST['save'])){
        echo "<pre>";
        // print_r($_FILES);
        $image = $_FILES["userProfile"]['name'];
        $tmpName = $_FILES["userProfile"]['tmp_name'];
        
        $target_file = 'image/'.$image;


        if(move_uploaded_file($tmpName,$target_file)){
            move_uploaded_file($tmpName,$target_file);
            echo "success";
        }else{
            echo "error";
        }
    }
    // var_dump($image);
?>