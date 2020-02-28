<?php
/**
 * Redirect browser
 * @param string $URL
 */
function httpRedirect(string $URL='')
{
    header("Location:" . $URL);
    exit();
}

/**
 * Word cropping
 * @param $maxlen
 * @param $text
 * @return bool|string
 */
function cutByWords($maxlen, $text)
{
    $len = (mb_strlen($text) > $maxlen) ? mb_strripos(mb_substr($text, 0, $maxlen), ' ') : $maxlen;
    $cutStr = mb_substr($text, 0, $len);
    $temp = (mb_strlen($text) > $maxlen) ? $cutStr . '...' : $cutStr;
    return $temp;
}
