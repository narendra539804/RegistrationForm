<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <a class="float-right" href="logut.php"><button class="btn btn-primary">Logout</button></a>
        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
    </div>
</body>

</html>