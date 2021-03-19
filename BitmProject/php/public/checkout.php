<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link rel="stylesheet" href="css/style.css">
<!--    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">-->
</head>
<body>
<?php include_once 'includes/header.php'?>
<br>
<br>
    <div align="center" class="container">

        <!--billing info-->
        <br>
        <button class="container btn btn-danger">Please Confirm Your Billing Information</button>
        <div class="card">
            <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name : "/>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" name="mobile" id="email" placeholder="Enter Valid Email: "/>
                </div>

                <div class="col-md-4">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter Valid Email: "/>
                </div>
            </div>
            <br/>
            <div class="input-group">
                <input type="text" class="form-control" name="address" id="address" placeholder="Enter Valid Address:(Where the product transfer) "/>
            </div>
            <br/>

            <div class="form-group">
                <input type="text" class="form-control" name="opinion" id="opinion" placeholder="Billing mathod "/>
            </div>
        </div>
        </div>
        <!--products-->
        <br/>
        <button class="container btn btn-danger">Please Check Your Products Which You Want To Order</button>

        <table class="table table-bordered table-hover table-striped">
            <tr>
                <th>ID</th>
                <th>Product Category</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Cost</th>
            </tr>
            <tr align="center" >
                <td>1</td>
                <td>Women Fashion</td>
                <td>Beauty Item #1</td>
                <td>$562</td>
                <td>145</td>
                <td>$1331.13</td>
            </tr>
            <tr align="center">
            <td>2</td>
            <td>Women Fashion</td>
            <td>Beauty Item #1</td>
            <td>$562</td>
            <td>154</td>
            <td>$1331.13</td>
        </tr>
            <tr align="center">
                <td>3</td>
                <td>Women Fashion</td>
                <td>Beauty Item #1</td>
                <td>$562</td>
                <td>154</td>
                <td>$1331.13</td>
            </tr>
            <tr align="center">
                <td>4</td>
                <td>Women Fashion</td>
                <td>Beauty Item #1</td>
                <td>$562</td>
                <td>154</td>
                <td>$1331.13</td>
            </tr>
            <tr align="center">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>Total Cost</td>
                <td>$561512</td>
            </tr>
        </table>




    </div>
<?php include_once 'includes/footer.php'?>
<script src="js/jquery-3.4.1.js"> </script>
<script src="js/bootstrap.bundle.min.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"> </script>
</body>
</html>