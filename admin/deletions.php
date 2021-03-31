<?php include '../advanced/database.php';
if (isset($_GET['cardelete'])){
    $todelete = $_GET['cardelete'];
    $requ="DELETE FROM `cars` WHERE `carID` = $todelete";
    if (mysqli_query($connect,$requ)){
        header('Location: managearticles.php?deleted');
    }

}