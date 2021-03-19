



<?php
session_start();
$msg = "";
if( isset($_POST['login']) ) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email =="admin@yahoo.com" && $password =="12345") {
        $_SESSION["USER"]="admin";
        header('Location: admin.php');
        exit;
    }
    else {
        $msg = "You entered wrong information...!!!";
    }
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include_once 'Admin/admin-nav2.php'?>

<div class="container" align="center">
    <br/>
    <br/>
    <h4>Admin Login Form</h4>
    <div class="card col-md-4">
        <div class="card-body">
            <form action="" method="post">
                <div class="form-group">
                    <label>Enter Valid Email Address</label>
                    <input type="email" class="form-control" name="email" id="email1"/>
                </div>
                <div class="form-group">
                    <label>Enter Valid Password</label>
                    <input type="password" class="form-control" name="password" id="password1"/>
                </div>
                <div class="form-group">
                    <label>Please Select User Type</label>
                    <input type="text" class="form-control" name="user" id="user1"/>
                </div>
                <div class="form-group">
                    <button name="login" type="submit" class="btn btn-danger" >Login</button>

                </div>

                <a href="admin.php">Admin Pannel</a>
            </form>
        </div>
    </div>
</div>
<br/><br/><br/><br/>
<?php include_once 'includes/footer.php'?>
<script src="js/jquery-3.4.1.js"> </script>
<script src="js/bootstrap.bundle.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"> </script>
</body>
</html>