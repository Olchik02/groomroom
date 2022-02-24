<?php
$bdhost = "localhost";
$bdname = "groomroom";
$bduser = "root";
$bdpassword = "";

//подключаемся к базе данных
$link =new mysqli($bdhost, $bduser, $bdpassword, $bdname);
if ($link->connect_errno)
{
    echo "Ошибка при подключение к БД: $link->connect_error";
}
?>