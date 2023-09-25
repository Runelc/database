<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the user's message from the request
    $requestData = json_decode(file_get_contents('php://input'));
    $userMessage = $requestData->message;

    // Include responses
    include('responses.php');

    // Check if a response exists for the user's message
    if (isset($responses[$userMessage])) {
        $response = $responses[$userMessage];
    } else {
        $response = "Jeg forstår ikke beskeden.";
    }

    // Store the user's message and bot's response separately in session
    if (!isset($_SESSION['chat'])) {
        $_SESSION['chat'] = array();
    }

    // Append user's message to the session with sender information
    $_SESSION['chat'][] = array(
        'sender' => 'Me:', // Use 'Me:' as the sender for user messages
        'message' => $userMessage
    );

    // Append bot's response to the session with sender information
    $_SESSION['chat'][] = array(
        'sender' => 'ChatBot Says:', // Use 'ChatBot Says:' as the sender for bot responses
        'message' => $response
    );

    // Return the response to the front-end
    echo json_encode(array('response' => $response));
} else {
    // Handle other HTTP methods if needed
    http_response_code(405); // Method Not Allowed
}
