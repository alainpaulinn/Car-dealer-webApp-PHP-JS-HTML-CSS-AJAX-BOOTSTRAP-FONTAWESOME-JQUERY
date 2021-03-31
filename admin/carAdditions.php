<?php include '../advanced/database.php';

session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: ../getin.php?please_login_first");
    
}

    $carID 	=	$_POST['id'];
    $brand	=	$_POST['brand'];
    $model	=	$_POST['model'];
    $manufacturer	=	$_POST['manufacturer'];
    $productionYear	=	$_POST['productionYear'];
    $description	=	$_POST['description'];
    $postDate	=	$_POST['postDate'];
    $price	=	$_POST['price'];
    $vin	=	$_POST['vin'];
    $type	=	$_POST['type'];
    $typesreq = "SELECT * from types WHERE typename = '$type'";
    $r = mysqli_query($connect,$typesreq);
    while ($tp = mysqli_fetch_assoc($r)){
        $typeID = $tp['typeID'];
    }
    $used	=	$_POST['used'];
    $used = ($used == "Yes") ? "1" : "0" ;
    $visible	=	$_POST['visible'];
    $visible = ($visible == "Yes") ? "1" : "0" ;

    $requ="UPDATE cars SET
                      brand = '$brand',
                      model = '$model',
                      manufacturer ='$manufacturer',
                      productionYear = '$productionYear',
                      description = '$description',
                      postdate = '$postDate',
                      price = '$price',
                      vin = '$vin',
                      typeID = '$typeID',
                      used = '$used',
                      visible = '$visible'
                      WHERE carID = '$carID'";
    $requ = "INSERT INTO `cars`(`brand`, `model`, `manufacturer`, `productionYear`, `description`, `postDate`, `price`, `vin`, `typeID`, `used`, `visible`) 
    VALUES ('$brand','$model','$manufacturer','$productionYear','$description','$postDate','$price','$vin','$typeID','$used','$visible')";

    if(mysqli_query($connect,$requ)){
        $insertedcarId = $connect->insert_id;
        //header('Location: ../admin/managearticles.php?success');
        //echo $postDate;
    }
    else{
        echo "Something went wrong :(";
    }

    function reArrayFiles( $file_post){
        $file_ary = array();
        $file_count = count($file_post['name']);
        $file_keys = array_keys($file_post);

        for ($i=0; $i < $file_count; $i++) { 
            foreach ($file_keys as $key) {
                $file_ary[$i][$key] = $file_post[$key][$i];
            }
        }
        return $file_ary;
    }



    if (!empty($_FILES['image']['name'])) {
        $file = $_FILES['image'];
        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileSize = $_FILES['image']['size'];
        $fileError = $_FILES['image']['error'];
        $fileType = $_FILES['image']['type'];
        $imageRole = 1;

        $fileExt = explode('.', $fileName);
        $fileRealExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'webp', 'jfif');

        $uniqID = uniqid('',true).".".$fileRealExt;
        $fileDestination = '../pictures/carsimages/'.$uniqID;


        if (in_array($fileRealExt,$allowed)){
            if($fileError===0){
                if($fileSize<2097152){
                    if (move_uploaded_file($fileTmpName, $fileDestination)) {
                        $imageQuery = "INSERT INTO `carimages`(`carId`, `path`, `role`) VALUES ('$insertedcarId','$fileDestination','$imageRole')";
                        mysqli_query($connect,$imageQuery);
                        
                        if (!empty($_FILES['userfile'])) {
                            $file_array = reArrayFiles($_FILES['userfile']);

                            for ($i=0; $i < count($file_array); $i++) { 
                                $file_secondary = $file_array[$i];
                                $fileName_secondary = $file_array[$i]['name'];
                                $fileTmpName_secondary = $file_array[$i]['tmp_name'];
                                $fileSize_secondary = $file_array[$i]['size'];
                                $fileError_secondary = $file_array[$i]['error'];
                                $fileType_secondary = $file_array[$i]['type'];
                                $imageRole_secondary = 2;

                                $fileExt_secondary = explode('.', $fileName_secondary);
                                $fileRealExt_secondary = strtolower(end($fileExt_secondary));

                                $allowed_secondary = array('jpg', 'jpeg', 'png', 'webp', 'jfif');

                                $uniqID_secondary = uniqid('',true).".".$fileRealExt_secondary;
                                $fileDestination_secondary = '../pictures/carsimages/'.$uniqID_secondary;

                                if (in_array($fileRealExt_secondary,$allowed_secondary)){
                                    if($fileError_secondary===0){
                                        if($fileSize_secondary<2097152){
                                            if (move_uploaded_file($fileTmpName_secondary, $fileDestination_secondary)) {
                                                $imageQ= "INSERT INTO `carimages`(`carId`, `path`, `role`) 
                                                            VALUES ('$insertedcarId','$fileDestination_secondary','$imageRole_secondary')";
                                                if(mysqli_query($connect,$imageQ)){
                                                    header('Location: ../admin/managearticles.php?successAll');

                                                }
                                            }
                                            else {
                                                header('Location: ../admin/managearticles.php?coldnotmove_secondary');
                                            }
                                        }
                                        else{
                                            header('Location: ../admin/managearticles.php?verylargefile_secondary');
                                        }
                                    }
                                    else{
                                        header('Location: ../admin/managearticles.php?unknownerror_secondary');
                                    }
                                }
                                else{
                                    header('Location: ../admin/managearticles.php?unsupportedfileformat_secondary');
                                }
                            }

                        }

                        //header('Location: ../admin/managearticles.php?successmain');

                    }
                    else {
                        header('Location: ../admin/managearticles.php?coldnotmove');
                    }
                }
                else{
                    header('Location: ../admin/managearticles.php?verylargefile');
                }

            }
            else{
                header('Location: ../admin/managearticles.php?unknownerror');
            }
        }
        else{
            header('Location: ../admin/managearticles.php?unsupportedfileformat');
        }

    }
    else{
        header('Location: ../admin/managearticles.php?no_main_image_selected');
    }