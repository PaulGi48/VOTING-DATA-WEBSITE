<?php
include 'include/bincom_test.sql';
ini_set('auto_detect_line_endings', true);

$cache_dir = './cache/';

?>

<!DOCTYPE html>
<html>
<head>
<title>Question 1</title>
<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="Preliminary Online Interview Test For Experience">
    <!-- I consider myself a budding intermidiate PHP/JavaScript Dev -->
</head>

<body>
    <div id="mapouter">
        <div id="gmap_canvas">
            <iframe width="600" height="500" id="gmap_canvas"
                src="https://maps.google.com/maps?q=delta%20state%20nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org">
            </a>
            <br>
            <a href="https://www.embedgooglemap.net">GOOGLE MAPS</a>
        </div>
</div>
<style>
html {
    margin: 0;
    padding: 0;
    background-color: azure;
}

body {
    margin: 0;
    padding: 0

}


#list {
    margin: 500;
    margin-left: 800px;
}

#mapouter {
    position: absolute;
    text-align: center;
    height: 2000px;
    width: 1600px;
}
#gmap_canvas {
    overflow: hidden;
    background: none !important;
    height: 2000px;
    width: 1600px;
}
</style>

</body>

</html>