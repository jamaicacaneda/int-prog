<?php

$student = [
    "id"    => 101,
    "name"  => "Neo",
    "age"   => 21,
    "course" => "CIT"
];


$json_string = json_encode($student);

echo $json_string;
?>
