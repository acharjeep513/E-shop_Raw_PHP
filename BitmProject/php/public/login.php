<?php
session_start();
if(isset($_SESSION['name'])){
    header('Location: index.php');
}
?>




<?php

$msg = "";
class Students{
    public  function savestudentdata($data){
        $email=$data['email'];
        $password=$data['password'];
        $link=mysqli_connect('localhost','root','','db_ecomarce');
        $sql="SELECT email from customer where email='$email' and password='$password'";
        $a=mysqli_query($link,$sql);
        if($email=='admin@yahoo.com'){
            header('Location: admin.php');
            session_start();
            $_SESSION['name']=$email;
        }
        else if( $b=mysqli_fetch_assoc($a)) {
            session_start();
            $_SESSION['name']=$b['email'];
           header('Location: index2.php');

       }
       else{
           header('Location: login.php');
       }


        $_SESSION['id']=$password;
    }
}
if(isset($_POST['login'])){
    Students::savestudentdata($_POST);


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
<?php include_once 'includes/header.php'?>


    <div class="container" align="center">
        <br/>
        <br/>
        <h4>User Login Form</h4>
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

                <a href="admin-log.php">Admin Pannel</a>
                </form>
            </div>
        </div>
    </div>

<?php include_once 'includes/footer.php'?>
<script src="js/jquery-3.4.1.js"> </script>
<script src="js/bootstrap.bundle.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"> </script>
</body>
</html>