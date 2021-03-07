<?php
session_start();
$con = mysqli_connect('sql6.freesqldatabase.com', 'sql6397280', '8Zxgr2kj5k');
mysqli_select_db($con, 'sql6397280');
$name = $_POST['user'];
$pass = $_POST['password'];
$s = " select * from userregistration where name='$name' && password='$pass'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if ($num == 1) {
    $_SESSION['username'] = $name;
    header('location:home.php');
} else {
    header('lcation:login.php');
}
