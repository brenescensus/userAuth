<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];//complete this;
    $newpassword = $_POST['password'];//complete this;

    resetPassword($email, $newpassword);
}

function resetPassword($email, $nepassword){

    $input = fopen("../storage/users.csv", 'r');  //open for reading

    $output = fopen("../storage/temporary.csv", 'w'); //open for writing
    while( false !== ( $data = fgetcsv($input) ) ){  //read each line as an array

   //modify data here
   if ($data[0] == $_POST['email'] && $data[1] == $_SESSION['username']) {
      //Replace line here
      $data[1] = $_POST['password'];
      echo("SUCCESS|Password changed!");
   }

   //write modified data to new file
   fputcsv( $output, $data);
}

//close both files
fclose( $input );
fclose( $output );
    //open file and check if the username exist inside
    //if it does, replace the password
}
// "HANDLE THIS PAGE";


