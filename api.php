header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");

// OPTIONS Request ko Allow Karo
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

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
