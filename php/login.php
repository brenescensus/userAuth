
<?php
//include_once loginn.php;
session_start();
$error=array();

echo session_id();

if(isset($_POST['submit'])){
    $email =$_POST['email'];
    $password = $_POST['password'];

loginUser($email, $password);
}
success=false;
function loginUser($email,$password){
    $file_handle=fopen("storage/users.csv",'r');
    while (($data = fgetcsv($file_handle))!== FALSE) {
        if ($data[0] == $email && $data[1] == $password) {
            success=true;
            //$_SESSION['username']=$username;
            //$_SESSION ['success']  = "you have logged in successfully";
            header(location:'dashboard.php');
        }
    }
    /*
    Finish this function to check if username and password 
    from file match that which is passed from the form
    */
}
?>
