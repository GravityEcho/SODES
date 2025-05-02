<?php
// Set the target directory
$directoryPath = '../content/songs';

// Initialize an empty array to hold the subdirectories
$subdirectories = [];

// Check if the directory exists
if (is_dir($directoryPath)) {
    // Open the directory
    if ($handle = opendir($directoryPath)) {
        // Loop through the directory entries
        while (false !== ($entry = readdir($handle))) {
            // Skip the current and parent directory entries
            if ($entry !== '.' && $entry !== '..') {
                // Build the full path
                $fullPath = $directoryPath . '/' . $entry;
                // Check if it's a directory
                if (is_dir($fullPath)) {
                    $subdirectories[] = $entry;
                }
            }
        }
        // Close the directory handle
        closedir($handle);
    } else {
        // Handle the error if the directory cannot be opened
        http_response_code(500); // Internal Server Error
        echo json_encode(['error' => 'Unable to open directory.']);
        exit;
    }
} else {
    // Handle the error if the directory does not exist
    http_response_code(404); // Not Found
    echo json_encode(['error' => 'Directory does not exist.']);
    exit;
}

// Output the subdirectories in JSON format
header('Content-Type: application/json');
echo json_encode($subdirectories);
