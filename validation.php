<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
    <?php
        // $errorName = "";
        // $errorEmail = "";
        // $errorPhone = "";
        // $errorAddress = "";
        // if(isset($_POST['save'])){
        //     // $errorName = "Name Required";
        //     // $errorEmail = "Email Required";
        //     // $errorPhone = "Phone Number Required";
        //     // $errorAddress = "Address Required";
            
        //     $name = "";
        //     $email = "";
        //     $phone = "";
        //     $address = "";
            
            
            
        //     if($_POST['name'] == "" || $_POST['name'] == null || empty($_POST['name'])){
        //         $errorName = "Name Required";
        //     }else{
        //         $name = $_POST['name'];
        //     }
        //     if($_POST['email'] == "" || $_POST['email'] == null || empty($_POST['email'])){
        //         $errorEmail = "Email Required";
        //     }else{
        //         $email = $_POST['email'];
        //     }
        //     if($_POST['phone'] == "" || $_POST['phone'] == null || empty($_POST['phone'])){
        //         $errorPhone = "Phone Number Required";
        //     }else{
        //         $phone = $_POST['phone'];
        //     }
        //     if($_POST['address'] == "" || $_POST['address'] == null || empty($_POST['address'])){
        //         $errorAddress = "Address Required";
        //     }else{
        //         $address = $_POST['address'];
        //     }
            
        //     if($name !="" && $email != "" && $phone != "" && $address != ""){
        //         echo $name ."<br>";
        //         echo $email . "<br>";
        //         echo $address . "<br>";
        //         echo $phone . "<br>";
        //     }
            
        //}
    ?>
    <?php
    $errorMessage = [
        'name' => '',
        'email' => '',
        'phone' => '',
        'address' => ''
    ];

    $formData = [
        'name' => '',
        'email' => '',
        'phone' => '',
        'address' => ''
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($formData as $key => $value) {
            $formData[$key] = trim($_POST[$key]);

            if (empty($formData[$key])) {
                $errorMessage[$key] = ucfirst($key) . ' is required';
            }
        }

        if (!empty($formData['email']) && !filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
            $errorMessage['email'] = 'Invalid email format';
        }

        if (empty(array_filter($errorMessage))) {
            foreach ($formData as $key => $value) {
                echo $value . "<br>";
            }
        }
    }
?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6 offset-3 shadow m-3">
                <form action="validation.php" method="post">
                <div class="m-3 p-3" >
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name">
                    <small class="text-danger"><?php echo $errorMessage['name']; ?></small>
                </div>
                <div class="m-3 p-3" >
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
                    <small class="text-danger"><?php echo $errorMessage['email']; ?></small>
                </div>
                <div class="m-3 p-3" >
                    <label for="">Phone</label>
                    <input type="number" name="phone" class="form-control" placeholder="08011454">
                    <small class="text-danger"><?php echo $errorMessage['phone']; ?></small>
                </div>
                <div class="m-3 p-3" >
                    <label for="">Address</label>
                    <textarea name="address" id="" cols="30" rows="5" placeholder="Enter Address" class="form-control"></textarea>
                    <small class="text-danger"><?php echo $errorMessage['address']; ?></small>
                </div>
                <div class="m-3 p-3 float-end" >
                    <input type="submit" name="save" value="Save" class="btn bg-info text-white">
                </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.1.0/mdb.umd.min.js"
></script>