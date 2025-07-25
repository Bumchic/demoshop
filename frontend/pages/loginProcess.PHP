<?php
include_once("../../connectDB.PHP");
$connection = connectDb();
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
session_start();

if ($password != $repassword) {

    $_SESSION['err'] = 1;
} else {

    $prepstatement = $connection->prepare("select idusers, username, Password from users where Username = ?");
    $prepstatement->bind_param("s", $username);
    $prepstatement->execute();
    $result = $prepstatement->get_result();
    if ($result->num_rows > 0) {
        $user = $result -> fetch_assoc();
        if(password_verify($password, $user['Password']))
        {
            
            $_SESSION['username'] = $user['username'];
            $_SESSION['userid'] = $user['idusers'];
            header('Location: ../index.PHP');
            exit();
        }else{
                $_SESSION['err'] = 3;
        }

    } else
    {
        $_SESSION['err'] = 5;
    }
}
header("Location: ". $_SERVER['HTTP_REFERER']);
?>