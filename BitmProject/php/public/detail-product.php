

<?php
include "Database/DBorder.php";
$id=$_POST['id'];
$msg = "";
$dborder = new DBorder();
$dbshow=$dborder->addOrder($id);
?>

<?php
$army =array(10,14);
if(army[0]<=army[1])
{
    braek;
}
else{
    $armyDiffer=array();
    $armyDiffer=army[1]-army[0];
    echo $armyDiffer;
}
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Detailed Product</title>
    <link rel="stylesheet" href="css/style.css">
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">-->
</head>
<body>
<?php include_once 'includes/header.php'?>
<br>
<br>



<?php


$call=array();
for ( $i=0; $i <5 ; $i=i+1 ) {   

echo 'all';
}



?>
<div class="container-fluid">

    <div class="row">
        <div id="related-product" class="col-md-3">
            <div class="card">
                <div class="card-header" align="center">
                    <h4 class="text-danger">Related Product</h4>
                </div>
                <div class="card-body">
                    <form method="post">
                    <div class="card">
                        <img class="card-img-top" src="Image/4.jpg" width="350" height="220" alt="Card image">
                        <div class="card-body" align="center">
                            <strong class="card-title">Ladies Fashion</strong><br>
                            <del>Before Discount : $6846</del><br>
                            <span>After Discount : $5641</span>
                            <button href="#" class=" btn btn-danger" name="total6"><i class="fas fa-cart-plus"></i> add To Cart</button>
                        </div>
                    </form>
                    </div>
                    <div class="card">
                        <form method="post">
                        <img class="card-img-top" src="Image/5.jpg" width="350" height="220" alt="Card image">
                        <div class="card-body" align="center">
                            <strong class="card-title"><?php
                                session_start();
                                echo $_SESSION['name']


?></strong><br>
                            <del>Before Discount : $6846</del><br>
                            <span>After Discount : $5641</span>
                            <button href="#" class=" btn btn-danger" name="total7"><i class="fas fa-cart-plus"></i> add To Cart</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="product-detail" class="col-md-6">
            <div class="card">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-danger">Burberry Pink & Black</h3><br>
                        <strong class="">**********</strong><br/>
                        <strong class="text-black">Total Orders : 643135 </strong>
                    </div>
                    <div class="card-body">
                        <?php echo '<img width="150" height="150" src="data:image/jpg;base64,' . base64_encode($dbshow['qtn']) . '">' ?>
                    </div>
                    <div class="card-footer">
                        <h5 class="text-black">Customer Feedback</h5>
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulpu tate eget.
                            Sed quia consequuntur magni dolores. Id eges tas massa sem et elit.
                            Donec pede justo, fringilla vel, aliquet nec, vulpu tate eget.
                            Sed quia consequuntur magni dolores. Id eges tas massa sem et elit.
                        </p>
                        <h5 class="text-black">Order Feedback</h5>
                        <p>Donec pede justo, fringilla vel, aliquet nec, vulpu tate eget.
                            Sed quia consequuntur magni dolores. Id eges tas massa sem et elit.
                            Donec pede justo, fringilla vel, aliquet nec, vulpu tate eget.
                            Sed quia consequuntur magni dolores. Id eges tas massa sem et elit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="different-product" class="col-md-3">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-danger">Choose Different</h4>
                    <strong class="">Item Code : #361616313</strong><br><br>
                    <strong class=""><i class="fas fa-coffee"></i> Availability : In Stock </strong>
                </div>
                <div class="card-body" align="center">
                    <form  action="" method="post">
                    <h5 class="text-black"><i class="fas fa-search-dollar"></i>  Price : $64651 </h5>
                    <del><i class="fas fa-search-dollar"></i>  Before Discount : $64651</del><br><hr>

                    <select class="form-control" name="">

                        <option>Select Color</option>
                        <option name="q">Red</option>
                        <option>Blue</option>
                        <option>Green</option>
                        <option>Yellow</option>
                        <option>Sky Blue</option>
                    </select>
                    <br/>
                    <select class="form-control" name="qq">
                        <option>Select Size</option>
                        <option>Small(S)</option>
                        <option>Medium(M)</option>
                        <option>Large(L)</option>
                        <option>X-Large(XL)</option>
                        <option>X-X-Large(XXL)</option>
                    </select>
                    <br/>
                    <input type="number" class="form-control" placeholder="Quantity" name="qqq"><hr/>
                    <button href="#" class="form-control btn btn-danger" name="total"><i class="fas fa-cart-plus"></i> Add To Cart</button>
                    </form>
                </div>
                <div class="card-footer">
                    <h5>Product Description</h5>
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulpu tate eget.
                        Sed quia conseq magni dolores. Id eges tas massa sem et elitdfg dfvg ervg. dwcfvwe ecv weec wevc ewvc </p>
                    <h5>Category Description</h5>
                    <p>Donec pede justo, fringilla vel, aliquet nec, vulpu tate eget.
                        Sed quia consequuntur magni dolores. Id eges tas massa sem et elitdfg dfvg ervg.</p>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="card">
        <div class="card-header" align="center">
            <h4 class="text-danger">Upsell Product With Great Discount</h4>
        </div>
        <div class="card-body">
            <form method="post">
            <div class="row">
                <div class="col-md-2">
                    <div class="card">
                        <img class="card-img-top" src="Image/thumb-box3.png" width="350" height="220" alt="Card image">
                        <div class="card-body" align="center">
                            <strong class="card-title">Ladies Fashion</strong><br>
                            <del>Before : $6846</del><br>
                            <span>Now : $5641</span>
                            <button href="#" class=" btn btn-danger" name="total0"><i class="fas fa-cart-plus"></i> add To Cart</button>
                        </div>
                    </div>
            </form>
                </div>
                <div class="col-md-2">
                    <form method="post">
                    <div class="card">
                        <img class="card-img-top" src="Image/thumb-box4.png" width="350" height="220" alt="Card image">
                        <div class="card-body" align="center">
                            <strong class="card-title">Ladies Fashion</strong><br>
                            <del>Before : $6846</del><br>
                            <span>Now : $5641</span>
                            <button href="#" class=" btn btn-danger" name="total1"><i class="fas fa-cart-plus"></i> add To Cart</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-2">
                    <form method="post">
                    <div class="card">
                        <img class="card-img-top" src="Image/thumb-box5.png" width="350" height="220" alt="Card image">
                        <div class="card-body" align="center">
                            <strong class="card-title">Ladies Fashion</strong><br>
                            <del>Before : $6846</del><br>
                            <span>Now: $5641</span>
                            <button href="#" class=" btn btn-danger" name="total2"><i class="fas fa-cart-plus"></i> add To Cart</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-2">
                    <form method="post">


                    <div class="card">
                        <img class="card-img-top" src="Image/thumb-box6.png" width="350" height="220" alt="Card image">
                        <div class="card-body" align="center">
                            <strong class="card-title">Ladies Fashion</strong><br>
                            <del>Before : $6846</del><br>
                            <span>Now : $5641</span>
                            <button href="#" class=" btn btn-danger" name="total3"><i class="fas fa-cart-plus"></i> add To Cart</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-2">
                    <form method="post">
                    <div class="card">
                        <img class="card-img-top" src="Image/thumb-box1.png" width="350" height="220" alt="Card image">
                        <div class="card-body" align="center">
                            <strong class="card-title">Ladies Fashion</strong><br>
                            <del>Before : $6846</del><br>
                            <span>Now : $5641</span>
                            <button href="#" class=" btn btn-danger" name="total4"><i class="fas fa-cart-plus"></i> add To Cart</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="col-md-2">
                    <form method="post">
                    <div class="card">
                        <img class="card-img-top" src="Image/thumb-box2.png" width="350" height="220" alt="Card image">
                        <div class="card-body" align="center">
                            <strong class="card-title">Ladies Fashion</strong><br>
                            <del>Before : $6846</del><br>
                            <span>Now : $5641</span>
                            <button href="#" class=" btn btn-danger" name="total5"><i class="fas fa-cart-plus"></i> add To Cart</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
<?php include_once 'includes/footer.php'?>
<script src="js/jquery-3.4.1.js"> </script>
<script src="js/bootstrap.bundle.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"> </script>
</body>
</html>