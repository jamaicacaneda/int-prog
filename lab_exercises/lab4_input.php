<?php


$json_data_string = file_get_contents('php://input');


if (empty($json_data_string)) {
    $json_data_string = '{"username": "admin", "password": "1234"}';

}
$data = json_decode($json_data_string, true);

if ($data === null) {
    echo "Error: Could not decode JSON data or received empty input.\n";
} elseif (isset($data['username']) && isset($data['password'])) {
    
    $username = $data['username']; 
    $password = $data['password'];

    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";

} else {
    echo "Error: JSON data is missing 'username' or 'password' keys.\n";
}

?>
