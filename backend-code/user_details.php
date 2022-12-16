<?php require_once('./db_connection.php');
require_once("./sess.php");
if(isset($_SESSION["logged_in"])){
    if($_SESSION["logged_in"]=="true"){
        $session_token = $_POST["SessionToken"];
   
        $sql = "select * from details_user where session_token = '$session_token';";
        $result = mysqli_query($connection, $sql);
        if($result){
        $row = mysqli_fetch_assoc($result);
        echo $row['first_name']. " ". $row['last_name']. " ". $row['college'];
        }  
    }
}
?>