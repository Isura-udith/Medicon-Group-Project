<?php

$mysqli = require __DIR__ . "/database.php";

$sql =sprintf("SELECT * FROM user where Email='%s'",$mysqli->real_escape_string($_GET["Email"]));

$result= $mysqli->query($sql);
$is_available =$result->num_rows === 0;

header("Content-Type: applicatio/json");
echo json_encode(["available" => $is_available]);