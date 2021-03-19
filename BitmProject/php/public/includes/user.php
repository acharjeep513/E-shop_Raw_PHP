<?php

include "DBCustomer.php";
$msg = "";
$dbCustomer = new DBCustomer();
if(isset($_POST['login'])){
    DBCustomer::getCustomers($data);
    header('Location: index.php');
    exit;


}


?>