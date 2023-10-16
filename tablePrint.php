<?php
include_once "backend/database.php";
$sql = "SELECT * FROM users ORDER BY id DESC";
$result = $conn->query($sql);

while ($row = $result->fetch_object()) {
    echo $row->username . "<br>" . "<br>";

    var_dump($row);
}
