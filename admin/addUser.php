<?php
include '../advanced/database.php';
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: ../getin.php?please_login_first");
    
}
$get_users = "SELECT `id`, `username`, `password`, `role` FROM `admins` WHERE `role`=2";
$usersResults = mysqli_query($connect,$get_users);
$admins="";
while($users = mysqli_fetch_assoc($usersResults)){
 $admins = $admins.'<div class="long btn btn-dark ml-2 mb-2">'.$users['username'].'   <a href="deleteAdmins.php?admDel='.$users['id'].'" class="badge badge-pill badge-danger">remove</a></div>';
}
include '../header.php'
    ?>

<body>
    <nav class="nav-bar">
        <strong>real_news.com</strong>
        <ul>
            <li class="select-page"><a href="#">Add user</a></li>
        </ul>
        <button class="btn btn-success" onclick="window.location.href='index.php'">back</button>
    </nav>
    <div class="container hepfo-gato">
        <h1>New admin registration</h1>
        <form method="POST" action="addinguser.php" class="container">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">username</label>
                <div class="col-sm-10">
                <input type="username" name ="username" class="form-control" id="inputEmail3" placeholder="username">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" name ="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                <button type="submit" name = "submit" class="btn btn-primary float-right">Register</button>
                </div>
            </div>
        </form>
        <div class="container row">
            <?php echo($admins);?>

        </div>
    </div>

</body>