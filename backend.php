<?php
session_start();

// Initialize an empty array for messages if it doesn't exist in the session
if (!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = [];
}

// Function to add a message to the session "messages" array
// "Text" is a key that contains the messages it self and the value is "$message".
// "isUser" is a key that checks if the message is from the user or the bot.
// if addmessage function is called with true, the message is from the user.
function addMessage($message, $isUser = false)
{
    $_SESSION['messages'][] = [
        'text' => $message,
        'isUser' => $isUser,
    ];
}

// Function to get all messages from the session
function getMessages()
{
    return $_SESSION['messages'];
}

// Define an array of keywords and responses
$keywordResponses = [
    'hello' => 'Hello! How can I assist you today?',
    'how are you' => 'I am just a computer program, but thanks for asking!',
    'programming' => 'What programming language are you interested in?',
    'help' => 'Sure, I can help. What do you need assistance with?',
    'hej' => 'Hej! Hvordan kan jeg hjælpe dig i dag?',
    '😎' => 'Sejt😎',
];

// Function to process user input and generate responses
function processUserInput($userMessage)
{
    global $keywordResponses;

    // Convert user input to lowercase for case-insensitive matching
    $userMessageLower = strtolower($userMessage);

    // Check if any keyword matches the user's message
    // Her hentes hver besked fra $_SESSION['messages'] i en løkke, og nøglerne 'text' og 'isUser' bruges
    // til at hente selve beskedens tekst og bestemme, om beskeden er fra brugeren eller chatboten.

    // $messageText: Dette er variablen, der indeholder selve beskedens tekst, som senere bruges til at vise beskeden i chatgrænsefladen.
    // $isUser: Dette er variablen, der indeholder en værdi (sand eller falsk), der indikerer, om beskeden er fra brugeren (hvis true) eller chatboten (hvis false).
    foreach ($keywordResponses as $keyword => $response) {
        if (strpos($userMessageLower, $keyword) !== false) {
            return $response;
        }
    }

    // If no keyword matches, provide a default response
    return "I'm sorry, I don't understand. Can you please rephrase your question?";
}

// Handle user input
if (isset($_POST['submit'])) {
    $userMessage = $_POST['user_message'];

    if (!empty($userMessage)) {
        addMessage($userMessage, true); // Add user's message to the session

        // Process user input and generate a response
        $response = processUserInput($userMessage);

        // Add the response to the session
        addMessage($response, false);
    }
    header("Location: index.php");
}
