<?php
if(empty($_POST))
    exit();
$name = $_POST['fio'];
$login = $_POST['login'];
$mail = $_POST['mail'];
$password = md5($_POST['password']);

include 'bd.php';
$query = "INSERT INTO `users` (`name`, `login`, `mail`, `password`) VALUES ('$name', '$login', '$mail', '$password')";
$link->query($query) or die($link->error);
$link->close();
?>