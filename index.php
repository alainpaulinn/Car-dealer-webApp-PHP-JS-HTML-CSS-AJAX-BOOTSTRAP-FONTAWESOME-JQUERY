<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <meta name="theme-color" content="#49AA6E"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="styles.css">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>SellCar-Home</title>
</head>
<body>
    <nav class="nav-bar">
        <strong>SellCar.com</strong>
        <ul>
            <li class="select-page"><a href="#">Home</a></li>
            
        </ul>
        <button class="login-button" onclick="window.location.href='getin.php'">Admin</button>
    </nav>
    
    <div class="main">
        <section class="side-bar">
            <?php 
            include 'advanced/database.php';
                $types ='';
                $typeReq = "SELECT `typeID`, `typeName`, `description`, `typeImage` FROM `types`";
                $typeResults = mysqli_query($connect, $typeReq);
                $select = 1;
                $selectedOrNot='';
                while($res = mysqli_fetch_assoc($typeResults)){
                    $selectedOrNot = ($select===1)? "select-section" : "";
                    $typename	= $res['typeName'];
                    $typeimage = $res['typeImage'];
                    $types = $types.'<button class="cars-section '.$selectedOrNot.' " id="'.$typename.'" onclick="sectionClick(this)"><p>'.$typename.'</p> <img class="icon" src="'.$typeimage.'" alt=""></button>';
                
                    $select = $select + 1;
                }
            
                echo ($types);
            
            ?>
        </section>
        <section class="main-content">

        </section>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="script.js"></script>
<script>
    categories();
</script>
</html>