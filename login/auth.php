<?php
if (isset($_POST['login_btn'])) {
   login();
}
     function login(){

     $username = $_POST['username'];
     $pass = $_POST['passd'];
     $password = md5( $pass);
     $connecting = mysqli_connect("localhost" , "root" , "12012" , "iamawriter");

     $qry = "select * from admin where username ='$username' and password = '$pass' ";
     $exec = mysqli_query($connecting ,$qry )or die(mysqli_error($connecting));
    //  $user = 

     if(mysqli_num_rows($exec) == 1){
        session_start();
        $user_logged_in = mysql_fetch_array($exec);

        $_SESSION['username'] = $user_logged_in['username'];
        
        header("Location:../dashboard");
     }
     else {
         header("Location:index.php");
     }
     }
?>  