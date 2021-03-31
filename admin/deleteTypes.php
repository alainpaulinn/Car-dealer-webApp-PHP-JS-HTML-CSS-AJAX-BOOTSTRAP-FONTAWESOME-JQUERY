<?php
include '../advanced/database.php';
if(isset($_GET['typDel'])){
    $id = $_GET['typDel'];
    $req = "DELETE FROM `types` WHERE `typeID`= '$id'";
    if (mysqli_query($connect,$req)) {
        header("Location: manageTypes.php?deleted");
    }
    else{
        header("Location: manageTypes.php?error");
    }
}