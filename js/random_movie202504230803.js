const videoPlayer = document.getElementById('videoPlayer');
const sources = videoPlayer.getElementsByTagName('source');
let currentVideo = 0;
const videoDuration = 4000; // Duration to play each video in milliseconds

// Function to play the current video
function playCurrentVideo() {
    videoPlayer.src = sources[currentVideo].src;
    videoPlayer.play();
    
    // Use a timer to switch to the next video after the specified duration
    setTimeout(cycleVideos, videoDuration);
}

// Function to cycle through videos
function cycleVideos() {
    currentVideo++; // Move to the next video
    if (currentVideo >= sources.length) {
        currentVideo = 0; // Reset to the first video
    }
    playCurrentVideo(); // Play the next video
}

// Start the playback by playing the first video
playCurrentVideo();