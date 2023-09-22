<?php

$BASE_URL = "http://localhost:3000";

$servername = "mysql37.unoeuro.com";
$username = "runelc_dk";
$password = "naBkRHDfr2E49ptzG653";
$dbname = "runelc_dk_db";
$port = "3306";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function userSignUp($password, $confirm_password, $username, $email)
{
    global $conn;
    if ($password === $confirm_password) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username = ? OR email = ?");
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $response = array(
                "success" => false,
                "message" => "Username or email already exists"
            );
            userSignIn($username, $password);
            return $response;
            exit();
        }

        $stmt = mysqli_prepare($conn, "INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);
        mysqli_stmt_execute($stmt);
    }
}

function userSignIn($username, $password)
{
    global $conn;
    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username = ?");
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row["password"];
        if (password_verify($password, $hashed_password)) {
            $response = array(
                "success" => true,
                "message" => "User logged in",
                "username" => $row["username"],
                "email" => $row["email"],
                "id" => $row["id"]
            );
            return $response;
        } else {
            $response = array(
                "success" => false,
                "message" => "Wrong password"
            );
            return $response;
        }
    } else {
        $response = array(
            "success" => false,
            "message" => "User does not exist"
        );
        return $response;
    }
}
