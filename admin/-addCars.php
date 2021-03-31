<?php
include '../advanced/database.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <meta name="theme-color" content="#49AA6E"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="../styles.css">
    <link href="../css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link
        rel="stylesheet"
        href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
        integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
        crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Real News</title>
</head>
<body>
<nav class="nav-bar">
    <strong>real_news.com</strong>
    <ul>
        <li class="select-page"><a href="#">Add new Car</a></li>
    </ul>
    <button class="login-button" onclick="window.location.href='managearticles.php'">back</button>
</nav>
<div class="main-content container-fluid row" style="color: white; margin-top: 50px;" xmlns="http://www.w3.org/1999/html">


    <form action="carAdditions.php" method="post">


        <div class="input-group mb-3" hidden>
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">ID</span>
            </div>
            <input name="id" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" >
        </div>
        <!--SECTION-->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Brand</span>
            </div>
            <input name="brand" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
        </div>
        <!--SECTION-->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Model</span>
            </div>
            <input name="model" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" >
        </div>
        <!--SECTION-->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Manufacturer</span>
            </div>
            <input name="manufacturer" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" >
        </div>
        <!--SECTION-->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Production year</span>
            </div>
            <input name="productionYear" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" >
        </div>
        <!--SECTION-->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Post Date</span>
            </div>
            <input name="postDate" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" >
        </div>

        <!--SECTION-->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Price(PLN)</span>
            </div>
            <input name="price" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" >
            <div class="input-group-append">
                <span class="input-group-text">.00</span>
            </div>
        </div>
        <!--SECTION-->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Type</span>
            </div>
            <select name="type" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                <?php
                $typesreq = "SELECT * from types";
                $r = mysqli_query($connect,$typesreq);
                while ($tp = mysqli_fetch_assoc($r)){
                    $selct = ($tp['typeID'] == $typeID)? "selected" : "";
                    echo '<option '.$selct.'>'.$tp['typeName'].'</option>';
                }
                ?>
            </select>
        </div>

        <!--SECTION-->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">VIN</span>
            </div>
            <input name="vin" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" >
        </div>
        <!--SECTION-->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Used</span>
            </div>
            <select name="used" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" >
                <?php
                $optionYes = ($used == "Yes") ? "selected" : "" ;
                $optionNo = ($used == "No") ? "selected" : "" ;
                echo '<option '.$optionYes.'>Yes</option><option '.$optionNo.'>No</option>'
                ?>
            </select>
        </div>
        <!--SECTION-->
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Visible</span>
            </div>
            <select name="visible" type="text" class="form-control" aria-label="Amount (to the nearest dollar)" >
                <?php
                $igisubizoYes = ($visible == "Yes") ? "selected" : "" ;
                $igisubizoNo = ($visible == "No") ? "selected" : "" ;
                echo '<option '.$igisubizoYes.'>Yes</option><option '.$igisubizoNo.'>No</option>'
                ?>
            </select>
        </div>
        <!--SECTION-->
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Description</label>
            <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
        </div>

        <!--SECTION-->


        <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="submit">Save</button>
    </form>



</div>

</body>


