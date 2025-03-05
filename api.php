<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");

// OPTIONS Request ko Allow karna (CORS ke liye)
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // JSON Data ko Receive Karna
    $json = file_get_contents('php://input');
    $data = json_decode($json, true); // JSON to Array Convert

    if (!empty($data)) {
        echo json_encode([
            "status" => 1,
            "message" => "Data received successfully ✅",
            "data" => $data
        ]);
    } else {
        echo json_encode([
            "status" => 0,
            "message" => "Invalid JSON Data ❌"
        ]);
    }
} else {
    echo json_encode([
        "status" => 0,
        "message" => "Only POST method allowed!"
    ]);
}
