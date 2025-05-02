<?php
// gameplay.php

// Retrieve parameters
$collection = isset($_GET['collection']) ? $_GET['collection'] : '';
$song = isset($_GET['song']) ? $_GET['song'] : '';

// Sanitize input to prevent security issues
$collectionSafe = htmlspecialchars($collection);
$songSafe = htmlspecialchars($song);

// Path to the mp3 file
$mp3Path = "../content/songs/$collection/$song/$song.mp3";

// Check if file exists
if (!file_exists($mp3Path)) {
    echo "<h1>Song not found</h1>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gameplay</title>
    <link rel="stylesheet" href="../css/note_basic202504230836.css"> <!-- basic note style !-->
    <link rel="stylesheet" href="../css/note_color202504230824.css"> <!-- animates the active color !-->
    <link rel="stylesheet" href="../css/press_scale202504221411.css"> <!-- makes the notes scale down slightly when pressed !-->
    <link rel="stylesheet" href="../css/random_movie202504230809.css"> <!-- css for random movies !-->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Gameplay - <?php echo $songSafe; ?></title>


</head>
<body>
    <?php include 'random_videos.php'; ?> <!-- Include the random videos PHP file -->

<video poster="../content/images/bg1.png" playsinline autoplay muted loop id="videoPlayer">
    <?php 
    foreach ($randomVideos as $video) {
        echo '<source src="' . $video . '" type="video/mp4">';
    }
    ?>
</video>
<audio controls autoplay style="display: none;">
  <source src="<?php echo $mp3Path; ?>" type="audio/mpeg" />
  Your browser does not support the audio element.
</audio>
    <script src="../js/random_movie202504230803.js"></script> <!-- script for random movies !-->

        <!-- the order in which the arrows appear on the page !-->
            <div class="player" id="player1">
    <div class="arrow left"></div>
    <div class="arrow down"></div>
    <div class="arrow up"></div>
    <div class="arrow right"></div>
    </div>

    <script src="../js/input.js"></script> <!-- script for basic input !-->


</body>
</html>
