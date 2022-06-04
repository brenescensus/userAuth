<?php
if(isset($_POST['submit'])){
    $username =$_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);
}
function registerUser($username,$email,$password){
$data =array(
    'name'=> $username,
    'email'=> $email,
    'password'=>md5( $password),
);
$file_open=fopen("../storage/users.csv","a");
$no_rows=count(file("../storage/users.csv"));
/*if(no_rows>1){
$no_rows=($no_rows-1)+1;
}
*/
fputcsv($file_open,$data);
fclose($file_open);
echo "user successfully registered";
//header(location:'loginn.php');
    //save data into the file 
    // echo "OKAY";
}
//echo "HANDLE THIS PAGE";


