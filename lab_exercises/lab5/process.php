<?php
// Set header to return JSON content
header('Content-Type: application/json');

// Enable CORS if needed (for development)
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Initialize response array
$response = array();

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if name parameter exists and is not empty
    if (isset($_POST['name']) && !empty(trim($_POST['name']))) {

        // Get and sanitize the name
        $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES, 'UTF-8');

        // Create success response
        $response['status'] = 'success';
        $response['message'] = 'Welcome, ' . $name . '!';
        $response['timestamp'] = date('Y-m-d H:i:s');
        $response['data'] = array(
            'name' => $name,
            'length' => strlen($name)
        );

    } else {
        // Name is missing or empty
        $response['status'] = 'error';
        $response['message'] = 'Please provide a valid name.';
    }

} else {
    // Invalid request method
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method. Only POST requests are allowed.';
}

// Return JSON response
echo json_encode($response);
?>
