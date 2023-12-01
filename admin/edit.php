
<?php
include('php-includes/check-login.php');
require('php-includes/connect.php');
$userid=$_GET['userid'];

    $account=$_GET['account'];
    $mobile=$_GET['mobile'];
    $password=$_GET['password'];
    $address=$_GET['address'];
    mysqli_query($con,"UPDATE `user` SET `password` = '$password', `mobile` = '$mobile', `address` = '$address', `account` = '$account' WHERE `user`.`id` = '$userid' ");
    echo"data updated"
?>
//thisis 