<?php

$json_string = '{"name":"Maria","age":21,"email":"maria@example.com"}';


$obj = json_decode($json_string);
$arr = json_decode($json_string, true);

echo "Object: " . $obj->name . "<br>";
echo "Array: " . $arr["email"];
?>
