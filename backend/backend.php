<?php
session_start();

// responeses maps over users message to find a response 
$responses = array(
    "Hej" => "Hej med dig!",
    "Hvordan har du det?" => "Jeg har det godt, tak!",
);

/* The script checks if a GET parameter named message is set (sent from the JavaScript code in index.php). */
if (isset($_GET['message'])) {
    $userMessage = $_GET['message'];
    $botResponse = isset($responses[$userMessage]) ? $responses[$userMessage] : "Jeg forstår ikke beskeden.";

    /* The script checks if $_SESSION['chat_messages'] exists. If it doesn't, it initializes it as an empty array.
    The user message and bot response are added to $_SESSION['chat_messages'] as an associative array. */
    if (!isset($_SESSION['chat_messages'])) {
        $_SESSION['chat_messages'] = array();
    }


    $_SESSION['chat_messages'][] = array("user" => $userMessage, "bot" => $botResponse);

    /* The script sets the HTTP response content type to JSON and echoes a JSON-encoded object containing the user message and bot response. */
    header('Content-Type: application/json');
    echo json_encode(array("user" => $userMessage, "bot" => $botResponse));
}
