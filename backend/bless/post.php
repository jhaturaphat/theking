<?php

$data = json_decode(file_get_contents('php://input'));

$sql = "INSERT INTO blessing (txt, fullname, ip) VALUES (?,?,?)";
$stmt= $conn_db->prepare($sql);
$stmt->execute([
    $data->bless,
    $data->fullname,
    $_SERVER['REMOTE_ADDR']
]);
http_response_code(200);
echo json_encode(['message' => 'สำเร็จ']);