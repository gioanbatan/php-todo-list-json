<?php
// $test = ["TestServer", "SecondtestServer"];

$string = file_get_contents("todo.json");
$todo_list = json_decode($string, true);


if (isset($_POST["text"])) {
    $add_todo = [
        "text" => $_POST["text"],
        "done" => false
    ];
    $todo_list[] = $add_todo;

    file_put_contents("todo.json", json_encode($todo_list));
} else if (isset($_POST["index"])) {
    $item = $_POST["index"];

    $todo_list[$item]["done"] = !$todo_list[$item]["done"];

    file_put_contents("todo.json", json_encode($todo_list));
}

// Json encoding
$convertedInJson = json_encode($todo_list);

// Change content type
header("Content-Type: application/json");

// Send json to client
echo $convertedInJson;
