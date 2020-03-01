<?php

if (!empty($_POST["email"]) && !empty($_POST["password"]) ) {

	// Формируем массив для JSON ответа
    $result = array(
    	'email' => $_POST["email"],
    	'password' => $_POST["password"]
    );

    // Переводим массив в JSON
    echo json_encode($result);
}
else {
    die(header("HTTP/1.0 404 Not Found"));}
?>
