<?php
include 'database.php';

if(isset($_POST['category'])){

    $type = $_POST['category']; 
    $typeID ="";
    $typeReq = "SELECT * FROM types WHERE typename='$type'";
    $typeResults = mysqli_query($connect, $typeReq);
    
    while($res = mysqli_fetch_assoc($typeResults)){
        $typeID	= $res['typeID'];
    }

    $ask = "SELECT * FROM cars WHERE typeID='$typeID' AND visible=1";
    $askResults = mysqli_query($connect,$ask);

    $cars = '';
    while($row = mysqli_fetch_assoc($askResults)){
        

        $carID = $row['carID']; 
        $brand = $row['brand'];
        $model = $row['model'];
        $manufacturer = $row['manufacturer'];
        $productionYear = $row['productionYear'];
        $description = $row['description'];
        $postDate = $row['postDate'];
        $price = $row['price'];
        $vin = $row['vin'];
        $typeID = $row['typeID'];
        $used = $row['used'];
            $used = ($used==1)? "Yes" : "No" ;
        $visible = $row['visible'];

        $imagepath='';

        $pull = "SELECT * FROM `carimages` WHERE `carId`='$carID' AND `role`=1";
        $pullResults = mysqli_query($connect, $pull);
        while($pathes = mysqli_fetch_assoc($pullResults)){
            $imagepath	= $pathes['path'];
        }

        $cars = $cars.'
        <div class="news-card">
                    <div class="news-image"><img src="pictures/'.$imagepath.'" alt="'.$brand.' '.$model.'"></div>
                    <div class="card-content">
                        <div class="date-cost"> <div class="post-date">Posted: '.$postDate.'</div> <div class="cost">'.$price.' PLN</div></div>
                        <div class="post-title">'.$brand.' '.$model.'</div>
                        <div class="news">
                        <p>Brand: '.$brand.'</p>
                        <p>Model: '.$model.'</p>
                        <p>Manufacturer: '.$manufacturer.'</p>
                        <p>Production year: '.$productionYear.'</p>
                        <p>Used: '.$used.'</p>
                        <p>VIN: '.$vin.'</p>
                        </div>
                        <button class="fin-out">Description <i class="fas fa-angle-double-right"></i></button>
                    </div>
                </div>
        
        ';
        
    }
    print_r($cars);
    
}
