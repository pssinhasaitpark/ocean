<?php
header("Access-Control-Allow-Methods: POST, GET");
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);

    if ($data) {
        echo json_encode([
            "status" => 1,
            "message" => "API Working ✅",
            "data" => $data
        ]);
    } else {
        echo json_encode([
            "status" => 0,
            "message" => "Invalid JSON"
        ]);
    }
} else {
    echo json_encode([
        "status" => 0,
        "message" => "Only POST method allowed"
    ]);
}
?>
