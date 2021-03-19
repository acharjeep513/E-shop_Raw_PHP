
<nav class="btn btn-lg nav navbar-expand-sm bg-primary navbar-light sticky-top col"  >
    <div class="container">
        <button type="button" class="navbar-toggler" data-target="#manu" data-toggle="collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div  class="collapse navbar-collapse" id="manu">
            <ul class="navbar-nav mr-auto">
                <li ><a style="color: white" href="admin.php" class="nav-link"><strong>ADD PRODUCT</strong></a></li>
                <ul></ul>

                <li><a style="color: white" href="detail-product.php" class="nav-link"><strong>Product</strong></a></li>
                <ul></ul>
                <li><a style="color: white" href="cart.php" class="nav-link"><strong>Search</strong></a></li>
                <ul></ul>
                <li><a style="color: white" href="cart.php" class="nav-link"><strong>Cart</strong></a></li>
                <ul></ul>

                <li><a style="color: white" href="login.php" class="nav-link"><strong>Sign In</strong></a></li>
                <ul></ul>

                <li><a style="color: white" href="register.php" class="nav-link"><strong><?php  echo $_SESSION['name'];       ?></strong></a></li>
                <ul></ul>

            </ul>
        </div>
    </div>
</nav >