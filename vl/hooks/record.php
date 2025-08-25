<?php
// record.php

// Ensure the request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405); // Method Not Allowed
    die('Only POST requests are allowed.');
}

// Get the raw input data from the request body
$rawAudioData = file_get_contents('php://input');

// Check if the raw audio data is empty
if (empty($rawAudioData)) {
    http_response_code(400); // Bad Request
    die('No audio data received.');
}

// Validate the RIFF WAVE header
if (strlen($rawAudioData) < 12 || substr($rawAudioData, 0, 4) !== 'RIFF' || substr($rawAudioData, 8, 4) !== 'WAVE') {
    http_response_code(400); // Bad Request
    die('Invalid RIFF WAVE file format.');
}

// Create the recordings directory if it doesn't exist
$recordingsDir = 'recordings';
if (!is_dir($recordingsDir)) {
    mkdir($recordingsDir, 0755, true);
}

// Generate a unique filename for the recording
$filename = $recordingsDir . '/recording_' . uniqid() . '.wav';

// Save the raw audio data to the file
file_put_contents($filename, $rawAudioData);

// Respond with success message
http_response_code(200); // OK
echo 'Recording saved successfully: ' . $filename;
?>