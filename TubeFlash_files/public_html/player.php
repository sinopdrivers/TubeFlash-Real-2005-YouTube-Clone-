<?php
include("db.php"); 
if (empty($_GET["v"])) {
	$vid = "";
} else {
	$vid = $_GET["v"];
}

//if $vid is null then dont show anything
if ($vid == null) {
die();
}

$vidfetch = mysqli_query($connect, "SELECT * FROM videodb WHERE VideoID='". $vid ."'");
$vdf = mysqli_fetch_assoc($vidfetch);
//do not show anything if the video-stream dosent exist
if (!isset($vdf['VideoID'])) {
die(); // just dies
} else {
	$VideoFile = $vdf['VideoFile'];
}
?>
<html>
<head>
<link href="main.css" rel="stylesheet" type="text/css"/> 
</head>
<body>
        <div style="width:407px;height:390px;" class="videocontainer" id="video_height" oncontextmenu="return false;">
    <script>
        function v_play() {
            if (player.ended || player.paused) {
                player.play();
                document.getElementById("left").style.backgroundImage = "url('ply0.png')";
            } else {
                player.pause();
                document.getElementById("left").style.backgroundImage = "url('ply1.png')";
            }
        }

        function v_mute() {
            if (player.muted) {
                document.getElementById("right").style.backgroundImage = "url('vol1.png')";
                player.muted = false;
            } else {
                document.getElementById("right").style.backgroundImage = "url('vol0.png')";
                player.muted = true;
            }
        }
    </script>
    <div style="overflow:hidden">
    <video width="407" height="320" id="video_player" autoplay>
        <source src="./<?php echo $VideoFile; ?>">
    </video>
    </div>
    <div id="video_controls" style="display:none">
        <div id="left" onclick="v_play()"></div>
        <div id="right" onclick="v_mute()"></div>
        <div id="mid"><div id="midin"></div></div>
    </div>
    <script>document.getElementById("video_controls").style.display = "block"</script>
</div>
<script>
    player = document.getElementById('video_player');
    if(!player.canPlayType || !player.canPlayType('video/mp4').replace(/no/, '')) {
        document.getElementById("video_controls").outerHTML = "";
        document.getElementById("video_height").style.height = "330px";
    }
    player.addEventListener('timeupdate', function() {
        var percentage = (100 / player.duration) * player.currentTime;
        document.getElementById('midin').style.width = percentage + "%";
    }, false);
    progressBar = document.getElementById("mid");
    progressBar.addEventListener("click", function(e) {
        player.currentTime = (e.offsetX / this.offsetWidth) * player.duration;
        if (player.ended || player.paused) {
            player.play();
            document.getElementById("left").style.backgroundImage = "url('ply0.png')";
        }
    });
    player.addEventListener("ended", function() {
        document.getElementById("left").style.backgroundImage = "url('ply1.png')";
    });

</script> 
</body>
</html>