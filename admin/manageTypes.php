<?php
include '../advanced/database.php';
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: ../getin.php?please_login_first");
    
}


$get_types = "SELECT `typeID`, `typeName`, `description`, `typeImage` FROM `types`";
$typeResults = mysqli_query($connect,$get_types);
$types="";
while($typ = mysqli_fetch_assoc($typeResults)){
 $types = $types.'<div class="long btn btn-dark ml-2 mb-2">'.$typ['typeName'].'   <a href="deleteTypes.php?typDel='.$typ['typeID'].'" class="badge badge-pill badge-danger">remove</a></div>';
}
include '../header.php'
    ?>

<body>
    <nav class="nav-bar">
        <strong>real_news.com</strong>
        <ul>
            <li class="select-page"><a href="#">Add a car type</a></li>
        </ul>
        <button class="btn btn-success" onclick="window.location.href='index.php'">back</button>
    </nav>
    <div class="container hepfo-gato">
        <h1>New type registration</h1>
        <form method="POST" action="addingType.php" class="container" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlFile1">Main Car</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Type Name</label>
                <div class="col-sm-10">
                <input type="username" name ="type" class="form-control" id="inputEmail3" placeholder="Type name">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputtype" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="text" name ="description" class="form-control" id="inputtype" placeholder="Description">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" name = "submit" class="btn btn-primary float-right">Register</button>
                </div>
            </div>
        </form>
        <div class="container row">
            <?php echo($types);?>

        </div>
    </div>

</body>