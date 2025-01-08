<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Client Site</h1>
    
    <!-- <a href="server.php?name=SawIsaac&job=programmer&address=Yangon">Server Site</a> -->
    <form action="server.php" method="post" enctype="multipart/form-data">
        First Name : <input type="text" name="fname"><br>
        Second Name : <input type="text" name="sname"><br>

        <input type="radio" value="m" id="male" name="gender"><label for="male">Male</label>
        <input type="radio" value="f" id="female" name="gender"><label for="female">Female</label>
        <br>
        <input type="file" name="Image">
        <br>
        <input type="submit" name="click" value="Click to send">
    </form>
</body>
</html>


