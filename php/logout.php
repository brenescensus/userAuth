<?php
function logout(){
if(isset($_SESSION['username'])){
    $_SESSION=array();
    unset($_SESSION);
    session_destroy();
    header(location:'login.php');
}
}
logout();
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/
//echo "HANDLE THIS PAGE";
