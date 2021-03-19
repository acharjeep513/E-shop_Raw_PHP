<?php

session_start();
if($_SESSION['name']!='admin@yahoo.com'){
    header('Location: index.php');
}

?>


<?php
include "Database/DBProduct.php";
$msg = "";
$dbProduct = new DBProduct();
$productRes=$dbProduct->getProduct();
?>
<?php
if (isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    if ($dbProduct->deleteProduct($id)) {
        $msg = "Category successfully deleted...!!!!!!";
        $productRes=$dbProduct->getProduct();
    }
}
?>



<?php
if (isset($_POST['update'])) {
$id = $_POST['id'];
$name = $_POST['name'];
$beforeDiscount = $_POST['beforeDiscount'];
$afterDiscount = $_POST['afterDiscount'];
$image = $_FILES['image']['tmp_name'];
if (!empty($image))
$image = file_get_contents($image);
$unit = $_POST['unit'];
$qtn = $_POST['quantity'];
if (empty($name)) {
$msg = $msg . "Product name must be required";
}
if (empty($beforeDiscount)) {
$msg = $msg . "<br/>Before discount must be required";
}
if (empty($afterDiscount)) {
$msg = $msg . "<br/>After discount must be required";
}
if (empty($qtn)) {
$msg = $msg . "<br/>Quantity must be required";
}
if (empty($image)) {
$msg = $msg . "<br/>Image must be required";
}
if ($msg == "") {
if ($dbProduct->updateProduct($id, $name, $beforeDiscount,$afterDiscount,$image,$unit,$qtn)) {
$msg = "Product successfully update..!!!!";
$productRes=$dbProduct->getProduct();
}
}
}
?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="css/style.css">
    <!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">-->
</head>
<body>
<?php include_once 'Admin/adminnev.php'?>


<div class="container" align="center">
    <br>
    <br>
    <img class="container" align="center" width="1110" height="220" src="Image/user2.jpg">

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>PRODUCT_CODE</th>
            <th>PRODUCT_NAME</th>
            <th>PRODUCT_DETAIL</th>
            <th>CATAGORY</th>
            <th>PRICE</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        <?php foreach ($productRes as $values) { ?>
            <tr align="center" >
                <td><?php echo $values['category'];?></td>
                <td><?php echo $values['name'];?></td>
                <td><?php echo '<img width="150" height="150" src="data:image/jpg;base64,' . base64_encode($values['qtn']) . '">' ?></td>
                <td><?php echo $values['unit'];?></td>
                <td><?php echo $values['afterDiscount'];?></td>
                <td>
                    <?php echo "<a class='btn btn-success' href='product-show.php?action=edit&id=" . $values['id'] . "'>Update</a>"; ?>
                </td>
                <td>
                    <?php echo "<a class='btn btn-danger' href='product-show.php?action=delete&id=" . $values['id'] . "'>Delete</a>"; ?>
                </td>
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