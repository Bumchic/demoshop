<?php
include_once("../../connectDB.PHP");
$connection = connectDb();
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
if ($password != $repassword) {
    session_start();
    $_SESSION['err'] = 1;
    header("Location: register.PHP");
} else {
    $passwordhashed = password_hash($password, PASSWORD_DEFAULT);

    $prepstatement = $connection->prepare("select idusers from users where Username = ?");
    $prepstatement->bind_param("s", $username);
    $prepstatement->execute();
    $result = $prepstatement->get_result();
    if ($result->num_rows > 0) {
        echo "this account already exist";
    } else {
        if ($connection->query("insert into users(Username, Password) values ('$username', '$passwordhashed')")) {
            $user = $result->fetch_array();
            $_SESSION['userid'] = $user['idusers'];
            $_SESSION['username'] = $user['Username'];
            header("Location: ". $_SERVER['HTTP_REFERER']);
        } else {
            $_SESSION['err'] = 2;
        }
    }
}
?>