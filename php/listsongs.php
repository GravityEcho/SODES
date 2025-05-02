<?php
// Get the collection name from query parameter
$collection = isset($_GET['collection']) ? $_GET['collection'] : null;

if (!$collection) {
    http_response_code(400); // Bad Request
    echo json_encode(['error' => 'No collection specified.']);
    exit;
}

// Sanitize collection name to prevent directory traversal
$collectionSafe = basename($collection);

// Set the target directory dynamically based on user input
$directoryPath = "../content/songs/" . $collectionSafe;

// Initialize an array to hold song directories
$subdirectories = [];

// Check if the directory exists
if (is_dir($directoryPath)) {
    // Open the directory
    if ($handle = opendir($directoryPath)) {
        // Loop through directory entries
        while (false !== ($entry = readdir($handle))) {
            if ($entry !== '.' && $entry !== '..') {
                $fullPath = $directoryPath . '/' . $entry;
                // Check if it's a directory
                if (is_dir($fullPath)) {
                    $subdirectories[] = $entry;
                }
            }
        }
        closedir($handle);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Unable to open directory.']);
        exit;
    }
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Collection does not exist.']);
    exit;
}

// Output the list of song directories
header('Content-Type: application/json');
echo json_encode($subdirectories);
?>
