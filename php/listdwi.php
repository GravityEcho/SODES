<?php
// Set the target directory
$directoryPath = '../content/songs/konami';
$outputFilePath = 'dwioutput.json'; // Output JSON file path

// Initialize an array to hold the results
$results = [];

// Check if the directory exists
if (is_dir($directoryPath)) {
    // Open the directory
    if ($handle = opendir($directoryPath)) {
        // Loop through the directory entries
        while (false !== ($entry = readdir($handle))) {
            // Skip the current and parent directory entries
            if ($entry !== '.' && $entry !== '..') {
                // Build the full path for the subdirectory
                $subdirectoryPath = $directoryPath . '/' . $entry;
                // Check if it's a directory
                if (is_dir($subdirectoryPath)) {
                    // Construct the expected dwi file path
                    $dwiFilePath = $subdirectoryPath . '/' . $entry . '.dwi';
                    // Check if the dwi file exists
                    if (file_exists($dwiFilePath)) {
                        // Read the contents of the dwi file
                        $fileContents = file_get_contents($dwiFilePath);
                        // Add the entry and its contents to the results array
                        $results[$entry] = $fileContents;
                    } else {
                        // If dwi file does not exist, add a note
                        $results[$entry] = 'File not found.';
                    }
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

// Write the results to dwioutput.json
if (file_put_contents($outputFilePath, json_encode($results, JSON_PRETTY_PRINT)) === false) {
    // Handle error during file write
    http_response_code(500);
    echo json_encode(['error' => 'Unable to write to output file.']);
    exit;
}

// Optionally, you can return a success message
http_response_code(200);
echo json_encode(['message' => 'Output successfully written to dwioutput.json']);