<?php

require_once("db.php");
$name = $_POST['name'];
$sname = $_POST['sname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$txt = $_POST['txt'];


if (empty($name) || empty($sname)  || empty($email) || empty($pass) || empty($txt)){
   echo "Заполните все поля";
}
$sql = "INSERT INTO `advokat1` (name,sname,email,pass,txt) VALUES ('$name', '$sname', '$email', '$pass', '$txt')";
$conn -> query($sql);