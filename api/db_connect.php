<?php
function connect() {
    $host="localhost";
    $user="root";
    $pw="";
    $db="backend";

    $conn=new mysqli($host,$user,$pw,$db);
    $conn or exit();

    $conn->query("SET NAMES 'utf8'");
    $conn->query("SET CHARACTER SET 'utf8'");

    return $conn;
}
?>