<?php

header('Content-Type: application/json');
echo json_encode(json_decode(file_get_contents('php://input'),true));