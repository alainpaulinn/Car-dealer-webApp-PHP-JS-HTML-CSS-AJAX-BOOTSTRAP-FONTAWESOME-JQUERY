<?php 
function sessionStart($life,$path,$doamin,$secure,$httponly){
    session_set_cookie_params($life,$path,$doamin,$secure,$httponly);
    session_start();
}
?>