<?php
// Database Connection
$host = "sql5.freesqldatabase.com"; // apna hostname
$dbname = "sql5765993"; // apna database name
$username = "sql5765993"; // apna username
$password = "qSYQvUk4Jq"; // apna password

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "DB Connected Successfully"; // Testing ke liye
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>
