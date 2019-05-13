<?php
header('content-type:text/html;charset=utf-8');
date_default_timezone_set('PRC');
$servername = "";
$username = "";
$password = "";
$tablename="artree";
$link = new mysqli($servername, $username, $password,$tablename);

if(isset($_POST["email"])&&isset($_POST["message"])){
    $getEmail = $_POST["email"];
    $getMessage = $_POST["message"];

    $sql="INSERT INTO messages (email,message) VALUES ('".$getEmail."','".$getMessage."')";
    $retval = mysqli_query($link,$sql);
    if(!$retval)    echo "0";
    else    echo "1";
}