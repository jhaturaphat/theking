<?php

$data = json_decode(file_get_contents('php://input'));

if(empty($data->bless)){
    http_response_code(404);
    echo json_encode(['message' => 'คุณยังไม่ได้ ลงนามถวายพระพร']);
    exit;
}

$sql = "INSERT INTO blessing (txt, fullname, ip, king_type) VALUES (?,?,?,?)";
$stmt= $conn_db->prepare($sql);
$stmt->execute([
    $data->bless,
    $data->fullname,
    $_SERVER['REMOTE_ADDR'],
    'พระบรมราชินี_64'
]);
http_response_code(200);
echo json_encode(['message' => 'สำเร็จ']);