<?php
function youtubeId($link)
{
    $regex_pattern =
    '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i';
    $matches = [];
    if(preg_match($regex_pattern, $link, $matches))
        return $matches[1];
    return null;
}
