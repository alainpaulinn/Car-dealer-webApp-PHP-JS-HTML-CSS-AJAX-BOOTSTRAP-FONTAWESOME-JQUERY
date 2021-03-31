<?php include '../advanced/database.php';
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: ../getin.php?please_login_first");
    
}
if (isset($_POST['submit'])){


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
    if(mysqli_query($connect,$requ)){
        header('Location: ../admin/managearticles.php?success');
        //echo $postDate;
    }
    else{
        echo "Something went wrong :(";
    }



}