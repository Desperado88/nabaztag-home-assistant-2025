<?php
// rfid.php

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the raw input from the request body
    $input = file_get_contents('php://input');

    // Parse the input to extract the tag value
    parse_str($input, $data);

    // Check if the 'tag' attribute exists in the request body
    if (isset($data['tag'])) {
        $tag = $data['tag'];

        // Define the TAG IDs and their corresponding URLs
        $tag1 = ' '; // TAG 1
        $tag2 = ' '; // TAG 2

        $url1 = 'http://192.168.0.*/play?u=http://*';
        $url2 = 'http://192.168.0.*/play?u=http://*';

        // Check which tag matches and send the corresponding request
        if ($tag === $tag1) {
            // Send request for TAG 1
            file_get_contents($url1);
            echo "Request sent for TAG 1: $url1";
        } elseif ($tag === $tag2) {
            // Send request for TAG 2
            file_get_contents($url2);
            echo "Request sent for TAG 2: $url2";
        } else {
            // Handle unknown TAG ID
            echo "Unknown TAG ID: $tag";
        }
    } else {
        // Handle missing 'tag' attribute
        echo "Missing 'tag' attribute in request body.";
    }
} else {
    // Handle invalid request method
    echo "Invalid request method. Only POST requests are allowed.";
}
?>