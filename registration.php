<?php
session_start();
header('location:login.php');
$con = mysqli_connect('sql6.freesqldatabase.com', 'sql6397280', '8Zxgr2kj5k');
mysqli_select_db($con, 'sql6397280');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = " select * from userregistration where name='$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num == 1) {
    echo "Username Already Taken";
} else {
    $reg = "insert into userregistration(name,password) values ('$name','$pass')";
    mysqli_query($con, $reg);
    echo "Registration succcesful";
}
