<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gameplay</title>
    <link rel="stylesheet" href="css/note_basic_p2_202504230509.css"> <!-- basic note style !-->
    <link rel="stylesheet" href="css/note_active_color202504221437.css"> <!-- animates the active color !-->
    <link rel="stylesheet" href="css/press_scale202504221411.css"> <!-- makes the notes scale down slightly when pressed !-->
    <link rel="stylesheet" href="css/random_movie202504230809.css"> <!-- css for random movies !-->

</head>
<body>
    <?php include 'php/random_videos.php'; ?> <!-- Include the random videos PHP file -->

<video poster="content/images/bg1.png" playsinline autoplay muted loop id="videoPlayer">
    <?php 
    foreach ($randomVideos as $video) {
        echo '<source src="' . $video . '" type="video/mp4">';
    }
    ?>
</video>

    <script src="js/random_movie202504230803.js"></script> <!-- script for random movies !-->
    <!-- the order in which the arrows appear on the page !-->
    <div class="player" id="player1">
    <div class="arrow left"></div>
    <div class="arrow down"></div>
    <div class="arrow up"></div>
    <div class="arrow right"></div>
        <!-- the order in which the arrows appear on the page with player two !-->
    </div>
    <div class="player" id="player2">
    <div class="arrow left2"></div>
    <div class="arrow down2"></div>
    <div class="arrow up2"></div>
    <div class="arrow right2"></div>
        </div>

    <script src="js/input2p.js"></script> <!-- script for basic input !-->

</body>
</html>
