<?php
include_once "../../../backend/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $data = json_decode(file_get_contents("php://input"));
    $username = $data["username"];
    $email = $data["email"];
    $password = $data["password"];
    $confirm_password = $data["confirm_password"];
    $signUp = userSignUp($password, $confirm_password, $username, $email);
    if ($signUp["success"] === true) {
        $signin = userSignIn($username, $password);
        if ($signin["success"] === true) {
            $response = array(
                "success" => true,
                "message" => "User created and logged in",
            );
            http_response_code(201);
            echo json_encode($response);
        } else {
            echo json_encode($signin);
        }
    } else {
        echo json_encode($signUp);
    }
};
