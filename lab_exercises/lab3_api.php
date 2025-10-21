<?php

header('Content-Type: application/json');


$user_profile = [
    "id"     => "1",
    "name"   => "Theresa",
    "email"  => "teresa@example.com",
    "status" => "active"
];


$json_response = json_encode($user_profile);
echo $json_response;

?>
