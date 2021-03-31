<?php 
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: ../getin.php?please_login_first");
    
}
include '../advanced/database.php';
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $role = 2;

    $ask = "INSERT INTO `admins`(`username`, `password`, `role`)
    VALUES ('$username','$password','$role')";
    $askResults = mysqli_query($connect, $ask);
    header('Location: adduser.php?success');
} else {
    echo 'error';
}

    
