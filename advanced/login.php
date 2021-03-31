<?php
include 'database.php';
$result='';
if(isset($_POST['admin'])){

    $user = $_POST['category']; 
    $userCredArray = explode(",",$user);




    }

    $ask = "SELECT * FROM admins WHERE username= '$userCredArray[0]'";
    $askResults = mysqli_query($connect, $ask);
    while($row = mysqli_fetch_assoc($askResults)){
        $username	= $row['username'];
        if ($userCredArray[1]==$row['password'];) {
            $result = "true";
        } else {
            $result = "false";
        }
        
    }
    
}
else{
    $result = "false";
}
echo($result);
