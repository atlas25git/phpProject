<?php

session_start();

if(empty($_SESSION['email'] AND $_SESSION['password']))
{
    header('location: adminlogin.php');
}

?> 