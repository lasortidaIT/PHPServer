<?php
header("Access-Control-Allow-Origin: http://localhost:63342");
if (isset($GLOBALS["HTTP_RAW_POST_DATA"])) {
    $imageData = $GLOBALS['HTTP_RAW_POST_DATA'];
    $filteredData = substr($imageData, strpos($imageData, ",") + 1);
    $unencodedData = base64_decode($filteredData);
    $fp = fopen('test.png', 'wb');

    fwrite($fp, $unencodedData);
    fclose($fp);
}
?>