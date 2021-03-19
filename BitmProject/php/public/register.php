<?php

include "Database/DBCustomer.php";
$msg = "";
$dbCustomer = new DBCustomer();

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    session_start();
    $_SESSION['name']="user";

    if (empty($name)) {
        $msg = $msg . "Supplier name must be required";
    }
    if (empty($email)) {
        $msg = $msg . "<br/>Supplier email must be required";
    }
    if (empty($contact)) {
        $msg = $msg . "<br/>Supplier contact must be required";
    }
    if (empty($address)) {
        $msg = $msg . "<br/>Supplier address must be required";
    }
    if (empty($password)) {
        $msg = $msg . "<br/>Supplier salary must be required";
    }
    if ($msg == "") {
        if($dbCustomer->addCustomer($name,$email,$contact,$address,$password))
            $msg="This Supplier is successfully added";
    }
}
?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include_once 'includes/header.php'?>

    <div class="container" align="center">
        <br/>
        <br/>
        <h4>Registration Form</h4>
        <div class="card col-md-5">
            <form method="post" action="index2.php">
            <div class="card-body">
                <div class="form-group">
                    <label>Enter Full Name</label>
                    <input type="text" class="form-control" name="name" id="name"/>
                </div>
                <div class="form-group">
                    <label>Enter Valid email Address</label>
                    <input type="text" class="form-control" name="email" id="address"/>
                </div>
                <div class="form-group">
                    <label>Enter Valid Contact</label>
                    <input type="text" class="form-control" name="contact" id="contact"/>
                </div>
                <div class="form-group">
                    <label>Enter  Address</label>
                    <input type="email" class="form-control" name="address" id="email1"/>
                </div>
                <div class="form-group">
                    <label>Enter Valid Password</label>
                    <input type="text" class="form-control" name="password" id="password1"/>
                </div>

                <div class="form-group">
                    <button name="add" type="submit" class="form-control  btn btn-danger"> <i class="fas fa-cart-plus"></i>Register</button>


                </div>
            </div>
            </form>
        </div>
    </div>
<?php include_once 'includes/footer.php'?>
<script src="js/jquery-3.4.1.js"> </script>
<script src="js/bootstrap.bundle.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"> </script>

</body>
</html>