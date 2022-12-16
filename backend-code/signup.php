<?php require_once('./db_connection.php');
    $first_name = $_POST["FirstName"];
    $last_name = $_POST["LastName"];
    $college = $_POST["college"];
    $username_or_email = $_POST["username_or_email"];
    $password = $_POST["password"];
    $sql = "INSERT INTO details_user (first_name, last_name, college, username_or_email, pass, session_token, stat) VALUES ('${first_name}', '${last_name}', '${college}', '${username_or_email}', '${password}', NULL, 'inactive');";
    $result = mysqli_query($connection, $sql);
    if($result){
        echo "Successful";
    }
?>