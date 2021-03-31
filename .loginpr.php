<?PHP 
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
                echo ('<div class="alert alert-danger" role="alert">
                Invalid credentials
              </div>');
            }
        }
        
    } 
    
    else {
        header("location: getin.php?initial");
        echo 'Internal Error 404: please use the dedicated login page';
    }
    
    
?>