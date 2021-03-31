<?php

$loginError = "";

include 'advanced/session.php';
session_start();
$loginError = "";
$username = "";
$passwordPlt = "";
    include 'advanced/database.php';
    if (isset($_POST['submit'])) {
        
        $username = $_POST['username'];
        $passwordPlt = md5($_POST['password']);

        $usersAsk = "SELECT`username`, `password` FROM `admins` WHERE `username`= '$username' AND `password`='$passwordPlt'";
        $Askresults = mysqli_query($connect,$usersAsk);
        $count = 1;
        while($users = mysqli_fetch_assoc($Askresults)){
            if(($username === $users['username']) && ($passwordPlt === $users['password'])){
                
                    sessionStart(0,'/','localhost',false,true);
                    $_SESSION['id'] = uniqid('',true);
                    $_SESSION['uname'] = $username;

                    header("location: admin/");
                

            }
            else{
                header("location: getin.php?username");
                $loginError = '<div class="alert alert-danger" role="alert">
                Invalid credentials
              </div>';
            }
        }
        
    } 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <meta name="theme-color" content="#49AA6E"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="styles.css">
    <!--<link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
      integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
      crossorigin="anonymous"
    />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>SellCar-Home</title>
</head>
    <div class="overlay-login">
        
        <div class="login container">
            <div class="nav-bar2">
                <strong class="loginTitle">SellCar.com</strong>
            </div>
            <form method="POST" action="getin.php">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" id="staticEmail" placeholder="email@example.com">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mb-2">Submit</button>
                <?php echo($loginError);?>

            </form>
            

        </div>
        
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="script.js"></script>

</html>