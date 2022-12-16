<?php require_once('./db_connection.php');
require_once("./sess.php");
if(isset($_SESSION["logged_in"])){
    if($_SESSION["logged_in"] == "true"){
        $username_or_email = $_SESSION['username_or_email'];
        $password = $_SESSION['password'];
        $sql = "update details_user set session_token = NULL, stat='inactive' where username_or_email =  '$username_or_email' and pass = '$password';";
        $result = mysqli_query($connection, $sql);
        if($result){
            echo "logout successful";
        }
        session_unset();
        session_destroy();
    }  
}

?>