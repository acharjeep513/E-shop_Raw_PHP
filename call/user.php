<?php

class Students{
    public  function savestudentdata($data){
        $email=$data['email'];
        $link=mysqli_connect('localhost','root','','ecomarce');
        $sql="SELECT email from login where email='$email'";
        $a=mysqli_query($link,$sql);
        $b=mysqli_fetch_assoc($a);
        echo $b['email'];


    }
}
if(isset($_POST['login'])){
    Students::savestudentdata($_POST);


}

?>