<?php
session_start();

$responses = array(
    "Hej" => "Hej med dig!",
    "Hvordan har du det?" => "Jeg har det godt, tak!",
);

if (isset($_GET['message'])) {
    $userMessage = $_GET['message'];
    $botResponse = isset($responses[$userMessage]) ? $responses[$userMessage] : "Jeg forstår ikke beskeden.";

    if (!isset($_SESSION['chat_messages'])) {
        $_SESSION['chat_messages'] = array();
    }


    $_SESSION['chat_messages'][] = array("user" => $userMessage, "bot" => $botResponse);

    header('Content-Type: application/json');
    echo json_encode(array("user" => $userMessage, "bot" => $botResponse));
}
