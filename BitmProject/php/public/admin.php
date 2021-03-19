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

    if (isset($_POST['add'])) {
        $category = $_POST['category'];
        $name = $_POST['name'];
        $unit = $_POST['unit'];
        $beforeDiscount = $_POST['beforeDiscount'];
        $afterDiscount = $_POST['afterDiscount'];
        $qtn = $_FILES['image']['tmp_name'];
        if (!empty($qtn))
            $qtn = file_get_contents($qtn);

        if (empty($category)) {
            $msg = $msg . "product catagory must be required";
        }
        if (empty($name)) {
            $msg = $msg . "<br/>product name must be required";
        }

        if (empty($beforeDiscount)) {
            $msg = $msg . "<br/>product brfore discount price must be required";
        }
        if (empty($afterDiscount)) {
            $msg = $msg . "<br/>product after discount must be required";
        }
        if (empty($qtn)) {
            $msg = $msg . "<br/>product image must be required";
        }

        if ($msg == "") {
            if ($dbProduct->addProduct($category, $name, $unit, $beforeDiscount, $afterDiscount, $qtn))
                $msg = "This product is successfully added";
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
<?php include_once 'Admin/adminnev.php'?>

<div class="container" align="center">
    <br/>
    <br/>
    <h4>Admin pannel</h4>
    <div class="card col-md-5">
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data" >
            <div class="form-group" >
                <?php
                if ($msg != "") {
                    echo '<div class="alert alert-danger">' . $msg . '</div>';
                }
                ?>
                <label>Product code</label>
                <input type="text" class="form-control" name="category" id="category"/>
            </div>
            <div class="form-group">
                <label>Product name</label>
                <input type="text" class="form-control" name="name" id="name"/>
            </div>
            <div class="form-group">
                <label>product detail</label>
                <input type="text" class="form-control" name="unit" id="unit"/>
            </div>
            <div class="form-group">
                <label>caagory</label>
                <input type="text" class="form-control" name="beforeDiscount" id="beforeDiscount"/>
            </div>
            <div class="form-group">
                <label>price</label>
                <input type="text" class="form-control" name="afterDiscount" id="afterDiscount"/>
            </div>
                <div class="form-group">
                    <label>price</label>
                    <input type="file" class="form-control" name="image" id="qtn"/>
                </div>



            <div class="form-group">
                <button name="add" type="submit" class="btn btn-danger"> Register</button>

            </div>
                <a href="product-show.php">show added product</a>
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
?>