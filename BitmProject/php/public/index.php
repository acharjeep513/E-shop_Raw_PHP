<?php
include "Database/DBProduct.php";
$msg = "";
$dbProduct = new DBProduct();
$productRes=$dbProduct->getProduct();
?>

<?php

include "Database/DBorder.php";
$msg = "";
$dbOrder = new DBorder();

if (isset($_POST['add'])) {
    $id = $_POST['id'];






    if ($msg == "") {
        if($dbOrder->addOrder($id))
            $msg="This Supplier is successfully added";
    }
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"> </script>

</head>
<body style="font-family: Serif">
<?php include_once 'includes/header.php'?>
<?php include_once 'includes/slider.php'?>
<br/>
<br/>
<div class="container-fluid">
    <br/>
    <div class="row">

      <?php  foreach ($productRes as $values) { ?>
        <div class="col-md-3">
            <div class="card-deck">
                <form method="post" action="detail-product.php">
                <div class="card-body">
                    <h5>
                       <?php echo '<img width="220" height="150" src="data:image/jpg;base64,' . base64_encode($values['qtn']) . '">' ?>
                        <p>
                            <?php echo $values['name']; ?></br>
                            <input type="hidden" name="id" value="<?php echo $values['id'] ?>">
                        </p>
                        <button href="#" class=" btn btn-success" name="add" style="width: 250px"><i class="fas fa-cart-plus"></i> add To Cart</button>
                    </h5>
                </div>
                </form>
            </div>
        </div>
        <?php }?>
    </div>
</div>
<?php include_once 'includes/footer.php'?>
<script src="js/jquery-3.4.1.js"> </script>
<script src="js/bootstrap.bundle.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"> </script>
</body>
</html>