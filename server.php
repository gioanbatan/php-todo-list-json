<?php
$test = ["TestServer", "SecondtestServer"];

if (isset($_POST["newTodo"])) {
    $add_Todo = $_POST["newTodo"];
    $test[] = $add_Todo;
}

// Json encoding
$convertedInJson = json_encode($test);

// Change content type
header("Content-type: application/json");

// Send json to client
echo $convertedInJson;
