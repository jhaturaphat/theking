<?php

//define('MYSQL_ASSOC',MYSQLI_ASSOC);

$dsn = "mysql:host=detudomhospital.org;dbname=hospital-detudom";
$user = "root";
$passwd = "detudom11433";
try {
    $conn_db = new PDO($dsn, $user, $passwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"));
    $conn_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $ex) {
    http_response_code(500);
    echo json_encode([
        'message'   => 'database connect error.',
        'error'     => $ex->getMessage()
    ]);
    exit;
}
