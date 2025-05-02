<?php
function getRandomVideos($dir, $numberOfVideos) {
    $videos = glob($dir . "*.mp4"); // Get all mp4 files
    if (count($videos) < $numberOfVideos) {
        return $videos; // Not enough videos, return all available
    }
    shuffle($videos); // Shuffle the array of videos
    return array_slice($videos, 0, $numberOfVideos); // Return the first N videos
}

$randomVideos = getRandomVideos('content/random_movies/', 5);
?>