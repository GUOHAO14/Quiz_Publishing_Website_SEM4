<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #bgVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            top: 0;
            left: 0;
            z-index: -1;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <video autoplay muted loop id="bgVideo"><source src="media/bgCloudVideo.mp4" type="video/mp4"></video>
</body>
</html>