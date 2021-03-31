<?php 
include '../advanced/database.php';
if (isset($_POST['submit'])) {
    $typeName = $_POST['type'];
    $description = $_POST['description'];

    if (!empty($_FILES['image']['name'])) {
        $file = $_FILES['image'];
        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];
        $fileError = $_FILES['image']['error'];
        $fileType = $_FILES['image']['type'];


        $fileExt = explode('.', $fileName);
        $fileRealExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'webp', 'jfif');

        $uniqID = uniqid('',true).".".$fileRealExt;
        $fileDestination = 'pictures/typeImage/'.$uniqID;
        $front = "../";

        if (in_array($fileRealExt,$allowed)){
            if($fileError===0){
                if($fileSize<2097152){
                    if (move_uploaded_file($fileTmpName, $front.$fileDestination)) {

                        $ask = "INSERT INTO `types`(`typeName`, `description`, `typeImage`) VALUES ('$typeName','$description','$fileDestination')";
                        
                        $askResults = mysqli_query($connect, $ask);
                        header('Location: manageTypes.php?success');
                    }
                    else{
                        echo '1';
                    }
                }
                else{
                    echo '2';
                }
            }
            else{
                echo '3';
            }
        }else{
            echo '4';
        }
    }
    else{
        echo '5';
    }
} 

else {
    echo '6';
}

    
