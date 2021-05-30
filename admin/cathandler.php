<?php

include("../partials/connect.php");
$category=$_POST['name'];
$sql = "INSERT INTO categories(name) VALUES('$category')";
$connect->query($sql);
header('location: productsshow.php');
?>