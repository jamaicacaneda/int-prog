<?php

$student = [
    "name"  => "Maria",
    "age"   => 21,
    "course" => "IT"
];


$json_string = json_encode($student);

echo $json_string;
?>
