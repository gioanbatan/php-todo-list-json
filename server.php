<?php
$test = ["TestServer", "SecondtestServer"];

// Json encoding
$convertedInJson = json_encode($test);

// Change content type
header("Content-type: application/json");

// Send json to client
echo $convertedInJson;
