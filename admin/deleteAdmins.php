<?php
include '../advanced/database.php';
if(isset($_GET['admDel'])){
    $id = $_GET['admDel'];
    $req = "DELETE FROM `admins` WHERE `id`= '$id'";
    if (mysqli_query($connect,$req)) {
        header("Location: addUser.php?deleted");
    }
    else{
        header("Location: addUser.php?error");
    }
}