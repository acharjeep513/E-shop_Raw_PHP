










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/style.css">
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">-->
</head>
<body>
<?php
session_start();
include_once 'Admin/admin-nav3.php'?>
<div class="container" align="center">
    <br>
    <br>
    <img class="container" align="center" width="1110" height="220" src="Image/user2.jpg">

    <table class="table table-bordered table-hover table-striped">
            <tr align="center">
                <th>ID</th>
                <th align="center">    PRODUCT NAME</th>
                <th align="center">QUANTITY</th>
                <th>Price</th>

            </tr>
        <?php  while ($b=mysqli_fetch_assoc($a)){ ?>
            <tr align="center" >
                <td><?php echo $b['id'];?></td>
                <td><?php echo $b['p_name'];?></td>
                <td><?php echo $b['catagory'];?></td>
                <td><?php echo $b['price'];?></td>
            </tr>
          <?php }?>
        </table>
    <a href="checkout.php" class="container btn btn-danger">Proceed To Checkout</a>

</div>
<?php include_once 'includes/footer.php'?>
<script src="js/jquery-3.4.1.js"> </script>
<script src="js/bootstrap.bundle.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"> </script>
</body>
</html>