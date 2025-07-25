<?php
session_start();
if(isset($_SESSION['userid']))
{
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
}
header("Location: ". $_SERVER['HTTP_REFERER']);
?>