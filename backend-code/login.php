<?php require_once('./db_connection.php');
require_once("./sess.php");
    $username_or_email = $_POST["username_or_email"];
    $password = $_POST["password"];
    $_SESSION['username_or_email'] = $username_or_email;
    $_SESSION['password'] = $password;
    $str = "";
    $sql = "select * from details_user where username_or_email = '$username_or_email' and pass = '$password';";
    $result = mysqli_query($connection, $sql);
    if($result){
       $_SESSION['logged_in'] = "true";
       $row = mysqli_fetch_assoc($result);
       $char = (string)rand();
       $str = $char.$row['first_name'].$row['last_name'].$row["username_or_email"].$row["pass"].$row["college"];
       $str = sha1($str);
    }

    $sql = "update details_user set session_token = '$str', stat='active' where username_or_email =  '$username_or_email' and pass = '$password';";
    $result = mysqli_query($connection, $sql);
    if($result){
        echo $str;
}
?>  


