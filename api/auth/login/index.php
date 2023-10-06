<?php
include_once "../../../backend/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input
    $data = json_decode(file_get_contents("php://input"));
    $email = $data->email;
    $password = $data->password;
    $signin = userSignIn($password, $email);
    if ($signin["success"] === true) {
        $response = array(
            "success" => true,
            "message" => "User created and logged in",
        );
        http_response_code(200);
        echo json_encode($response);
    } else {
        echo json_encode($signin);
    }
} else {
    echo json_encode($signUp);
}
