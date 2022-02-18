<?php
include 'bd.php';
if (!empty($_POST)){
    $login = $_POST['login'];
    $query = "SELECT * FROM `users` WHERE `login`='$login'";
    $result = $link->query($query);
    if($result ->num_rows > 0){
        $message = "Пользоваватель уже зарегистрирован";
        $response = ['status' => 'error', 'message' => $message];
    } 
    else 
        $response =['status' => 'ok'];
    echo json_encode($response);
}
?>