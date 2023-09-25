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

    // Store the user's message and bot's response in session
    if (!isset($_SESSION['chat'])) {
        $_SESSION['chat'] = array();
    }

    $_SESSION['chat'][] = array(
        'user' => $userMessage,
        'bot' => $response
    );

    // Return the response to the front-end
    echo json_encode(array('response' => $response));
} else {
    // Handle other HTTP methods if needed
    http_response_code(405); // Method Not Allowed
}
